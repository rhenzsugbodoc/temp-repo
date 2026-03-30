<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Caregiver_Assignment extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Caregiver_Assignment_model');
        $this->load->model('Care_Plan_model');
        $this->load->model('Patient_model');
        $this->load->model('Caregiver_model');
    }
    
    /**
     * POST /api/caregiver-assignments
     * Create caregiver assignment
     * Accessible by: Admin only
     */
    public function create() {
        $this->require_role(['Admin']);
        
        if ($this->input->method() !== 'post') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        // Validation
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('patient_id', 'Patient ID', 'required|numeric');
        $this->form_validation->set_rules('caregiver_id', 'Caregiver ID', 'required|numeric');
        $this->form_validation->set_rules('care_plan_id', 'Care Plan ID', 'required|numeric');
        $this->form_validation->set_rules('assignment_type', 'Assignment Type', 'required|in_list[Primary,Secondary,Emergency,Temporary]');
        
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        // Verify that the care plan exists
        $care_plan = $this->Care_Plan_model->get_care_plan_by_id($input['care_plan_id']);
        if (!$care_plan) {
            $this->json_response([
                'success' => false,
                'message' => 'Care plan not found'
            ], 404);
        }
        
        // Verify that patient exists
        $patient = $this->Patient_model->get_patient_by_id($input['patient_id']);
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient not found'
            ], 404);
        }
        
        // Verify that caregiver exists
        $caregiver = $this->Caregiver_model->get_caregiver_by_id($input['caregiver_id']);
        if (!$caregiver) {
            $this->json_response([
                'success' => false,
                'message' => 'Caregiver not found'
            ], 404);
        }
        
        // Prepare assignment data
        $assignment_data = [
            'patient_id' => $input['patient_id'],
            'caregiver_id' => $input['caregiver_id'],
            'care_plan_id' => $input['care_plan_id'],
            'assignment_type' => $input['assignment_type'],
            'end_date' => $input['end_date'] ?? null,
            'shift_schedule' => $input['shift_schedule'] ?? null,
            'responsibilities' => $input['responsibilities'] ?? null,
            'status' => $input['status'] ?? 'Active'
        ];
        
        // start_date is auto-set by database CURRENT_TIMESTAMP
        
        $assignment_id = $this->Caregiver_Assignment_model->create_assignment($assignment_data);
        
        if ($assignment_id) {
            $this->json_response([
                'success' => true,
                'message' => 'Caregiver assignment created successfully',
                'data' => ['assignment_id' => $assignment_id]
            ], 201);
        } else {
            $db_error = $this->db->error();
            $this->json_response([
                'success' => false,
                'message' => 'Failed to create caregiver assignment',
                'db_error_code' => $db_error['code'],
                'db_error_message' => $db_error['message'],
                'last_query' => $this->db->last_query()
            ], 500);
        }
    }
    
    /**
     * GET /api/caregiver-assignments/care-plan/:id
     * Get all caregiver assignments for a care plan
     * Accessible by: Admin, Doctor, Patient
     */
    public function get_by_care_plan($care_plan_id = null) {
        $this->require_role(['Admin', 'Doctor', 'Patient']);
        
        log_message('info', '=== get_by_care_plan called ===');
        log_message('info', 'care_plan_id from request: ' . var_export($care_plan_id, true));
        
        if (!$care_plan_id) {
            log_message('error', 'care_plan_id is missing');
            $this->json_response([
                'success' => false,
                'message' => 'care_plan_id is required'
            ], 400);
        }
        
        // Verify that the care plan exists
        $care_plan = $this->Care_Plan_model->get_care_plan_by_id($care_plan_id);
        
        log_message('info', 'Care plan lookup result: ' . var_export($care_plan, true));
        
        if (!$care_plan) {
            log_message('error', 'Care plan not found for ID: ' . $care_plan_id);
            $this->json_response([
                'success' => false,
                'message' => 'Care plan not found'
            ], 404);
        }
        
        log_message('info', 'Fetching assignments for care_plan_id: ' . $care_plan_id);
        
        $assignments = $this->Caregiver_Assignment_model->get_assignments_by_care_plan($care_plan_id);
        
        log_message('info', 'Retrieved ' . count($assignments) . ' assignment(s)');
        
        $this->json_response([
            'success' => true,
            'count' => count($assignments),
            'data' => $assignments
        ], 200);
    }
    
    /**
     * GET /api/caregiver-assignments/patient/:id
     * Get all caregiver assignments for a patient
     * Accessible by: Admin, Doctor, Patient (own only)
     */
    public function get_by_patient($patient_id = null) {
        $this->require_role(['Admin', 'Doctor', 'Patient']);
        
        if (!$patient_id) {
            $this->json_response([
                'success' => false,
                'message' => 'patient_id is required'
            ], 400);
        }
        
        // If Patient role, verify they can only access their own assignments
        if ($this->current_user_role === 'Patient') {
            $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
            if (!$patient || $patient->patient_id != $patient_id) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Forbidden - You can only view your own caregiver assignments'
                ], 403);
            }
        }
        
        $assignments = $this->Caregiver_Assignment_model->get_assignments_by_patient($patient_id);
        
        $this->json_response([
            'success' => true,
            'count' => count($assignments),
            'data' => $assignments
        ], 200);
    }
    
    /**
     * PUT /api/caregiver-assignments
     * Edit/update caregiver assignment
     * Accessible by: Admin only
     */
    public function update() {
        $this->require_role(['Admin']);
        
        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        if (!isset($input['assignment_id'])) {
            $this->json_response([
                'success' => false,
                'message' => 'assignment_id is required'
            ], 400);
        }
        
        $assignment_id = $input['assignment_id'];
        
        // Verify assignment exists
        $assignment = $this->Caregiver_Assignment_model->get_assignment_by_id($assignment_id);
        if (!$assignment) {
            $this->json_response([
                'success' => false,
                'message' => 'Caregiver assignment not found'
            ], 404);
        }
        
        // Prepare update data (only allow certain fields to be updated)
        $update_data = [];
        $allowed_fields = [
            'assignment_type', 
            'start_date', 
            'end_date', 
            'shift_schedule', 
            'responsibilities', 
            'status'
        ];
        
        foreach ($allowed_fields as $field) {
            if (isset($input[$field])) {
                $update_data[$field] = $input[$field];
            }
        }
        
        if (empty($update_data)) {
            $this->json_response([
                'success' => false,
                'message' => 'No valid fields to update'
            ], 400);
        }
        
        // Validate assignment_type if provided
        if (isset($update_data['assignment_type'])) {
            $valid_types = ['Primary', 'Secondary', 'Emergency', 'Temporary'];
            if (!in_array($update_data['assignment_type'], $valid_types)) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Invalid assignment type'
                ], 422);
            }
        }
        
        // Validate status if provided
        if (isset($update_data['status'])) {
            $valid_statuses = ['Active', 'Inactive', 'Completed'];
            if (!in_array($update_data['status'], $valid_statuses)) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Invalid status'
                ], 422);
            }
        }
        
        if ($this->Caregiver_Assignment_model->update_assignment($assignment_id, $update_data)) {
            $this->json_response([
                'success' => true,
                'message' => 'Caregiver assignment updated successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update caregiver assignment'
            ], 500);
        }
    }
}
