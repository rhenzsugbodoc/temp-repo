<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Patients extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Patient_model'); 
        $this->load->model('Service_request_model'); 
        $this->load->model('Prescription_order_model'); 
        $this->load->model('Appointment_model'); 
        $this->load->model('Notification_model');
        $this->load->model('Episode_model');
    }
    
    /**
     * GET /api/patients
     * Get all patients (Doctor, Caregiver, Admin only)
     */
    public function index() {
        $this->require_role(['Doctor', 'Caregiver', 'Nurse', 'Admin', 'Superadmin']);
        
        $limit = $this->input->get('limit') ?? 100;
        $offset = $this->input->get('offset') ?? 0;
        
        $patients = $this->Patient_model->get_all_patients($limit, $offset);
        
        $this->json_response([
            'success' => true,
            'count' => count($patients),
            'data' => $patients
        ], 200);
    }
    
    /**
     * GET /api/patients/profile
     * Get current patient's profile
     */
    public function profile() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found. Please contact administrator.'
            ], 404);
        }
        
        $this->json_response([
            'success' => true,
            'data' => $patient
        ], 200);
    }
    
    /**
     * GET /api/patients/dashboard
     * Get patient dashboard summary
     */
    public function dashboard() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $summary = $this->Patient_model->get_dashboard_summary($patient->patient_id);
        $upcoming_appointments = $this->Patient_model->get_upcoming_appointments($patient->patient_id);
        $todays_medications = $this->Patient_model->get_todays_medications($patient->patient_id);
        
        $this->json_response([
            'success' => true,
            'data' => [
                'patient' => $patient,
                'summary' => $summary,
                'upcoming_appointments' => $upcoming_appointments,
                'todays_medications' => $todays_medications
            ]
        ], 200);
    }
    
    /**
     * GET /api/patients/appointments
     * Get patient's appointments
     */
    public function appointments() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $status = $this->input->get('status');
        $appointments = $this->Patient_model->get_patient_appointments($patient->patient_id, $status);
        
        $this->json_response([
            'success' => true,
            'count' => count($appointments),
            'data' => $appointments
        ], 200);
    }
    
    /**
     * GET /api/patients/medications
     * Get patient's medications
     */
    public function medications() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $active_only = $this->input->get('active_only') !== 'false';
        $medications = $this->Patient_model->get_patient_medications($patient->patient_id, $active_only);
        
        $this->json_response([
            'success' => true,
            'count' => count($medications),
            'data' => $medications
        ], 200);
    }
    
    /**
     * GET /api/patients/medication-logs
     * Get patient's medication history
     */
    public function medication_logs() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $medication_id = $this->input->get('medication_id');
        $limit = $this->input->get('limit') ?? 50;
        
        $logs = $this->Patient_model->get_medication_logs($patient->patient_id, $medication_id, $limit);
        
        $this->json_response([
            'success' => true,
            'count' => count($logs),
            'data' => $logs
        ], 200);
    }
    
    /**
     * GET /api/patients/vital-signs
     * Get patient's vital signs history
     */
    public function vital_signs() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $limit = $this->input->get('limit') ?? 30;
        $vital_signs = $this->Patient_model->get_vital_signs($patient->patient_id, $limit);
        
        $this->json_response([
            'success' => true,
            'count' => count($vital_signs),
            'data' => $vital_signs
        ], 200);
    }
    
    /**
     * GET /api/patients/care-plans
     * Get patient's care plans
     */
    public function care_plans() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $status = $this->input->get('status');
        $care_plans = $this->Patient_model->get_care_plans($patient->patient_id, $status);
        
        // Get activities for each care plan
        foreach ($care_plans as $plan) {
            $plan->activities = $this->Patient_model->get_care_plan_activities($plan->care_plan_id);
        }
        
        $this->json_response([
            'success' => true,
            'count' => count($care_plans),
            'data' => $care_plans
        ], 200);
    }
    
    /**
     * GET /api/patients/medical-records
     * Get patient's medical records
     */
    public function medical_records() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $record_type = $this->input->get('type');
        $records = $this->Patient_model->get_medical_records($patient->patient_id, $record_type);
        
        $this->json_response([
            'success' => true,
            'count' => count($records),
            'data' => $records
        ], 200);
    }
    
    /**
     * GET /api/patients/caregivers
     * Get patient's assigned caregivers
     */
    public function caregivers() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $active_only = $this->input->get('active_only') !== 'false';
        $caregivers = $this->Patient_model->get_assigned_caregivers($patient->patient_id, $active_only);
        
        $this->json_response([
            'success' => true,
            'count' => count($caregivers),
            'data' => $caregivers
        ], 200);
    }
    
    /**
     * GET /api/patients/billing
     * Get patient's billing records
     */
    public function billing() {
        $this->require_role(['Patient']);
        
        $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient profile not found'
            ], 404);
        }
        
        $payment_status = $this->input->get('status');
        $billing_records = $this->Patient_model->get_billing_records($patient->patient_id, $payment_status);
        
        $this->json_response([
            'success' => true,
            'count' => count($billing_records),
            'data' => $billing_records
        ], 200);
    }
    
    /**
     * PUT /api/patients/profile
     * Update patient's own profile
     */
    public function update_profile() {
        $this->require_role(['Patient']);
        
        if ($this->input->method() !== 'put') {
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
        
        // Patients can only update certain fields
        $update_data = [];
        $allowed_fields = ['medical_conditions', 'allergies', 'current_medications'];
        
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
        
        if ($this->Patient_model->update_patient($patient->patient_id, $update_data)) {
            $this->json_response([
                'success' => true,
                'message' => 'Profile updated successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to update profile'
            ], 500);
        }
    }
    
    /**
     * GET /api/patients/:id (For doctors/caregivers/admin)
     */
    public function show($patient_id) {
        $this->validate_session();
        
        $patient = $this->Patient_model->get_patient_by_id($patient_id);
        
        if (!$patient) {
            $this->json_response([
                'success' => false,
                'message' => 'Patient not found'
            ], 404);
        }
        
        // Patients can only view their own profile
        if ($this->current_user_role === 'Patient') {
            if (!$this->is_own_resource($patient->user_id)) {
                $this->json_response([
                    'success' => false,
                    'message' => 'Forbidden - You can only view your own profile'
                ], 403);
            }
        }
        
        $this->json_response([
            'success' => true,
            'data' => $patient
        ], 200);
    }

    /**
 * GET /api/patients/service-requests
 * Get patient's service requests
 */
public function service_requests() {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $status = $this->input->get('status');
    $requests = $this->Service_request_model->get_patient_requests($patient->patient_id, $status);
    
    $this->json_response([
        'success' => true,
        'count' => count($requests),
        'data' => $requests
    ], 200);
}

/**
 * GET /api/patients/service-requests/one-time
 * Get patient's one-time service requests
 */
public function get_onetime_requests() {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $status = $this->input->get('status'); // Optional filter: Pending, Approved, Completed, Cancelled
    $requests = $this->Service_request_model->get_onetime_requests($patient->patient_id, $status);
    
    $this->json_response([
        'success' => true,
        'count' => count($requests),
        'data' => $requests
    ], 200);
}

/**
 * GET /api/patients/service-requests/routine
 * Get patient's routine service requests (with episode info)
 */
public function get_routine_requests() {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $status = $this->input->get('status');
    $requests = $this->Service_request_model->get_routine_requests($patient->patient_id, $status);
    
    $this->json_response([
        'success' => true,
        'count' => count($requests),
        'data' => $requests
    ], 200);
}

/**
 * GET /api/patients/service-requests/:id
 * Get single service request details
 */
public function get_request_details($request_id) {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $request = $this->Service_request_model->get_request_with_details($request_id, $patient->patient_id);
    
    if (!$request) {
        $this->json_response([
            'success' => false,
            'message' => 'Service request not found or does not belong to you'
        ], 404);
    }
    
    $this->json_response([
        'success' => true,
        'data' => $request
    ], 200);
}

/**
 * POST /api/patients/service-requests/one-time
 * Create one-time service request
 */
public function create_onetime_service() {
    $this->require_role(['Patient']);
    
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
        'service_category' => $input['service_category'],
        'service_type' => 'One-Time',
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
            'message' => 'One-time service request created successfully',
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
 * POST /api/patients/service-requests/routine
 * Create routine service request (Episode of Care)
 */
public function create_routine_service() {
    $this->require_role(['Patient']);
    
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
    
    // Validation for routine service (episode of care)
    $this->form_validation->set_data($input);
    $this->form_validation->set_rules('service_id', 'Service', 'required|numeric');
    $this->form_validation->set_rules('episode_name', 'Episode Name', 'required');
    $this->form_validation->set_rules('episode_type', 'Episode Type', 'required');
    $this->form_validation->set_rules('clinical_category', 'Clinical Category', 'required|in_list[Clinical,Non-clinical]');
    $this->form_validation->set_rules('start_date', 'Start Date', 'required');
    $this->form_validation->set_rules('duration_weeks', 'Duration', 'required|numeric');
    $this->form_validation->set_rules('frequency', 'Frequency', 'required');
    
    if ($this->form_validation->run() === FALSE) {
        $this->json_response([
            'success' => false,
            'message' => 'Validation failed',
            'errors' => $this->form_validation->error_array()
        ], 422);
    }
    
    // Start database transaction
    $this->db->trans_start();
    
    // 1. Create service request
    $request_data = [
        'patient_id' => $patient->patient_id,
        'service_id' => $input['service_id'],
        'service_category' => $input['service_category'],
        'service_type' => 'Routine',
        'service_description' => $input['service_description'] ?? 'Routine care episode',
        'preferred_date' => $input['start_date'],
        'preferred_time' => $input['preferred_time'] ?? '09:00:00',
        'preferred_caregiver_id' => $input['preferred_caregiver_id'] ?? null,
        'facility_id' => $input['facility_id'] ?? null,
        'frequency' => $input['frequency'],
        'duration_weeks' => $input['duration_weeks'],
        'notes' => $input['notes'] ?? null,
        'status' => 'Pending'
    ];
    
    $request_id = $this->Service_request_model->create_request($request_data);
    
    if (!$request_id) {
        $this->db->trans_rollback();
        $this->json_response([
            'success' => false,
            'message' => 'Failed to create service request'
        ], 500);
    }
    
    // 2. Create episode of care
    $end_date = date('Y-m-d', strtotime($input['start_date'] . ' + ' . $input['duration_weeks'] . ' weeks'));
    
    $episode_data = [
        'patient_id' => $patient->patient_id,
        'service_request_id' => $request_id,
        'episode_name' => $input['episode_name'],
        'episode_type' => $input['episode_type'],
        'clinical_category' => $input['clinical_category'],
        'primary_diagnosis' => $input['primary_diagnosis'] ?? null,
        'start_date' => $input['start_date'],
        'end_date' => $end_date,
        'expected_duration_weeks' => $input['duration_weeks'],
        'frequency' => $input['frequency'],
        'assigned_caregiver_id' => $input['preferred_caregiver_id'] ?? null,
        'status' => 'Active',
        'notes' => $input['notes'] ?? null
    ];
    
    $episode_id = $this->Episode_model->create_episode($episode_data);
    
    if (!$episode_id) {
        $this->db->trans_rollback();
        $this->json_response([
            'success' => false,
            'message' => 'Failed to create care episode'
        ], 500);
    }
    
    // 3. Generate intervention schedule
    $interventions = $this->generate_intervention_schedule(
        $episode_id,
        $input['service_id'],
        $input['start_date'],
        $input['duration_weeks'],
        $input['frequency'],
        $input['preferred_time'] ?? '09:00:00',
        $input['preferred_caregiver_id'] ?? null
    );
    
    if (!$interventions) {
        $this->db->trans_rollback();
        $this->json_response([
            'success' => false,
            'message' => 'Failed to generate intervention schedule'
        ], 500);
    }
    
    // Complete transaction
    $this->db->trans_complete();
    
    if ($this->db->trans_status() === FALSE) {
        $this->json_response([
            'success' => false,
            'message' => 'Transaction failed'
        ], 500);
    }
    
    // Create notification
    $this->Notification_model->create_notification([
        'patient_id' => $patient->patient_id,
        'user_id' => $this->current_user_id,
        'notification_type' => 'Service',
        'title' => 'Care Episode Created',
        'message' => 'Your routine care episode "' . $input['episode_name'] . '" has been created with ' . count($interventions) . ' scheduled interventions',
        'is_read' => 0
    ]);
    
    $this->json_response([
        'success' => true,
        'message' => 'Routine service request and care episode created successfully',
        'data' => [
            'request_id' => $request_id,
            'episode_id' => $episode_id,
            'total_interventions' => count($interventions),
            'start_date' => $input['start_date'],
            'end_date' => $end_date
        ]
    ], 201);
}

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

/**
 * PUT /api/patients/service-requests/:id/cancel
 * Cancel service request (One-Time or Routine)
 */
public function cancel_service_request($request_id) {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'put') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    // Get request details first
    $request = $this->Service_request_model->get_request_by_id($request_id);
    
    if (!$request || $request->patient_id != $patient->patient_id) {
        $this->json_response([
            'success' => false,
            'message' => 'Service request not found or does not belong to you'
        ], 404);
    }
    
    // Check if already cancelled
    if ($request->status === 'Cancelled') {
        $this->json_response([
            'success' => false,
            'message' => 'Service request is already cancelled'
        ], 400);
    }
    
    // Check if already completed
    if ($request->status === 'Completed') {
        $this->json_response([
            'success' => false,
            'message' => 'Cannot cancel a completed service request'
        ], 400);
    }
    
    // Start transaction
    $this->db->trans_start();
    
    // Cancel the service request
    $cancelled = $this->Service_request_model->cancel_request($request_id, $patient->patient_id);
    
    if (!$cancelled) {
        $this->db->trans_rollback();
        $this->json_response([
            'success' => false,
            'message' => 'Failed to cancel service request'
        ], 500);
    }
    
    // If it's a routine service, also cancel the episode and future interventions
    if ($request->service_type === 'Routine') {
        // Find associated episode
        $episode = $this->Episode_model->get_episode_by_request_id($request_id);
        
        if ($episode) {
            // Cancel the episode
            $this->Episode_model->cancel_episode($episode->episode_id, $patient->patient_id);
            
            // Cancel all scheduled/future interventions
            $this->Episode_model->cancel_future_interventions($episode->episode_id);
        }
    }
    
    // Complete transaction
    $this->db->trans_complete();
    
    if ($this->db->trans_status() === FALSE) {
        $this->json_response([
            'success' => false,
            'message' => 'Transaction failed'
        ], 500);
    }
    
    // Create notification
    $message = $request->service_type === 'Routine' 
        ? 'Your routine service request and associated care episode have been cancelled'
        : 'Your one-time service request has been cancelled';
    
    $this->Notification_model->create_notification([
        'patient_id' => $patient->patient_id,
        'user_id' => $this->current_user_id,
        'notification_type' => 'Service',
        'title' => 'Service Request Cancelled',
        'message' => $message,
        'is_read' => 0
    ]);
    
    $this->json_response([
        'success' => true,
        'message' => 'Service request cancelled successfully',
        'service_type' => $request->service_type
    ], 200);
}

/**
 * PUT /api/patients/episodes/:id/cancel
 * Cancel care episode (also cancels associated request and future interventions)
 */
public function cancel_episode($episode_id) {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'put') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    // Get episode details
    $episode = $this->Episode_model->get_episode_by_id($episode_id);
    
    if (!$episode || $episode->patient_id != $patient->patient_id) {
        $this->json_response([
            'success' => false,
            'message' => 'Episode not found or does not belong to you'
        ], 404);
    }
    
    // Check if already cancelled
    if ($episode->status === 'Cancelled') {
        $this->json_response([
            'success' => false,
            'message' => 'Episode is already cancelled'
        ], 400);
    }
    
    // Check if already completed
    if ($episode->status === 'Completed') {
        $this->json_response([
            'success' => false,
            'message' => 'Cannot cancel a completed episode'
        ], 400);
    }
    
    // Start transaction
    $this->db->trans_start();
    
    // Cancel the episode
    $cancelled = $this->Episode_model->cancel_episode($episode_id, $patient->patient_id);
    
    if (!$cancelled) {
        $this->db->trans_rollback();
        $this->json_response([
            'success' => false,
            'message' => 'Failed to cancel episode'
        ], 500);
    }
    
    // Cancel all future interventions
    $this->Episode_model->cancel_future_interventions($episode_id);
    
    // Cancel associated service request
    $this->Service_request_model->cancel_request($episode->service_request_id, $patient->patient_id);
    
    // Complete transaction
    $this->db->trans_complete();
    
    if ($this->db->trans_status() === FALSE) {
        $this->json_response([
            'success' => false,
            'message' => 'Transaction failed'
        ], 500);
    }
    
    // Create notification
    $this->Notification_model->create_notification([
        'patient_id' => $patient->patient_id,
        'user_id' => $this->current_user_id,
        'notification_type' => 'Service',
        'title' => 'Care Episode Cancelled',
        'message' => 'Your care episode "' . $episode->episode_name . '" has been cancelled. All future interventions have been removed.',
        'is_read' => 0
    ]);
    
    $this->json_response([
        'success' => true,
        'message' => 'Care episode cancelled successfully'
    ], 200);
}

