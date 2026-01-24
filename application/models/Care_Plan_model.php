<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Care_Plan_model extends CI_Model {
    
    /**
     * Create care plan
     */
    public function create_care_plan($data) {
        if ($this->db->insert('care_plans', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    /**
     * Get care plan by ID
     */
    public function get_care_plan_by_id($care_plan_id) {
        $this->db->select('care_plans.*, 
            patient.patient_id,
            pu.first_name as patient_first_name, 
            pu.last_name as patient_last_name,
            doctor.doctor_id,
            du.first_name as doctor_first_name, 
            du.last_name as doctor_last_name,
            service_requests.service_type,
            service_requests.status as request_status');
        $this->db->from('care_plans');
        $this->db->join('patient', 'care_plans.patient_id = patient.patient_id', 'left');
        $this->db->join('user pu', 'patient.user_id = pu.user_id', 'left');
        $this->db->join('doctor', 'care_plans.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user du', 'doctor.user_id = du.user_id', 'left');
        $this->db->join('service_requests', 'care_plans.request_id = service_requests.request_id', 'left');
        $this->db->where('care_plans.care_plan_id', $care_plan_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Get all care plans for a patient
     */
    public function get_care_plans_by_patient($patient_id) {
        $this->db->select('care_plans.*, 
            doctor.doctor_id,
            du.first_name as doctor_first_name, 
            du.last_name as doctor_last_name,
            du.phone_number as doctor_phone,
            service_requests.service_type,
            service_requests.status as request_status');
        $this->db->from('care_plans');
        $this->db->join('doctor', 'care_plans.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user du', 'doctor.user_id = du.user_id', 'left');
        $this->db->join('service_requests', 'care_plans.request_id = service_requests.request_id', 'left');
        $this->db->where('care_plans.patient_id', $patient_id);
        
     
        
        $this->db->order_by('care_plans.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get all care plans for a facility
     * Gets care plans where service_requests.facility_id matches
     */
    public function get_care_plans_by_facility($facility_id) {
        $this->db->select('care_plans.*, 
            patient.patient_id,
            pu.first_name as patient_first_name, 
            pu.last_name as patient_last_name,
            pu.phone_number as patient_phone,
            doctor.doctor_id,
            du.first_name as doctor_first_name, 
            du.last_name as doctor_last_name,
            service_requests.service_type,
            service_requests.status as request_status');
        $this->db->from('care_plans');
        $this->db->join('patient', 'care_plans.patient_id = patient.patient_id', 'left');
        $this->db->join('user pu', 'patient.user_id = pu.user_id', 'left');
        $this->db->join('doctor', 'care_plans.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user du', 'doctor.user_id = du.user_id', 'left');
        $this->db->join('service_requests', 'care_plans.request_id = service_requests.request_id', 'left');
        $this->db->where('service_requests.facility_id', $facility_id);
        

        
        $this->db->order_by('care_plans.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Update care plan
     */
    public function update_care_plan($care_plan_id, $data) {
        $this->db->where('care_plan_id', $care_plan_id);
        return $this->db->update('care_plans', $data);
    }
    
    /**
     * Delete care plan
     */
    public function delete_care_plan($care_plan_id) {
        $this->db->where('care_plan_id', $care_plan_id);
        return $this->db->delete('care_plans');
    }
    
    /**
     * Get care plan activities
     */
    public function get_care_plan_activities($care_plan_id) {
        $this->db->select('*');
        $this->db->from('care_plan_activities');
        $this->db->where('care_plan_id', $care_plan_id);
        $this->db->order_by('scheduled_date', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
