<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_request_model extends CI_Model {
    
    /**
     * Create service request
     */
    public function create_request($data) {
        if ($this->db->insert('service_requests', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    /**
     * Get ONE-TIME service requests only
     */
    public function get_onetime_requests($patient_id, $status = null) {
        $this->db->select('service_requests.*, 
            services.name as service_name,
            service_category.category_name,
            facility.facility_name,
            pc.caregiver_id as preferred_caregiver_id, 
            pu.first_name as preferred_caregiver_first_name, 
            pu.last_name as preferred_caregiver_last_name,
            ac.caregiver_id as assigned_caregiver_id,
            au.first_name as assigned_caregiver_first_name,
            au.last_name as assigned_caregiver_last_name');
        $this->db->from('service_requests');
        $this->db->join('services', 'service_requests.service_id = services.service_id', 'left');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->join('facility', 'service_requests.facility_id = facility.facility_id', 'left');
        $this->db->join('caregiver pc', 'service_requests.preferred_caregiver_id = pc.caregiver_id', 'left');
        $this->db->join('user pu', 'pc.user_id = pu.user_id', 'left');
        $this->db->join('caregiver ac', 'service_requests.assigned_caregiver_id = ac.caregiver_id', 'left');
        $this->db->join('user au', 'ac.user_id = au.user_id', 'left');
        $this->db->where('service_requests.patient_id', $patient_id);
        $this->db->where('service_requests.service_type', 'One-Time');
        
        if ($status) {
            $this->db->where('service_requests.status', $status);
        }
        
        $this->db->order_by('service_requests.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get ROUTINE service requests with episode info
     */
    public function get_routine_requests($patient_id, $status = null) {
        $this->db->select('service_requests.*, 
            services.name as service_name,
            service_category.category_name,
            facility.facility_name,
            care_episodes.episode_id,
            care_episodes.episode_name,
            care_episodes.episode_type,
            care_episodes.start_date,
            care_episodes.end_date,
            care_episodes.status as episode_status,
            pc.caregiver_id as preferred_caregiver_id, 
            pu.first_name as preferred_caregiver_first_name, 
            pu.last_name as preferred_caregiver_last_name,
            ac.caregiver_id as assigned_caregiver_id,
            au.first_name as assigned_caregiver_first_name,
            au.last_name as assigned_caregiver_last_name,
            COUNT(DISTINCT care_interventions.intervention_id) as total_interventions,
            SUM(CASE WHEN care_interventions.status = "Completed" THEN 1 ELSE 0 END) as completed_interventions');
        $this->db->from('service_requests');
        $this->db->join('services', 'service_requests.service_id = services.service_id', 'left');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->join('facility', 'service_requests.facility_id = facility.facility_id', 'left');
        $this->db->join('care_episodes', 'service_requests.request_id = care_episodes.service_request_id', 'left');
        $this->db->join('care_interventions', 'care_episodes.episode_id = care_interventions.episode_id', 'left');
        $this->db->join('caregiver pc', 'service_requests.preferred_caregiver_id = pc.caregiver_id', 'left');
        $this->db->join('user pu', 'pc.user_id = pu.user_id', 'left');
        $this->db->join('caregiver ac', 'service_requests.assigned_caregiver_id = ac.caregiver_id', 'left');
        $this->db->join('user au', 'ac.user_id = au.user_id', 'left');
        $this->db->where('service_requests.patient_id', $patient_id);
        $this->db->where('service_requests.service_type', 'Routine');
        
        if ($status) {
            $this->db->where('service_requests.status', $status);
        }
        
        $this->db->group_by('service_requests.request_id');
        $this->db->order_by('service_requests.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get request with full details
     */
    public function get_request_with_details($request_id, $patient_id) {
        $this->db->select('service_requests.*, 
            services.name as service_name,
            services.description as service_description,
            service_category.category_name,
            facility.facility_name,
            facility.facility_address,
            facility.facility_phone,
            pc.caregiver_id as preferred_caregiver_id, 
            pu.first_name as preferred_caregiver_first_name, 
            pu.last_name as preferred_caregiver_last_name,
            pu.phone_number as preferred_caregiver_phone,
            ac.caregiver_id as assigned_caregiver_id,
            au.first_name as assigned_caregiver_first_name,
            au.last_name as assigned_caregiver_last_name,
            au.phone_number as assigned_caregiver_phone');
        $this->db->from('service_requests');
        $this->db->join('services', 'service_requests.service_id = services.service_id', 'left');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->join('facility', 'service_requests.facility_id = facility.facility_id', 'left');
        $this->db->join('caregiver pc', 'service_requests.preferred_caregiver_id = pc.caregiver_id', 'left');
        $this->db->join('user pu', 'pc.user_id = pu.user_id', 'left');
        $this->db->join('caregiver ac', 'service_requests.assigned_caregiver_id = ac.caregiver_id', 'left');
        $this->db->join('user au', 'ac.user_id = au.user_id', 'left');
        $this->db->where('service_requests.request_id', $request_id);
        $this->db->where('service_requests.patient_id', $patient_id);
        $query = $this->db->get();
        $request = $query->row();
        
        // If routine service, get episode info
        if ($request && $request->service_type === 'Routine') {
            $this->db->select('care_episodes.*, 
                COUNT(DISTINCT care_interventions.intervention_id) as total_interventions,
                SUM(CASE WHEN care_interventions.status = "Completed" THEN 1 ELSE 0 END) as completed_interventions,
                SUM(CASE WHEN care_interventions.status = "Scheduled" THEN 1 ELSE 0 END) as scheduled_interventions');
            $this->db->from('care_episodes');
            $this->db->join('care_interventions', 'care_episodes.episode_id = care_interventions.episode_id', 'left');
            $this->db->where('care_episodes.service_request_id', $request_id);
            $this->db->group_by('care_episodes.episode_id');
            $episode_query = $this->db->get();
            $request->episode = $episode_query->row();
        }
        
        return $request;
    }
    
    /**
     * Get request by ID (basic)
     */
    public function get_request_by_id($request_id) {
        $this->db->select('service_requests.*');
        $this->db->from('service_requests');
        $this->db->where('service_requests.request_id', $request_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Update service request
     */
    public function update_request($request_id, $data) {
        $this->db->where('request_id', $request_id);
        return $this->db->update('service_requests', $data);
    }
    
    /**
     * Cancel service request
     */
    public function cancel_request($request_id, $patient_id) {
        $this->db->where('request_id', $request_id);
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('service_requests', [
            'status' => 'Cancelled',
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
    
    /**
     * Get available caregivers
     */
    public function get_available_caregivers() {
        $this->db->select('caregiver.*, user.first_name, user.last_name, user.phone_number, user.email_address');
        $this->db->from('caregiver');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->order_by('user.first_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}