/**
 * GET /api/patients/episodes
 * Get patient's care episodes
 */
public function episodes() {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $status = $this->input->get('status');
    $episodes = $this->Episode_model->get_patient_episodes($patient->patient_id, $status);
    
    $this->json_response([
        'success' => true,
        'count' => count($episodes),
        'data' => $episodes
    ], 200);
}

/**
 * GET /api/patients/episodes/:id
 * Get episode details with interventions
 */
public function episode_details($episode_id) {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $episode = $this->Episode_model->get_episode_details($episode_id, $patient->patient_id);
    
    if (!$episode) {
        $this->json_response([
            'success' => false,
            'message' => 'Episode not found or does not belong to you'
        ], 404);
    }
    
    $this->json_response([
        'success' => true,
        'data' => $episode
    ], 200);
}

/**
 * GET /api/patients/episodes/:id/interventions
 * Get all interventions for an episode
 */
public function episode_interventions($episode_id) {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    // Verify episode belongs to patient
    $episode = $this->Episode_model->get_episode_by_id($episode_id);
    
    if (!$episode || $episode->patient_id != $patient->patient_id) {
        $this->json_response([
            'success' => false,
            'message' => 'Episode not found or does not belong to you'
        ], 404);
    }
    
    $status = $this->input->get('status'); // Filter by status
    $interventions = $this->Episode_model->get_episode_interventions($episode_id, $status);
    
    $this->json_response([
        'success' => true,
        'episode_name' => $episode->episode_name,
        'count' => count($interventions),
        'data' => $interventions
    ], 200);
}

