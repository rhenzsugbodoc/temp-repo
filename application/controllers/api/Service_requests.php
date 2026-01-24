<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Service_requests extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Patient_model'); 
        $this->load->model('Service_request_model'); 
        $this->load->model('Notification_model');
        $this->load->model('Episode_model');
    }
    
    /**
     * POST /api/service-requests/create
     * Create one-time service request
     */
    public function create_service_request() {
        $this->require_role(['Patient', 'Admin']);
        
        if ($this->input->method() !== 'post') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        // Validation for one-time service
        $this->form_validation->set_data($input);
        $this->form_validation->set_rules('service_id', 'Service', 'required|numeric');
        $this->form_validation->set_rules('service_description', 'Service Description', 'required');
        $this->form_validation->set_rules('preferred_date', 'Preferred Date', 'required');
        $this->form_validation->set_rules('preferred_time', 'Preferred Time', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->json_response([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $this->form_validation->error_array()
            ], 422);
        }
        
        $request_data = [
            'patient_id' => $patient->patient_id,
            'service_id' => $input['service_id'],
            'service_type' =>  $input['service_type'],
            'service_description' => $input['service_description'],
            'preferred_date' => $input['preferred_date'],
            'preferred_time' => $input['preferred_time'],
            'preferred_caregiver_id' => $input['preferred_caregiver_id'] ?? null,
            'facility_id' => $input['facility_id'] ?? null,
            'notes' => $input['notes'] ?? null,
            'status' => 'Pending'
        ];
        
        $request_id = $this->Service_request_model->create_request($request_data);
        
        if ($request_id) {
            // Create notification
            $this->Notification_model->create_notification([
                'patient_id' => $patient->patient_id,
                'user_id' => $this->current_user_id,
                'notification_type' => 'Service',
                'title' => 'Service Request Submitted',
                'message' => 'Your one-time service request has been submitted successfully',
                'is_read' => 0
            ]);
            
            $this->json_response([
                'success' => true,
                'message' => 'service request created successfully',
                'data' => ['request_id' => $request_id]
            ], 201);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to create service request'
            ], 500);
        }
    }

    /**
     * PUT /api/service-requests/edit
     * Edit service request - update status, admin notes, assigned date/time
     * Accessible by Doctor or Admin roles
     */
    public function edit_service_request() {
        $this->require_role(['Doctor', 'Admin']);
        
        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            $this->json_response(['success' => false, 'message' => 'Invalid JSON input'], 400);
        }
        
        // Get request_id from body
        if (!isset($input['request_id'])) {
            $this->json_response(['success' => false, 'message' => 'Request ID is required'], 400);
        }
        
        $request_id = $input['request_id'];
        
        // Check if request exists
        $request = $this->Service_request_model->get_request_by_id($request_id);
        if (!$request) {
            $this->json_response(['success' => false, 'message' => 'Service request not found'], 404);
        }
        
        // Build update data array with only allowed fields
        $update_data = [];
        
        // Admin notes
        if (isset($input['admin_notes'])) {
            $update_data['admin_notes'] = $input['admin_notes'];
        }
        
        // Status validation and auto-assignment logic
        if (isset($input['status'])) {
            $allowed_statuses = ['Pending', 'Confirmed', 'In Progress', 'Completed', 'Cancelled'];
            if (!in_array($input['status'], $allowed_statuses)) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Invalid status. Allowed values: ' . implode(', ', $allowed_statuses)
                ], 422);
            }
            $update_data['status'] = $input['status'];
    
        }
        
        // Assigned date
        if (isset($input['assigned_date'])) {
            $update_data['assigned_date'] = $input['assigned_date'];
        }
        
        // Assigned time
        if (isset($input['assigned_time'])) {
            $update_data['assigned_time'] = $input['assigned_time'];
        }
        
        if (empty($update_data)) {
            $this->json_response(['success' => false, 'message' => 'No valid fields to update'], 400);
        }
        
        $update_data['updated_at'] = date('Y-m-d H:i:s');
        
        if ($this->Service_request_model->update_request($request_id, $update_data)) {
            $this->json_response([
                'success' => true,
                'message' => 'Service request updated successfully',
                'data' => ['request_id' => $request_id]
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update service request'
            ], 500);
        }
    }
    
    /**
     * POST /api/service-requests/routine
     * Create routine service request (Episode of Care) REMOVED
     */
 
    /**
     * Helper: Generate intervention schedule based on frequency
     */
    private function generate_intervention_schedule($episode_id, $service_id, $start_date, $duration_weeks, $frequency, $preferred_time, $caregiver_id) {
        // Get service details
        $service = $this->db->get_where('services', ['service_id' => $service_id])->row();
        
        if (!$service) {
            return false;
        }
        
        $interventions = [];
        $current_date = new DateTime($start_date);
        $end_date = new DateTime($start_date);
        $end_date->modify('+' . $duration_weeks . ' weeks');
        
        // Determine interval based on frequency
        switch ($frequency) {
            case 'Daily':
                $interval = 1;
                $days_per_week = 7;
                break;
            case 'Twice Daily':
                $interval = 0.5; // Special handling needed
                $days_per_week = 7;
                break;
            case 'Twice Weekly':
                $interval = 3; // Monday and Thursday
                $days_per_week = 2;
                break;
            case 'Three Times Weekly':
                $interval = 2; // Monday, Wednesday, Friday
                $days_per_week = 3;
                break;
            case 'Weekly':
                $interval = 7;
                $days_per_week = 1;
                break;
            case 'Bi-weekly':
                $interval = 14;
                $days_per_week = 0.5;
                break;
            case 'Monthly':
                $interval = 30;
                $days_per_week = 0.25;
                break;
            default:
                $interval = 7; // Default to weekly
                $days_per_week = 1;
        }
        
        // Generate interventions
        while ($current_date < $end_date) {
            $intervention_data = [
                'episode_id' => $episode_id,
                'intervention_type' => $service->name,
                'scheduled_date' => $current_date->format('Y-m-d'),
                'scheduled_time' => $preferred_time,
                'assigned_caregiver_id' => $caregiver_id,
                'status' => 'Scheduled'
            ];
            
            $this->db->insert('care_interventions', $intervention_data);
            $interventions[] = $intervention_data;
            
            // Handle "Twice Daily" separately
            if ($frequency === 'Twice Daily') {
                $evening_intervention = $intervention_data;
                $evening_intervention['scheduled_time'] = date('H:i:s', strtotime($preferred_time) + (8 * 3600)); // 8 hours later
                $this->db->insert('care_interventions', $evening_intervention);
                $interventions[] = $evening_intervention;
                $current_date->modify('+1 day');
            }
            // Handle "Three Times Weekly" (Mon, Wed, Fri)
            else if ($frequency === 'Three Times Weekly') {
                $day_of_week = $current_date->format('N'); // 1 = Monday, 7 = Sunday
                if ($day_of_week == 1) { // Monday
                    $current_date->modify('+2 days'); // Jump to Wednesday
                } else if ($day_of_week == 3) { // Wednesday
                    $current_date->modify('+2 days'); // Jump to Friday
                } else if ($day_of_week == 5) { // Friday
                    $current_date->modify('+3 days'); // Jump to next Monday
                } else {
                    // If starting mid-week, adjust to next Monday
                    $current_date->modify('next Monday');
                }
            }
            // Handle "Twice Weekly" (Mon, Thu)
            else if ($frequency === 'Twice Weekly') {
                $day_of_week = $current_date->format('N');
                if ($day_of_week == 1) { // Monday
                    $current_date->modify('+3 days'); // Jump to Thursday
                } else if ($day_of_week == 4) { // Thursday
                    $current_date->modify('+4 days'); // Jump to next Monday
                } else {
                    // Adjust to next Monday
                    $current_date->modify('next Monday');
                }
            }
            // Regular interval
            else {
                $current_date->modify('+' . $interval . ' days');
            }
        }
        
        return $interventions;
    }
}
