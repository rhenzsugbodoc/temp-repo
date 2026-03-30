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
        $this->form_validation->set_rules('emergency_contact', 'Emergency Contact', 'trim|numeric');
        $this->form_validation->set_rules('role', 'Role', 'required|in_list[Patient,Caregiver,Doctor,Nurse,Admin,Pharmacy_Owner,Driver,Superadmin]');
        
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
        
        // Handle image blob - decode from base64 if provided
        $user_image_blob = null;
        if (!empty($input['user_image_blob'])) {
            $user_image_blob = base64_decode($input['user_image_blob']);
        }

        // Prepare user data
        $user_data = [
            'first_name' => $input['first_name'],
            'middle_name' => isset($input['middle_name']) ? $input['middle_name'] : null,
            'last_name' => $input['last_name'],
            'email_address' => $input['email_address'],
            'password' => $input['password'],
            'phone_number' => isset($input['phone_number']) ? $input['phone_number'] : null,
            'emergency_contact' => isset($input['emergency_contact']) ? $input['emergency_contact'] : null,
            'date_of_birth' => isset($input['date_of_birth']) ? $input['date_of_birth'] : null,
            'gender' => isset($input['gender']) ? $input['gender'] : null,
            'home_address' => isset($input['home_address']) ? $input['home_address'] : null,
            'role' => $input['role'],
            'user_image_blob' => $user_image_blob
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

            // Auto-create driver profile if role is Driver
            if ($input['role'] === 'Driver') {
                $driver_data = [
                    'user_id' => $user_id
                ];
                $this->db->insert('driver', $driver_data);
            }
            
            // Get full user data
            $user = $this->Auth_model->get_user_by_id($user_id);
            
            // Generate JWT token
            $token_payload = [
                'user_id' => $user->user_id,
                'email' => $user->email_address,
                'role' => $user->role
            ];
            
            $token = generate_jwt($token_payload, 432000); // 5 days expiry
            
            $this->json_response([
                'success' => true,
                'message' => 'User registered successfully',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                    'token_type' => 'Bearer',
                    'expires_in' => 432000
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
            // Encode image blob to base64 if present
            if (isset($user->user_image_blob) && $user->user_image_blob) {
                $user->user_image_blob = base64_encode($user->user_image_blob);
            }
            
            // Generate JWT token
            $token_payload = [
                'user_id' => $user->user_id,
                'email' => $user->email_address,
                'role' => $user->role
            ];
            
            $token = generate_jwt($token_payload, 432000); // 2 hours expiry
            
            // Update last login
            $this->Auth_model->update_last_login($user->user_id);
            
            $this->json_response([
                'success' => true,
                'message' => 'Login successful',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                    'token_type' => 'Bearer',
                    'expires_in' => 432000
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
    
    // Refresh token 
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
            
            $token = generate_jwt($token_payload, 432000); // 5 days expiry
            
            $this->json_response([
                'success' => true,
                'message' => 'Token refreshed successfully',
                'data' => [
                    'token' => $token,
                    'token_type' => 'Bearer',
                    'expires_in' => 432000
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

    // Edit user profile
    public function edit_user() {
        // Only accept PUT requests
        if ($this->input->method() !== 'put') {
            $this->json_response([
                'success' => false,
                'message' => 'Method not allowed'
            ], 405);
        }

        // Validate token to get current user
        $user_id = $this->validate_token();

        // Get JSON input
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response([
                'success' => false,
                'message' => 'Invalid JSON input'
            ], 400);
        }

        // Set validation rules (no password field)
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|max_length[100]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|max_length[100]');
        $this->form_validation->set_rules('email_address', 'Email', 'valid_email|trim|max_length[150]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|numeric');
        $this->form_validation->set_rules('emergency_contact', 'Emergency Contact', 'trim|numeric');

        // Check validation
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }

        // Get current user data
        $current_user = $this->Auth_model->get_user_by_id($user_id);
        
        if (!$current_user) {
            $this->json_response([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }

        // Check if email is being changed and if it already exists
        if (isset($input['email_address']) && $input['email_address'] !== $current_user->email_address) {
            if ($this->Auth_model->email_exists($input['email_address'])) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Email already registered'
                ], 409);
            }
        }

        // Handle image blob - decode from base64 if provided
        $user_image_blob = null;
        if (isset($input['user_image_blob']) && !empty($input['user_image_blob'])) {
            $user_image_blob = base64_decode($input['user_image_blob']);
        }

        // Prepare update data - only include fields that are provided and not empty
        $update_data = [];
        
        if (isset($input['first_name']) && trim($input['first_name']) !== '') {
            $update_data['first_name'] = trim($input['first_name']);
        }
        
        if (isset($input['middle_name'])) {
            $update_data['middle_name'] = trim($input['middle_name']) !== '' ? trim($input['middle_name']) : null;
        }
        
        if (isset($input['last_name']) && trim($input['last_name']) !== '') {
            $update_data['last_name'] = trim($input['last_name']);
        }
        
        if (isset($input['email_address']) && trim($input['email_address']) !== '') {
            $update_data['email_address'] = trim($input['email_address']);
        }
        
        if (isset($input['phone_number'])) {
            $update_data['phone_number'] = trim($input['phone_number']) !== '' ? trim($input['phone_number']) : null;
        }
        
        if (isset($input['emergency_contact'])) {
            $update_data['emergency_contact'] = trim($input['emergency_contact']) !== '' ? trim($input['emergency_contact']) : null;
        }
        
        if (isset($input['date_of_birth'])) {
            $update_data['date_of_birth'] = trim($input['date_of_birth']) !== '' ? trim($input['date_of_birth']) : null;
        }
        
        if (isset($input['gender'])) {
            $update_data['gender'] = trim($input['gender']) !== '' ? trim($input['gender']) : null;
        }
        
        if (isset($input['home_address'])) {
            $update_data['home_address'] = trim($input['home_address']) !== '' ? trim($input['home_address']) : null;
        }

        if ($user_image_blob !== null) {
            $update_data['user_image_blob'] = $user_image_blob;
        }

        // If no data to update
        if (empty($update_data)) {
            $this->json_response([
                'success' => false,
                'message' => 'No valid data to update'
            ], 400);
        }

        // Update user
        $updated = $this->Auth_model->update_user($user_id, $update_data);

        if ($updated) {
            // Get updated user data
            $user = $this->Auth_model->get_user_by_id($user_id);

            // Encode image blob to base64 if present
            if (isset($user->user_image_blob) && $user->user_image_blob) {
                $user->user_image_blob = base64_encode($user->user_image_blob);
            }

            $this->json_response([
                'success' => true,
                'message' => 'User updated successfully',
                'data' => $user
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update user'
            ], 500);
        }
    }

    // Delete user
    public function delete_user($user_id = null) {
        // Only accept DELETE requests
        if ($this->input->method() !== 'delete') {
            $this->json_response([
                'success' => false,
                'message' => 'Method not allowed'
            ], 405);
        }

        // Validate token to ensure user is authenticated
        $current_user_id = $this->validate_token();

        // Check if user_id parameter is provided
        if (!$user_id) {
            $this->json_response([
                'success' => false,
                'message' => 'User ID is required'
            ], 400);
        }

        // Check if user exists
        $user = $this->Auth_model->get_user_by_id($user_id);
        
        if (!$user) {
            $this->json_response([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }

        // Delete user
        $deleted = $this->Auth_model->delete_user($user_id);

        if ($deleted) {
            $this->json_response([
                'success' => true,
                'message' => 'User deleted successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to delete user'
            ], 500);
        }
    }
}