/**
 * GET /api/patients/episodes/types
 * Get available episode types for selection
 */
public function episode_types() {
    $this->require_role(['Patient']);
    
    $types = [
        [
            'category' => 'Clinical',
            'types' => [
                'Chronic Disease Management (Diabetes)',
                'Chronic Disease Management (Hypertension)',
                'Chronic Disease Management (COPD)',
                'Chronic Disease Management (CHF)',
                'Post-Surgical Recovery (Knee Replacement Surgery)',
                'Post-Surgical Recovery (Hip Replacement Surgery)',
                'Post-Surgical Recovery (Cardiac Surgery)',
                'Post-Hospital Discharge Care (Heart Attack Recovery)',
                'Post-Hospital Discharge Care (Stroke Recovery)',
                'Palliative and End-of-Life Care (Terminal Cancer)',
                'Palliative and End-of-Life Care (Advanced COPD)',
                'Rehabilitation Nursing'
            ]
        ],
        [
            'category' => 'Non-clinical',
            'types' => [
                'No Affiliated Episode of Care'
            ]
        ]
    ];
    
    $this->json_response([
        'success' => true,
        'data' => $types
    ], 200);
}


/**
 * POST /api/patients/appointments
 * Book new appointment
 */
public function book_appointment() {
    $this->require_role(['Patient']);
    
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
    
    // Validation
    $this->form_validation->set_data($input);
    $this->form_validation->set_rules('doctor_id', 'Doctor', 'required|numeric');
    $this->form_validation->set_rules('appointment_type', 'Appointment Type', 'required');
    $this->form_validation->set_rules('appointment_date', 'Date', 'required');
    $this->form_validation->set_rules('appointment_time', 'Time', 'required');
    
    if ($this->form_validation->run() === FALSE) {
        $this->json_response([
            'success' => false,
            'message' => 'Validation failed',
            'errors' => $this->form_validation->error_array()
        ], 422);
    }
    
    $appointment_data = [
        'patient_id' => $patient->patient_id,
        'doctor_id' => $input['doctor_id'],
        'appointment_type' => $input['appointment_type'],
        'appointment_date' => $input['appointment_date'],
        'appointment_time' => $input['appointment_time'],
        'duration_minutes' => $input['duration_minutes'] ?? 30,
        'reason' => $input['reason'] ?? null,
        'facility_id' => $input['facility_id'] ?? null,
        'status' => 'Pending'
    ];
    
    $appointment_id = $this->Appointment_model->create_appointment($appointment_data);
    
    if ($appointment_id) {
        // Create notification
        $this->Notification_model->create_notification([
            'patient_id' => $patient->patient_id,
            'user_id' => $this->current_user_id,
            'notification_type' => 'Appointment',
            'title' => 'Appointment Booked',
            'message' => 'Your appointment has been booked for ' . $input['appointment_date'],
            'scheduled_time' => $input['appointment_date'] . ' ' . $input['appointment_time'],
            'is_read' => 0
        ]);
        
        $this->json_response([
            'success' => true,
            'message' => 'Appointment booked successfully',
            'data' => ['appointment_id' => $appointment_id]
        ], 201);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to book appointment'
        ], 500);
    }
}

