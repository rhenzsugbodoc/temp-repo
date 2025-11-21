<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_request_model extends CI_Model {
    
    // Create service request
    public function create_request($data) {
        if ($this->db->insert('service_requests', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    // Get patient's service requests
    public function get_patient_requests($patient_id, $status = null) {
        $this->db->select('service_requests.*, 
            pc.doctor_id as preferred_caregiver_id, 
            pu.first_name as preferred_caregiver_first_name, 
            pu.last_name as preferred_caregiver_last_name,
            ac.doctor_id as assigned_caregiver_id,
            au.first_name as assigned_caregiver_first_name,
            au.last_name as assigned_caregiver_last_name');
        $this->db->from('service_requests');
        $this->db->join('caregiver pc', 'service_requests.preferred_caregiver_id = pc.doctor_id', 'left');
        $this->db->join('user pu', 'pc.user_id = pu.user_id', 'left');
        $this->db->join('caregiver ac', 'service_requests.assigned_caregiver_id = ac.doctor_id', 'left');
        $this->db->join('user au', 'ac.user_id = au.user_id', 'left');
        $this->db->where('service_requests.patient_id', $patient_id);
        
        if ($status) {
            $this->db->where('service_requests.status', $status);
        }
        
        $this->db->order_by('service_requests.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get request by ID
    public function get_request_by_id($request_id) {
        $this->db->select('service_requests.*, 
            pc.caregiver_id as preferred_caregiver_id, 
            pu.first_name as preferred_caregiver_first_name, 
            pu.last_name as preferred_caregiver_last_name,
            ac.caregiver_id as assigned_caregiver_id,
            au.first_name as assigned_caregiver_first_name,
            au.last_name as assigned_caregiver_last_name');
        $this->db->from('service_requests');
        $this->db->join('caregiver pc', 'service_requests.preferred_caregiver_id = pc.caregiver_id', 'left');
        $this->db->join('user pu', 'pc.user_id = pu.user_id', 'left');
        $this->db->join('caregiver ac', 'service_requests.assigned_caregiver_id = ac.caregiver_id', 'left');
        $this->db->join('user au', 'ac.user_id = au.user_id', 'left');
        $this->db->where('service_requests.request_id', $request_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    // Update service request
    public function update_request($request_id, $data) {
        $this->db->where('request_id', $request_id);
        return $this->db->update('service_requests', $data);
    }
    
    // Cancel service request
    public function cancel_request($request_id, $patient_id) {
        $this->db->where('request_id', $request_id);
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('service_requests', ['status' => 'Cancelled']);
    }
    
    // Get available caregivers
    public function get_available_caregivers() {
        $this->db->select('caregiver.*, user.first_name, user.last_name, user.phone_number');
        $this->db->from('caregiver');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->order_by('user.first_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}