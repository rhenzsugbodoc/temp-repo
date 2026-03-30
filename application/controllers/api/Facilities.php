<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Facilities extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Facility_model');
        $this->load->model('Service_request_model');
    }
    
    /**
     * GET /api/facilities
     * Get all facilities (Public - no auth required)
     */
    public function index() {
        // No authentication required - public endpoint
        
        $limit = $this->input->get('limit') ?? 100;
        $offset = $this->input->get('offset') ?? 0;
        
        $facilities = $this->Facility_model->get_all_facilities($limit, $offset);
        
        $this->json_response([
            'success' => true,
            'count' => count($facilities),
            'data' => $facilities
        ], 200);
    }
    
    /**
     * GET /api/facilities/:id
     * Get facility details (Public)
     */
    public function show($facility_id) {
        // No authentication required - public endpoint
        
        if (!$facility_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility ID is required'
            ], 400);
        }
        
        $facility = $this->Facility_model->get_facility_by_id($facility_id);
        
        if (!$facility) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility not found'
            ], 404);
        }
        
        $this->json_response([
            'success' => true,
            'data' => $facility
        ], 200);
    }
    
    /**
     * GET /api/facilities/:id/details
     * Get complete facility information with services, doctors, caregivers
     */
    public function details($facility_id) {
        // No authentication required - public endpoint
        
        if (!$facility_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility ID is required'
            ], 400);
        }
        
        $details = $this->Facility_model->get_facility_details($facility_id);
        
        if (!$details) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility not found'
            ], 404);
        }
        
        $this->json_response([
            'success' => true,
            'data' => $details
        ], 200);
    }
    
    /**
     * GET /api/facilities/:id/services
     * Get all services offered by a facility
     */
    public function services($facility_id) {
        // No authentication required - public endpoint
        
        if (!$facility_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility ID is required'
            ], 400);
        }
        
        $facility = $this->Facility_model->get_facility_by_id($facility_id);
        
        if (!$facility) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility not found'
            ], 404);
        }
        
        $services = $this->Facility_model->get_facility_services($facility_id);
        
        $this->json_response([
            'success' => true,
            'facility' => [
                'facility_id' => $facility->facility_id,
                'facility_name' => $facility->facility_name,
                'address' => $facility->facility_address
            ],
            'count' => count($services),
            'data' => $services
        ], 200);
    }
    
    /**
     * GET /api/facilities/:id/services/grouped
     * Get services grouped by category
     */
    public function services_grouped($facility_id) {
        // No authentication required - public endpoint
        
        if (!$facility_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility ID is required'
            ], 400);
        }
        
        $facility = $this->Facility_model->get_facility_by_id($facility_id);
        
        if (!$facility) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility not found'
            ], 404);
        }
        
        $services = $this->Facility_model->get_facility_services_grouped($facility_id);
        
        $this->json_response([
            'success' => true,
            'facility' => [
                'facility_id' => $facility->facility_id,
                'facility_name' => $facility->facility_name
            ],
            'categories_count' => count($services),
            'data' => $services
        ], 200);
    }
    
    /**
     * GET /api/facilities/:id/doctors
     * Get doctors at a facility
     */
    public function doctors($facility_id) {
        // No authentication required - public endpoint
        
        if (!$facility_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility ID is required'
            ], 400);
        }
        
        $facility = $this->Facility_model->get_facility_by_id($facility_id);
        
        if (!$facility) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility not found'
            ], 404);
        }
        
        $doctors = $this->Facility_model->get_facility_doctors($facility_id);
        
        $this->json_response([
            'success' => true,
            'facility_name' => $facility->facility_name,
            'count' => count($doctors),
            'data' => $doctors
        ], 200);
    }
    
    /**
     * GET /api/facilities/:id/caregivers
     * Get caregivers at a facility
     */
    public function caregivers($facility_id) {
        // No authentication required - public endpoint
        
        if (!$facility_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility ID is required'
            ], 400);
        }
        
        $facility = $this->Facility_model->get_facility_by_id($facility_id);
        
        if (!$facility) {
            $this->json_response([
                'success' => false,
                'message' => 'Facility not found'
            ], 404);
        }
        
        $caregivers = $this->Facility_model->get_facility_caregivers($facility_id);
        
        $this->json_response([
            'success' => true,
            'facility_name' => $facility->facility_name,
            'count' => count($caregivers),
            'data' => $caregivers
        ], 200);
    }
    
    /**
     * GET /api/facilities/available-services
     * Get all available services that facilities can offer (Public)
     */
    public function all_services() {
        // No authentication required - public endpoint
        
        $grouped = $this->input->get('grouped');
        
        if ($grouped === 'true' || $grouped === '1') {
            // Return services grouped by category
            $services = $this->Facility_model->get_all_available_services_grouped();
            
            $this->json_response([
                'success' => true,
                'categories_count' => count($services),
                'data' => $services
            ], 200);
        } else {
            // Return flat list of all services
            $services = $this->Facility_model->get_all_available_services();
            
            $this->json_response([
                'success' => true,
                'count' => count($services),
                'data' => $services
            ], 200);
        }
    }
    
    /**
     * GET /api/facilities/search
     * Search facilities by name or location
     */
    public function search() {
        // No authentication required - public endpoint
        
        $search = $this->input->get('q');
        
        if (!$search) {
            $this->json_response([
                'success' => false,
                'message' => 'Search query parameter "q" is required'
            ], 400);
        }
        
        $limit = $this->input->get('limit') ?? 50;
        $facilities = $this->Facility_model->search_facilities($search, $limit);
        
        $this->json_response([
            'success' => true,
            'search_term' => $search,
            'count' => count($facilities),
            'data' => $facilities
        ], 200);
    }
    
    /**
     * GET /api/facilities/by-service/:service_id
     * Get all facilities that offer a specific service
     */
    public function by_service($service_id) {
        // No authentication required - public endpoint
        
        if (!$service_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Service ID is required'
            ], 400);
        }
        
        $facilities = $this->Facility_model->get_facilities_by_service($service_id);
        
        $this->json_response([
            'success' => true,
            'service_id' => $service_id,
            'count' => count($facilities),
            'data' => $facilities
        ], 200);
    }
    
    /**
     * GET /api/facilities/by-category/:category_id
     * Get facilities that offer services in a specific category
     */
    public function by_category($category_id) {
        // No authentication required - public endpoint
        
        if (!$category_id) {
            $this->json_response([
                'success' => false,
                'message' => 'Category ID is required'
            ], 400);
        }
        
        $facilities = $this->Facility_model->get_facilities_by_category($category_id);
        
        $this->json_response([
            'success' => true,
            'category_id' => $category_id,
            'count' => count($facilities),
            'data' => $facilities
        ], 200);
    }
    
    /**
     * POST /api/facilities
     * Create new facility (Admin only)
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
        
        // Validation
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('facility_name', 'Facility Name', 'required|trim|max_length[200]');
        $this->form_validation->set_rules('facility_address', 'Address', 'required|trim');
        $this->form_validation->set_rules('facility_phone', 'Phone Number', 'trim');
        $this->form_validation->set_rules('facility_email', 'Email', 'valid_email|trim');
        $this->form_validation->set_rules('facility_type', 'Facility Type', 'trim');
        
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        // Handle image blob - decode from base64 if provided
        $facility_image_blob = null;
        if (!empty($input['facility_image_blob'])) {
            log_message('debug', 'Facility image blob received, length: ' . strlen($input['facility_image_blob']));
            $decoded = base64_decode($input['facility_image_blob'], true);
            if ($decoded !== false) {
                $facility_image_blob = $decoded;
                log_message('debug', 'Facility image blob decoded successfully, size: ' . strlen($facility_image_blob) . ' bytes');
            } else {
                log_message('error', 'Failed to decode facility_image_blob from base64');
            }
        } else {
            log_message('debug', 'No facility_image_blob provided in input');
        }
        
        $facility_data = [
            'user_id' => $this->user_id ?? null,
            'facility_name' => $input['facility_name'],
            'facility_address' => $input['facility_address'],
            'facility_type' => $input['facility_type'] ?? null,
            'country' => $input['country'] ?? null,
            'city' => $input['city'] ?? null,
            'province' => $input['province'] ?? null,
            'postal_code' => $input['postal_code'] ?? null,
            'facility_image' => $input['facility_image'] ?? null,
            'facility_image_blob' => $facility_image_blob,
            'facility_phone' => $input['facility_phone'] ?? null,
            'facility_email' => $input['facility_email'] ?? null,
            'facility_website' => $input['facility_website'] ?? null,
            'facility_description' => $input['facility_description'] ?? null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        
        $facility_id = $this->Facility_model->create_facility($facility_data);
        
        if ($facility_id) {
            $this->json_response([
                'success' => true,
                'message' => 'Facility created successfully',
                'data' => ['facility_id' => $facility_id]
            ], 201);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to create facility'
            ], 500);
        }
    }
    
    /**
     * PUT /api/facilities/:id
     * Update facility (Admin only)
     */
    public function update($facility_id) {
        $this->require_role(['Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $facility = $this->Facility_model->get_facility_by_id($facility_id);
        
        if (!$facility) {
            $this->json_response(['success' => false, 'message' => 'Facility not found'], 404);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        $update_data = [];
        $allowed_fields = ['facility_name', 'facility_address', 'facility_type', 'country', 'city', 'province', 'postal_code', 
                          'facility_phone', 'facility_email', 'facility_website', 'facility_description', 'facility_image'];
        
        foreach ($allowed_fields as $field) {
            if (isset($input[$field])) {
                $update_data[$field] = $input[$field];
            }
        }
        
        // Handle image blob - decode from base64 if provided
        if (!empty($input['facility_image_blob'])) {
            log_message('debug', 'Facility image blob received for update, length: ' . strlen($input['facility_image_blob']));
            $decoded = base64_decode($input['facility_image_blob'], true);
            if ($decoded !== false) {
                $update_data['facility_image_blob'] = $decoded;
                log_message('debug', 'Facility image blob decoded successfully, size: ' . strlen($decoded) . ' bytes');
            } else {
                log_message('error', 'Failed to decode facility_image_blob from base64');
            }
        }
        
        if (empty($update_data)) {
            $this->json_response(['success' => false, 'message' => 'No valid fields to update'], 400);
        }
        
        $update_data['updated_at'] = date('Y-m-d H:i:s');
        
        if ($this->Facility_model->update_facility($facility_id, $update_data)) {
            $this->json_response([
                'success' => true,
                'message' => 'Facility updated successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update facility'
            ], 500);
        }
    }
    
    /**
     * POST /api/facilities/services/:id
     * Add service to facility (Admin only)
     * :id is the service_id, facility_id is derived from current_user_id
     */
    public function add_service($service_id) {
        $this->require_role(['Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'post') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        if (!$service_id) {
            $this->json_response(['success' => false, 'message' => 'service_id is required'], 400);
        }
        
        // Get facility_id from current user
        $facility = $this->Facility_model->get_facility_by_user_id($this->current_user_id);
        
        if (!$facility) {
            $this->json_response(['success' => false, 'message' => 'No facility found for current user'], 404);
        }
        
        $result = $this->Facility_model->add_service_to_facility($facility->facility_id, $service_id);
        
        if ($result) {
            $this->json_response([
                'success' => true,
                'message' => 'Service added to facility successfully'
            ], 201);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Service already exists at facility or invalid IDs'
            ], 409);
        }
    }
    
    /**
     * DELETE /api/facilities/:id/services/:service_id
     * Remove service from facility (Admin only)
     */
    public function remove_service($facility_id, $service_id) {
        $this->require_role(['Admin', 'Superadmin']);
        
        if ($this->input->method() !== 'delete') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        if ($this->Facility_model->remove_service_from_facility($facility_id, $service_id)) {
            $this->json_response([
                'success' => true,
                'message' => 'Service removed from facility successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to remove service from facility'
            ], 500);
        }
    }

    /**
     * GET /api/facilities/service-requests/one-time
     * Get one-time service requests for facility (Facility Admin/Owner only)
     */
    public function onetime_requests() {
        // log_message('debug', 'Onetime requests - Start');
        // log_message('debug', 'Current user ID: ' . $this->current_user_id);
        // log_message('debug', 'Current user role: ' . $this->current_user_role);
        
        try {
            $this->require_role(['Facility_Admin', 'Facility_Owner', 'Admin']);
            
            // log_message('debug', 'Role check passed, calling model method');
            $requests = $this->Service_request_model->get_onetime_facility_requests($this->current_user_id);
            
            log_message('debug', 'Requests retrieved: ' . count($requests));
            
            $this->json_response([
                'success' => true,
                'count' => count($requests),
                'data' => $requests
            ], 200);
        } catch (Exception $e) {
            // log_message('error', 'Onetime requests error: ' . $e->getMessage());
            // log_message('error', 'Stack trace: ' . $e->getTraceAsString());
            $this->json_response([
                'success' => false,
                'message' => 'Internal server error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * GET /api/facilities/service-requests/routine
     * Get routine service requests for facility (Facility Admin/Owner only)
     */
    public function routine_requests() {
        // log_message('debug', 'Routine requests - Start');
        // log_message('debug', 'Current user ID: ' . $this->current_user_id);
        // log_message('debug', 'Current user role: ' . $this->current_user_role);
        
        try {
            $this->require_role(['Facility_Admin', 'Facility_Owner', 'Admin']);
            
            // log_message('debug', 'Role check passed, calling model method');
            $requests = $this->Service_request_model->get_routine_facility_requests($this->current_user_id);
            
            // log_message('debug', 'Requests retrieved: ' . count($requests));
            
            $this->json_response([
                'success' => true,
                'count' => count($requests),
                'data' => $requests
            ], 200);
        } catch (Exception $e) {
            // log_message('error', 'Routine requests error: ' . $e->getMessage());
            // log_message('error', 'Stack trace: ' . $e->getTraceAsString());
            $this->json_response([
                'success' => false,
                'message' => 'Internal server error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * GET /api/facilities/patients
     * Get all patients with care plans or service requests
     * Accessible by: Admin, Doctor, Caregiver
     */
    public function get_patients() {
        $this->require_role(['Admin', 'Doctor', 'Caregiver']);
        
        $patients = $this->Facility_model->get_facility_patients($this->current_user_id);
        
        $this->json_response([
            'success' => true,
            'count' => count($patients),
            'data' => $patients
        ], 200);
    }

    /**
     * GET /api/facilities/my-facility
     * Get facility for current logged-in user
     * Accessible by: Facility_Admin, Facility_Owner, Admin
     */
    public function get_my_facility() {
        $this->require_role(['Admin']);
        
        $facility = $this->Facility_model->get_facility_by_user_id($this->current_user_id);
        
        if (!$facility) {
            $this->json_response([
                'success' => false,
                'message' => 'No facility found for this user'
            ], 404);
        }
        
        $this->json_response([
            'success' => true,
            'data' => $facility
        ], 200);
    }
}