/**
 * PUT /api/patients/appointments/:id/cancel
 * Cancel appointment
 */
public function cancel_appointment($appointment_id) {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'put') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    if ($this->Appointment_model->cancel_appointment($appointment_id, $patient->patient_id)) {
        $this->json_response([
            'success' => true,
            'message' => 'Appointment cancelled successfully'
        ], 200);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to cancel appointment or appointment not found'
        ], 500);
    }
}

/**
 * PUT /api/patients/appointments/:id/reschedule
 * Reschedule appointment
 */
public function reschedule_appointment($appointment_id) {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'put') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!$input || !isset($input['new_date']) || !isset($input['new_time'])) {
        $this->json_response(['success' => false, 'message' => 'New date and time required'], 400);
    }
    
    if ($this->Appointment_model->reschedule_appointment($appointment_id, $patient->patient_id, $input['new_date'], $input['new_time'])) {
        $this->json_response([
            'success' => true,
            'message' => 'Appointment rescheduled successfully'
        ], 200);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to reschedule appointment'
        ], 500);
    }
}

/**
 * GET /api/patients/available-doctors
 * Get available doctors
 */
public function available_doctors() {
    $this->require_role(['Patient']);
    
    $doctors = $this->Appointment_model->get_available_doctors();
    
    $this->json_response([
        'success' => true,
        'count' => count($doctors),
        'data' => $doctors
    ], 200);
}

