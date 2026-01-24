<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Care_plans extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Care_Plan_model');
        $this->load->model('Patient_model');
        $this->load->model('Facility_model');
    }
    
    /**
     * POST /api/care-plans
     * Create care plan
     * Accessible by: Doctor, Admin
     */
    public function create() {
        $this->require_role(['Doctor', 'Admin']);
        
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
        $this->form_validation->set_rules('doctor_id', 'Doctor ID', 'required|numeric');
        $this->form_validation->set_rules('request_id', 'Request ID', 'required|numeric');
        $this->form_validation->set_rules('plan_name', 'Plan Name', 'required');
        $this->form_validation->set_rules('plan_type', 'Plan Type', 'required|in_list[Medical,Therapy,Rehabilitation,Palliative,Preventive]');
        
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        // Prepare care plan data
        $care_plan_data = [
            'patient_id' => $input['patient_id'],
            'doctor_id' => $input['doctor_id'],
            'request_id' => $input['request_id'],
            'plan_name' => $input['plan_name'],
            'plan_type' => $input['plan_type'],
            'start_date' => date('Y-m-d'), // Current date
            'end_date' => $input['end_date'] ?? null,
            'status' => 'Active', // Auto-set to Active
            'goals' => $input['goals'] ?? null,
            'notes' => $input['notes'] ?? null
        ];
        
        $care_plan_id = $this->Care_Plan_model->create_care_plan($care_plan_data);
        
        if ($care_plan_id) {
            $this->json_response([
                'success' => true,
                'message' => 'Care plan created successfully',
                'data' => ['care_plan_id' => $care_plan_id]
            ], 201);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to create care plan'
            ], 500);
        }
    }
    
    /**
     * GET /api/care-plans/patient/:patient_id
     * Get all care plans for a patient
     * Accessible by: Patient, Doctor, Admin
     */
    public function get_by_patient($patient_id) {
        $this->require_role(['Patient', 'Doctor', 'Admin']);
        
        // If Patient role, verify they can only access their own care plans
        if ($this->current_user_role === 'Patient') {
            $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
            if (!$patient || $patient->patient_id != $patient_id) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Forbidden - You can only view your own care plans'
                ], 403);
            }
        }
        
        $care_plans = $this->Care_Plan_model->get_care_plans_by_patient($patient_id);
        
        $this->json_response([
            'success' => true,
            'count' => count($care_plans),
            'data' => $care_plans
        ], 200);
    }
    
    /**
     * GET /api/care-plans/facility
     * Get all care plans for a facility
     * Accessible by: Facility Admin/Owner
     */
    public function get_by_facility() {
        $this->require_role(['Admin', 'Facility_Owner']);
        
        // Get facility_id from user
        $facility = $this->Facility_model->get_facility_by_user_id($this->current_user_id);
        if (!$facility) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility profile not found'
            ], 404);
        }
        
        $care_plans = $this->Care_Plan_model->get_care_plans_by_facility($facility->facility_id);
        $this->json_response([
            'success' => true,
            'count' => count($care_plans),
            'data' => $care_plans
        ], 200);
    }
    
    /**
     * GET /api/care-plans/:id
     * Get care plan details
     * Accessible by: Patient, Doctor, Admin
     */
    public function show($care_plan_id) {
        $this->require_role(['Patient', 'Doctor', 'Admin']);
        
        $care_plan = $this->Care_Plan_model->get_care_plan_by_id($care_plan_id);
        
        if (!$care_plan) {
            $this->json_response([
                'success' => false,
                'message' => 'Care plan not found'
            ], 404);
        }
        
        // If Patient role, verify they can only access their own care plan
        if ($this->current_user_role === 'Patient') {
            $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
            if (!$patient || $patient->patient_id != $care_plan->patient_id) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Forbidden - You can only view your own care plans'
                ], 403);
            }
        }
        
        // Get care plan activities
        $care_plan->activities = $this->Care_Plan_model->get_care_plan_activities($care_plan_id);
        
        $this->json_response([
            'success' => true,
            'data' => $care_plan
        ], 200);
    }
    
    /**
     * PUT /api/care-plans/:id
     * Update care plan
     * Accessible by: Doctor, Admin
     */
    public function update($care_plan_id) {
        $this->require_role(['Doctor', 'Admin']);
        
        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $care_plan = $this->Care_Plan_model->get_care_plan_by_id($care_plan_id);
        
        if (!$care_plan) {
            $this->json_response([
                'success' => false,
                'message' => 'Care plan not found'
            ], 404);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        // Prepare update data (only allow certain fields to be updated)
        $update_data = [];
        $allowed_fields = ['plan_name', 'plan_type', 'end_date', 'status', 'goals', 'notes'];
        
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
        
        if ($this->Care_Plan_model->update_care_plan($care_plan_id, $update_data)) {
            $this->json_response([
                'success' => true,
                'message' => 'Care plan updated successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update care plan'
            ], 500);
        }
    }
    
    /**
     * DELETE /api/care-plans/:id
     * Delete care plan
     * Accessible by: Doctor, Admin
     */
    public function delete($care_plan_id) {
        $this->require_role(['Doctor', 'Admin']);
        
        if ($this->input->method() !== 'delete') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $care_plan = $this->Care_Plan_model->get_care_plan_by_id($care_plan_id);
        
        if (!$care_plan) {
            $this->json_response([
                'success' => false,
                'message' => 'Care plan not found'
            ], 404);
        }
        
        if ($this->Care_Plan_model->delete_care_plan($care_plan_id)) {
            $this->json_response([
                'success' => true,
                'message' => 'Care plan deleted successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to delete care plan'
            ], 500);
        }
    }
}
