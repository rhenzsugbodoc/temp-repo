<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model {
    
    // Get all patients with pagination
    public function get_all_patients($limit = 100, $offset = 0) {
        $this->db->select('patient.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.date_of_birth, user.gender, user.home_address');
        $this->db->from('patient');
        $this->db->join('user', 'patient.user_id = user.user_id');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient by ID
    public function get_patient_by_id($patient_id) {
        $this->db->select('patient.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.date_of_birth, user.gender, user.home_address, user.emergency_contact');
        $this->db->from('patient');
        $this->db->join('user', 'patient.user_id = user.user_id');
        $this->db->where('patient.patient_id', $patient_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    // Get patient by user ID
    public function get_patient_by_user_id($user_id) {
        $this->db->select('patient.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.date_of_birth, user.gender, user.home_address, user.emergency_contact');
        $this->db->from('patient');
        $this->db->join('user', 'patient.user_id = user.user_id');
        $this->db->where('patient.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    // Create patient profile
    public function create_patient($data) {
        if ($this->db->insert('patient', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    // Update patient profile
    public function update_patient($patient_id, $data) {
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('patient', $data);
    }
    
    // Delete patient
    public function delete_patient($patient_id) {
        $this->db->where('patient_id', $patient_id);
        return $this->db->delete('patient');
    }
    
    // Get patient's appointments
    public function get_patient_appointments($patient_id, $status = null) {
        $this->db->select('appointments.*, doctor.*, user.first_name as doctor_first_name, user.last_name as doctor_last_name, facility.facility_name');
        $this->db->from('appointments');
        $this->db->join('doctor', 'appointments.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user', 'doctor.user_id = user.user_id', 'left');
        $this->db->join('facility', 'appointments.facility_id = facility.facility_id', 'left');
        $this->db->where('appointments.patient_id', $patient_id);
        
        if ($status) {
            $this->db->where('appointments.status', $status);
        }
        
        $this->db->order_by('appointments.appointment_date', 'DESC');
        $this->db->order_by('appointments.appointment_time', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient's medications
    public function get_patient_medications($patient_id, $active_only = true) {
        $this->db->select('medications.*, user.first_name as doctor_first_name, user.last_name as doctor_last_name');
        $this->db->from('medications');
        $this->db->join('doctor', 'medications.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user', 'doctor.user_id = user.user_id', 'left');
        $this->db->where('medications.patient_id', $patient_id);
        
        if ($active_only) {
            $this->db->where('medications.is_active', 1);
        }
        
        $this->db->order_by('medications.start_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient's medication logs
    public function get_medication_logs($patient_id, $medication_id = null, $limit = 50) {
        $this->db->select('medication_logs.*, medications.medication_name, medications.dosage, caregiver.caregiver_id, user.first_name as caregiver_first_name, user.last_name as caregiver_last_name');
        $this->db->from('medication_logs');
        $this->db->join('medications', 'medication_logs.medication_id = medications.medication_id');
        $this->db->join('caregiver', 'medication_logs.caregiver_id = caregiver.caregiver_id', 'left');
        $this->db->join('user', 'caregiver.user_id = user.user_id', 'left');
        $this->db->where('medications.patient_id', $patient_id);
        
        if ($medication_id) {
            $this->db->where('medication_logs.medication_id', $medication_id);
        }
        
        $this->db->order_by('medication_logs.scheduled_time', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient's vital signs
    public function get_vital_signs($patient_id, $limit = 30) {
        $this->db->select('vital_signs.*, caregiver.caregiver_id, user.first_name as caregiver_first_name, user.last_name as caregiver_last_name');
        $this->db->from('vital_signs');
        $this->db->join('caregiver', 'vital_signs.caregiver_id = caregiver.caregiver_id', 'left');
        $this->db->join('user', 'caregiver.user_id = user.user_id', 'left');
        $this->db->where('vital_signs.patient_id', $patient_id);
        $this->db->order_by('vital_signs.recorded_at', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient's care plans
    public function get_care_plans($patient_id, $status = null) {
        $this->db->select('care_plans.*, doctor.*, user.first_name as doctor_first_name, user.last_name as doctor_last_name');
        $this->db->from('care_plans');
        $this->db->join('doctor', 'care_plans.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user', 'doctor.user_id = user.user_id', 'left');
        $this->db->where('care_plans.patient_id', $patient_id);
        
        if ($status) {
            $this->db->where('care_plans.status', $status);
        }
        
        $this->db->order_by('care_plans.start_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get care plan activities
    public function get_care_plan_activities($care_plan_id) {
        $this->db->select('*');
        $this->db->from('care_activities');
        $this->db->where('care_plan_id', $care_plan_id);
        $this->db->where('is_active', 1);
        $this->db->order_by('scheduled_time', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient's medical records
    public function get_medical_records($patient_id, $record_type = null) {
        $this->db->select('medical_records.*, doctor.*, user.first_name as doctor_first_name, user.last_name as doctor_last_name');
        $this->db->from('medical_records');
        $this->db->join('doctor', 'medical_records.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user', 'doctor.user_id = user.user_id', 'left');
        $this->db->where('medical_records.patient_id', $patient_id);
        
        if ($record_type) {
            $this->db->where('medical_records.record_type', $record_type);
        }
        
        $this->db->order_by('medical_records.record_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient's assigned caregivers
    public function get_assigned_caregivers($patient_id, $active_only = true) {
        $this->db->select('caregiver_assignments.*, caregiver.*, user.first_name, user.last_name, user.phone_number, user.email_address');
        $this->db->from('caregiver_assignments');
        $this->db->join('caregiver', 'caregiver_assignments.caregiver_id = caregiver.caregiver_id');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->where('caregiver_assignments.patient_id', $patient_id);
        
        if ($active_only) {
            $this->db->where('caregiver_assignments.status', 'Active');
        }
        
        $this->db->order_by('caregiver_assignments.assignment_type', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient's billing records
    public function get_billing_records($patient_id, $payment_status = null) {
        $this->db->select('*');
        $this->db->from('billing');
        $this->db->where('patient_id', $patient_id);
        
        if ($payment_status) {
            $this->db->where('payment_status', $payment_status);
        }
        
        $this->db->order_by('billing_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get upcoming appointments (next 30 days)
    public function get_upcoming_appointments($patient_id) {
        $this->db->select('appointments.*, doctor.*, user.first_name as doctor_first_name, user.last_name as doctor_last_name, facility.facility_name');
        $this->db->from('appointments');
        $this->db->join('doctor', 'appointments.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user', 'doctor.user_id = user.user_id', 'left');
        $this->db->join('facility', 'appointments.facility_id = facility.facility_id', 'left');
        $this->db->where('appointments.patient_id', $patient_id);
        $this->db->where('appointments.appointment_date >=', date('Y-m-d'));
        $this->db->where('appointments.appointment_date <=', date('Y-m-d', strtotime('+30 days')));
        $this->db->where_in('appointments.status', ['Scheduled', 'Confirmed']);
        $this->db->order_by('appointments.appointment_date', 'ASC');
        $this->db->order_by('appointments.appointment_time', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get today's medications
    public function get_todays_medications($patient_id) {
        $this->db->select('medications.*, medication_logs.log_id, medication_logs.status as log_status, medication_logs.taken_time');
        $this->db->from('medications');
        $this->db->join('medication_logs', 'medications.medication_id = medication_logs.medication_id AND DATE(medication_logs.scheduled_time) = CURDATE()', 'left');
        $this->db->where('medications.patient_id', $patient_id);
        $this->db->where('medications.is_active', 1);
        $this->db->order_by('medication_logs.scheduled_time', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get patient dashboard summary
    public function get_dashboard_summary($patient_id) {
        $summary = [];
        
        // Count upcoming appointments
        $this->db->where('patient_id', $patient_id);
        $this->db->where('appointment_date >=', date('Y-m-d'));
        $this->db->where_in('status', ['Scheduled', 'Confirmed']);
        $summary['upcoming_appointments'] = $this->db->count_all_results('appointments');
        
        // Count active medications
        $this->db->where('patient_id', $patient_id);
        $this->db->where('is_active', 1);
        $summary['active_medications'] = $this->db->count_all_results('medications');
        
        // Count active care plans
        $this->db->where('patient_id', $patient_id);
        $this->db->where('status', 'Active');
        $summary['active_care_plans'] = $this->db->count_all_results('care_plans');
        
        // Count assigned caregivers
        $this->db->where('patient_id', $patient_id);
        $this->db->where('status', 'Active');
        $summary['assigned_caregivers'] = $this->db->count_all_results('caregiver_assignments');
        
        // Get unpaid balance
        $this->db->select_sum('balance');
        $this->db->where('patient_id', $patient_id);
        $this->db->where_in('payment_status', ['Unpaid', 'Partially Paid', 'Overdue']);
        $query = $this->db->get('billing');
        $summary['unpaid_balance'] = $query->row()->balance ?? 0;
        
        return $summary;
    }
}