/**
 * GET /api/patients/available-slots
 * Get available time slots for doctor
 */
public function available_slots() {
    $this->require_role(['Patient']);
    
    $doctor_id = $this->input->get('doctor_id');
    $date = $this->input->get('date');
    
    if (!$doctor_id || !$date) {
        $this->json_response([
            'success' => false,
            'message' => 'Doctor ID and date are required'
        ], 400);
    }
    
    $slots = $this->Appointment_model->get_available_slots($doctor_id, $date);
    
    $this->json_response([
        'success' => true,
        'count' => count($slots),
        'data' => $slots
    ], 200);
}

/**
 * GET /api/patients/prescription-orders
 * Get patient's prescription orders
 */
public function prescription_orders() {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $status = $this->input->get('status');
    $orders = $this->Prescription_order_model->get_patient_orders($patient->patient_id, $status);
    
    $this->json_response([
        'success' => true,
        'count' => count($orders),
        'data' => $orders
    ], 200);
}

/**
 * POST /api/patients/prescription-orders
 * Create prescription order
 */
public function create_prescription_order() {
    $this->require_role(['Patient']);
    
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
    
    // Validation
    $this->form_validation->set_data($input);
    $this->form_validation->set_rules('medications_requested', 'Medications', 'required');
    $this->form_validation->set_rules('order_type', 'Order Type', 'required|in_list[Refill,New Prescription]');
    $this->form_validation->set_rules('delivery_address', 'Delivery Address', 'required');
    
    if ($this->form_validation->run() === FALSE) {
        $this->json_response([
            'success' => false,
            'message' => 'Validation failed',
            'errors' => $this->form_validation->error_array()
        ], 422);
    }
    
    $order_data = [
        'patient_id' => $patient->patient_id,
        'pharmacy_id' => $input['pharmacy_id'] ?? null,
        'prescription_image' => $input['prescription_image'] ?? null,
        'medications_requested' => $input['medications_requested'],
        'doctor_name' => $input['doctor_name'] ?? null,
        'order_type' => $input['order_type'],
        'delivery_address' => $input['delivery_address'],
        'notes' => $input['notes'] ?? null,
        'status' => 'Pending'
    ];
    
    $order_id = $this->Prescription_order_model->create_order($order_data);
    
    if ($order_id) {
        // Create notification
        $this->Notification_model->create_notification([
            'patient_id' => $patient->patient_id,
            'user_id' => $this->current_user_id,
            'notification_type' => 'General',
            'title' => 'Prescription Order Submitted',
            'message' => 'Your prescription order has been submitted and is being processed',
            'is_read' => 0
        ]);
        
        $this->json_response([
            'success' => true,
            'message' => 'Prescription order created successfully',
            'data' => ['order_id' => $order_id]
        ], 201);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to create prescription order'
        ], 500);
    }
}

