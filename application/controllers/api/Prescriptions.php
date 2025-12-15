<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Prescriptions extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Pharmacy_model');
    }
    
    /**
     * GET /api/pharmacies
     * Get all pharmacies (Public - no auth required)
     */
    public function index() {
        // No authentication required - public endpoint
        
        $pharmacies = $this->Pharmacy_model->get_available_pharmacies();
        
        $this->json_response([
            'success' => true,
            'count' => count($pharmacies),
            'data' => $pharmacies
        ], 200);
    }
    
    /**
     * GET /api/pharmacies/:id
     * Get pharmacy details by ID (Public)
     */
    public function show($pharmacy_id) {
        // No authentication required - public endpoint
        
        if (!$pharmacy_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Pharmacy ID is required'
            ], 400);
        }
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $pharmacy = $this->db->get('pharmacy')->row();
        
        if (!$pharmacy) {
            $this->json_response([
                'success' => false,
                'message' => 'Pharmacy not found'
            ], 404);
        }
        
        $this->json_response([
            'success' => true,
            'data' => $pharmacy
        ], 200);
    }
    
    /**
     * GET /api/pharmacies/:id/schedule
     * Get pharmacy schedule (Public)
     */
    public function schedule($pharmacy_id) {
        // No authentication required - public endpoint
        
        if (!$pharmacy_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Pharmacy ID is required'
            ], 400);
        }
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $schedule = $this->db->get('pharmacy_schedule')->result();
        
        $this->json_response([
            'success' => true,
            'count' => count($schedule),
            'data' => $schedule
        ], 200);
    }
    
    /**
     * POST /api/pharmacies
     * Create new pharmacy (Pharmacy_Owner or Admin only)
     */
    public function create() {
        $this->require_role(['Pharmacy_Owner',  'Superadmin']);
        
        if ($this->input->method() !== 'post') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        // Validation
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('pharmacy_name', 'Pharmacy Name', 'required|trim|max_length[200]');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|trim');
        
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        $pharmacy_data = [
            'pharmacy_name' => $input['pharmacy_name'],
            'address' => $input['address'],
            'contact_number' => $input['contact_number'] ?? null,
            'email' => $input['email'] ?? null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        
        // Extract schedule if provided
        $schedule = isset($input['schedule']) && is_array($input['schedule']) ? $input['schedule'] : null;
        
        // Create pharmacy (will auto-validate owner_id)
        $pharmacy_id = $this->Pharmacy_model->create_pharmacy($this->current_user_id, $pharmacy_data, $schedule);
        
        if ($pharmacy_id) {
            $this->json_response([
                'success' => true,
                'message' => 'Pharmacy created successfully',
                'data' => ['pharmacy_id' => $pharmacy_id]
            ], 201);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to create pharmacy. Ensure you have Pharmacy_Owner role.'
            ], 500);
        }
    }
    
    /**
     * PUT /api/pharmacies/:id
     * Update pharmacy (Pharmacy_Owner or Admin only)
     */
    public function update($pharmacy_id) {
        $this->require_role(['Pharmacy_Owner', 'Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $pharmacy = $this->db->get('pharmacy')->row();
        
        if (!$pharmacy) {
            $this->json_response(['success' => false, 'message' => 'Pharmacy not found'], 404);
        }
        
        // Check ownership if Pharmacy_Owner
        if ($this->current_user_role === 'Pharmacy_Owner' && $pharmacy->owner_id != $this->current_user_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Forbidden - You can only update your own pharmacy'
            ], 403);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        $update_data = [];
        $allowed_fields = ['pharmacy_name', 'address', 'contact_number', 'email'];
        
        foreach ($allowed_fields as $field) {
            if (isset($input[$field])) {
                $update_data[$field] = $input[$field];
            }
        }
        
        if (empty($update_data)) {
            $this->json_response(['success' => false, 'message' => 'No valid fields to update'], 400);
        }
        
        $update_data['updated_at'] = date('Y-m-d H:i:s');
        
        if ($this->Pharmacy_model->update_pharmacy($pharmacy_id, $update_data)) {
            $this->json_response([
                'success' => true,
                'message' => 'Pharmacy updated successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update pharmacy'
            ], 500);
        }
    }
    
    /**
     * DELETE /api/pharmacies/:id
     * Delete pharmacy (Pharmacy_Owner or Admin only)
     */
    public function delete($pharmacy_id) {
        $this->require_role(['Pharmacy_Owner', 'Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'delete') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $pharmacy = $this->db->get('pharmacy')->row();
        
        if (!$pharmacy) {
            $this->json_response(['success' => false, 'message' => 'Pharmacy not found'], 404);
        }
        
        // Check ownership if Pharmacy_Owner
        if ($this->current_user_role === 'Pharmacy_Owner' && $pharmacy->owner_id != $this->current_user_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Forbidden - You can only delete your own pharmacy'
            ], 403);
        }
        
        if ($this->Pharmacy_model->delete_pharmacy($pharmacy_id)) {
            $this->json_response([
                'success' => true,
                'message' => 'Pharmacy and associated schedules deleted successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to delete pharmacy'
            ], 500);
        }
    }
    
    /**
     * PUT /api/pharmacies/:id/schedule
     * Update pharmacy schedule (Pharmacy_Owner or Admin only)
     */
    public function update_schedule($pharmacy_id) {
        $this->require_role(['Pharmacy_Owner', 'Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $pharmacy = $this->db->get('pharmacy')->row();
        
        if (!$pharmacy) {
            $this->json_response(['success' => false, 'message' => 'Pharmacy not found'], 404);
        }
        
        // Check ownership if Pharmacy_Owner
        if ($this->current_user_role === 'Pharmacy_Owner' && $pharmacy->owner_id != $this->current_user_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Forbidden - You can only update your own pharmacy schedule'
            ], 403);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input || !isset($input['schedule']) || !is_array($input['schedule'])) {
            $this->json_response([
                'success' => false,
                'message' => 'Invalid input. Expected schedule array with day_of_week, opening_time, closing_time'
            ], 400);
        }
        
        if ($this->Pharmacy_model->update_pharmacy_schedule($pharmacy_id, $input['schedule'])) {
            $this->json_response([
                'success' => true,
                'message' => 'Pharmacy schedule updated successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update pharmacy schedule'
            ], 500);
        }
    }
    
    /**
     * POST /api/pharmacies/:id/schedule
     * Add schedule to existing pharmacy (Pharmacy_Owner or Admin only)
     */
    public function add_schedule($pharmacy_id) {
        $this->require_role(['Pharmacy_Owner', 'Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'post') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $pharmacy = $this->db->get('pharmacy')->row();
        
        if (!$pharmacy) {
            $this->json_response(['success' => false, 'message' => 'Pharmacy not found'], 404);
        }
        
        // Check ownership if Pharmacy_Owner
        if ($this->current_user_role === 'Pharmacy_Owner' && $pharmacy->owner_id != $this->current_user_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Forbidden - You can only add schedules to your own pharmacy'
            ], 403);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input || !isset($input['schedule']) || !is_array($input['schedule'])) {
            $this->json_response([
                'success' => false,
                'message' => 'Invalid input. Expected schedule array with day_of_week, opening_time, closing_time'
            ], 400);
        }
        
        if ($this->Pharmacy_model->add_schedule($pharmacy_id, $input['schedule'])) {
            $this->json_response([
                'success' => true,
                'message' => 'Pharmacy schedule added successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to add pharmacy schedule'
            ], 500);
        }
    }
}