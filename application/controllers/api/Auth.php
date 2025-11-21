<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Auth extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->helper('jwt');
    }
    
    // Register new user
    public function register() {
        // Only accept POST requests
        if ($this->input->method() !== 'post') {
            $this->json_response([
                'success' => false,
                'message' => 'Method not allowed'
            ], 405);
        }
        
        // Get JSON input
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response([
                'success' => false,
                'message' => 'Invalid JSON input'
            ], 400);
        }
        
        // Set validation rules
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('email_address', 'Email', 'required|valid_email|trim|max_length[150]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|numeric');
        $this->form_validation->set_rules('role', 'Role', 'required|in_list[Patient,Caregiver,Doctor,Nurse,Admin]');
        
        // Check validation
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        // Check if email already exists
        if ($this->Auth_model->email_exists($input['email_address'])) {
            $this->json_response([
                'success' => false,
                'message' => 'Email already registered'
            ], 409);
        }
        
        // Prepare user data
        $user_data = [
            'first_name' => $input['first_name'],
            'middle_name' => isset($input['middle_name']) ? $input['middle_name'] : null,
            'last_name' => $input['last_name'],
            'email_address' => $input['email_address'],
            'password' => $input['password'],
            'phone_number' => isset($input['phone_number']) ? $input['phone_number'] : null,
            'date_of_birth' => isset($input['date_of_birth']) ? $input['date_of_birth'] : null,
            'gender' => isset($input['gender']) ? $input['gender'] : null,
            'home_address' => isset($input['home_address']) ? $input['home_address'] : null,
            'role' => $input['role']
        ];
        
        // Register user
        $user_id = $this->Auth_model->register_user($user_data);
            
        if ($user_id) {
            // Auto-create patient profile if role is Patient
            if ($input['role'] === 'Patient') {
                $this->load->model('Patient_model');
                
                $patient_data = [
                    'user_id' => $user_id,
                    'medical_conditions' => $input['medical_conditions'] ?? 'None',
                    'allergies' => $input['allergies'] ?? 'None',
                    'current_medications' => $input['current_medications'] ?? 'None',
                    'facility_id' => $input['facility_id'] ?? null
                ];
                
                $this->Patient_model->create_patient($patient_data);
            }
            
            // Auto-create caregiver profile if role is Caregiver
            if ($input['role'] === 'Caregiver') {
                $this->load->model('Caregiver_model');
                
                $caregiver_data = [
                    'user_id' => $user_id,
                    'caregiver_type' => $input['caregiver_type'] ?? 'Professional',
                    'facility_id' => $input['facility_id'] ?? null
                ];
                
                $this->db->insert('caregiver', $caregiver_data);
            }
            
            // Auto-create doctor profile if role is Doctor
            if ($input['role'] === 'Doctor') {
                $this->load->model('Doctor_model');

                $doctor_data = [
                    'user_id' => $user_id,
                    'professional_display_name' => $input['first_name'] . ' ' . $input['last_name'],
                    'specialization' => $input['specialization'] ?? null,
                    'license' => $input['license'] ?? null,
                    'facility_id' => $input['facility_id'] ?? null
                ];
                
                $this->Doctor_model->create_doctor($doctor_data);
            }
            
            // Get full user data
            $user = $this->Auth_model->get_user_by_id($user_id);
            
            // Generate JWT token
            $token_payload = [
                'user_id' => $user->user_id,
                'email' => $user->email_address,
                'role' => $user->role
            ];
            
            $token = generate_jwt($token_payload, 7200); // 2 hours expiry
            
            $this->json_response([
                'success' => true,
                'message' => 'User registered successfully',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                    'token_type' => 'Bearer',
                    'expires_in' => 7200
                ]
            ], 201);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Registration failed'
            ], 500);
        }
    }
    
    // Login user
    public function login() {
        // Only accept POST requests
        if ($this->input->method() !== 'post') {
            $this->json_response([
                'success' => false,
                'message' => 'Method not allowed'
            ], 405);
        }
        
        // Get JSON input
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response([
                'success' => false,
                'message' => 'Invalid JSON input'
            ], 400);
        }
        
        // Set validation rules
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('email_address', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        // Check validation
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        // Attempt login
        $user = $this->Auth_model->login_user($input['email_address'], $input['password']);
        
        if ($user) {
            // Generate JWT token
            $token_payload = [
                'user_id' => $user->user_id,
                'email' => $user->email_address,
                'role' => $user->role
            ];
            
            $token = generate_jwt($token_payload, 7200); // 2 hours expiry
            
            // Update last login
            $this->Auth_model->update_last_login($user->user_id);
            
            $this->json_response([
                'success' => true,
                'message' => 'Login successful',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                    'token_type' => 'Bearer',
                    'expires_in' => 7200
                ]
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Invalid email or password'
            ], 401);
        }
    }
    
    // Get current user
    public function get_user() {
        // Validate token
        $user_id = $this->validate_token();
        
        // Get user data
        $user = $this->Auth_model->get_user_by_id($user_id);
        
        if ($user) {
            $this->json_response([
                'success' => true,
                'data' => $user
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }
    }
    
    // Refresh token IDK HOW THIS WORKS YET
    public function refresh_token() {
        // Validate current token
        $user_id = $this->validate_token();
        
        // Get fresh user data
        $user = $this->Auth_model->get_user_by_id($user_id);
        
        if ($user) {
            // Generate new JWT token
            $token_payload = [
                'user_id' => $user->user_id,
                'email' => $user->email_address,
                'role' => $user->role
            ];
            
            $token = generate_jwt($token_payload, 7200); // 2 hours expiry
            
            $this->json_response([
                'success' => true,
                'message' => 'Token refreshed successfully',
                'data' => [
                    'token' => $token,
                    'token_type' => 'Bearer',
                    'expires_in' => 7200
                ]
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }
    }
    
    // Logout (optional - mainly for client-side token removal)
    public function logout() {
        // Validate token
        $this->validate_token();
        
        // With JWT, logout is mainly client-side (remove token)
        // You could implement token blacklisting here if needed
        
        $this->json_response([
            'success' => true,
            'message' => 'Logout successful. Please remove the token from client.'
        ], 200);
    }
}