/**
 * PUT /api/patients/prescription-orders/:id/cancel
 * Cancel prescription order
 */
public function cancel_prescription_order($order_id) {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'put') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    if ($this->Prescription_order_model->cancel_order($order_id, $patient->patient_id)) {
        $this->json_response([
            'success' => true,
            'message' => 'Prescription order cancelled successfully'
        ], 200);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to cancel order. Order may be already processed or not found'
        ], 500);
    }
}

/**
 * GET /api/patients/available-pharmacies
 * Get available pharmacies
 */
public function available_pharmacies() {
    $this->require_role(['Patient']);
    
    $pharmacies = $this->Prescription_order_model->get_available_pharmacies();
    
    $this->json_response([
        'success' => true,
        'count' => count($pharmacies),
        'data' => $pharmacies
    ], 200);
}

/**
 * GET /api/patients/notifications
 * Get patient notifications
 */
public function notifications() {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $unread_only = $this->input->get('unread_only') === 'true';
    $notifications = $this->Notification_model->get_patient_notifications($patient->patient_id, $unread_only);
    
    $this->json_response([
        'success' => true,
        'count' => count($notifications),
        'unread_count' => $this->Notification_model->get_unread_count($patient->patient_id),
        'data' => $notifications
    ], 200);
}

/**
 * PUT /api/patients/notifications/:id/read
 * Mark notification as read
 */
