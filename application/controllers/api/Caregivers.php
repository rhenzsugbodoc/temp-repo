
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Caregivers extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Caregiver_model');
    }
    
    /**
     * GET /api/caregivers
     * Get all caregivers (Doctor, Admin only)
     */
    public function index() {
        $this->require_role(['Doctor', 'Nurse', 'Admin', 'Superadmin']);
        
        $limit = $this->input->get('limit') ?? 100;
        $offset = $this->input->get('offset') ?? 0;
        
        $caregivers = $this->Caregiver_model->get_all_caregivers($limit, $offset);
        
        $this->json_response([
            'success' => true,
            'count' => count($caregivers),
            'data' => $caregivers
        ], 200);
    }
    
    /**
     * GET /api/caregivers/:id
     * Get caregiver by ID
     */
    public function show($caregiver_id) {
        $this->validate_session();
        
        $caregiver = $this->Caregiver_model->get_caregiver_by_id($caregiver_id);
        
        if (!$caregiver) {
            $this->json_response([
                'success' => false,
                'message' => 'Caregiver not found'
            ], 404);
        }
        
        // Caregivers can only view their own profile
        if ($this->current_user_role === 'Caregiver') {
            if (!$this->is_own_resource($caregiver->user_id)) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Forbidden - You can only view your own profile'
                ], 403);
            }
        }
        
        $this->json_response([
            'success' => true,
            'data' => $caregiver
        ], 200);
    }
    
    /**
     * GET /api/caregivers/:id/patients
     * Get patients assigned to caregiver
     */
    public function patients($caregiver_id) {
        $this->validate_session();
        
        $caregiver = $this->Caregiver_model->get_caregiver_by_id($caregiver_id);
        
        if (!$caregiver) {
            $this->json_response(['success' => false, 'message' => 'Caregiver not found'], 404);
        }
        
        // Caregivers can only view their own patients
        if ($this->current_user_role === 'Caregiver') {
            if (!$this->is_own_resource($caregiver->user_id)) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Forbidden - You can only view your own patients'
                ], 403);
            }
        }
        
        $patients = $this->Caregiver_model->get_caregiver_patients($caregiver_id);
        
        $this->json_response([
            'success' => true,
            'count' => count($patients),
            'data' => $patients
        ], 200);
    }
    
    /**
     * POST /api/caregivers
     * Create caregiver profile
     */
    public function create() {
        $this->require_role(['Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'post') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('user_id', 'User ID', 'required|numeric');
        $this->form_validation->set_rules('caregiver_type', 'Caregiver Type', 'required|in_list[Family,Professional,Volunteer,Other]');
        
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        $caregiver_data = [
            'user_id' => $input['user_id'],
            'caregiver_type' => $input['caregiver_type'],
            'facility_id' => $input['facility_id'] ?? null
        ];
        
        $caregiver_id = $this->Caregiver_model->create_caregiver($caregiver_data);
        
        if ($caregiver_id) {
            $this->json_response([
                'success' => true,
                'message' => 'Caregiver profile created successfully',
                'data' => ['caregiver_id' => $caregiver_id]
            ], 201);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to create caregiver profile'
            ], 500);
        }
    }
}