public function mark_notification_read($notification_id) {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'put') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    if ($this->Notification_model->mark_as_read($notification_id, $patient->patient_id)) {
        $this->json_response([
            'success' => true,
            'message' => 'Notification marked as read'
        ], 200);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to mark notification as read'
        ], 500);
    }
}

/**
 * PUT /api/patients/notifications/read-all
 * Mark all notifications as read
 */
public function mark_all_notifications_read() {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'put') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    if ($this->Notification_model->mark_all_as_read($patient->patient_id)) {
        $this->json_response([
            'success' => true,
            'message' => 'All notifications marked as read'
        ], 200);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to mark notifications as read'
        ], 500);
    }
}

/**
 * DELETE /api/patients/notifications/:id
 * Delete notification
 */
public function delete_notification($notification_id) {
    $this->require_role(['Patient']);
    
    if ($this->input->method() !== 'delete') {
        $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
    }
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    if ($this->Notification_model->delete_notification($notification_id, $patient->patient_id)) {
        $this->json_response([
            'success' => true,
            'message' => 'Notification deleted successfully'
        ], 200);
    } else {
        $this->json_response([
            'success' => false,
            'message' => 'Failed to delete notification'
        ], 500);
    }
}

/**
 * GET /api/patients/upcoming-reminders
 * Get upcoming reminders (next 24 hours)
 */
public function upcoming_reminders() {
    $this->require_role(['Patient']);
    
    $patient = $this->Patient_model->get_patient_by_user_id($this->current_user_id);
    
    if (!$patient) {
        $this->json_response(['success' => false, 'message' => 'Patient profile not found'], 404);
    }
    
    $reminders = $this->Notification_model->get_upcoming_reminders($patient->patient_id);
    
    $this->json_response([
        'success' => true,
        'count' => count($reminders),
        'data' => $reminders
    ], 200);
}
}