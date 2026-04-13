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

    public function get_onetime_facility_requests($user_id) {
        $this->db->select('service_requests.request_id,
            service_requests.patient_id,
            service_requests.service_id,
            service_requests.service_type,
            service_requests.service_description,
            service_requests.preferred_date,
            service_requests.preferred_time,
            service_requests.preferred_caregiver_id,
            service_requests.frequency,
            service_requests.assigned_date,
            service_requests.assigned_time,
            service_requests.duration_weeks,
            service_requests.status,
            service_requests.assigned_caregiver_id,
            service_requests.notes,
            service_requests.admin_notes,
            service_requests.created_at,
            service_requests.updated_at,
            service_requests.facility_id,
            services.name as service_name,
            services.category_id as service_category,
            service_category.category_name,
            patient.patient_id,
            pu.first_name as patient_first_name, 
            pu.last_name as patient_last_name,
            pu.phone_number as patient_phone,
            pc.caregiver_id as preferred_caregiver_id, 
            pcu.first_name as preferred_caregiver_first_name, 
            pcu.last_name as preferred_caregiver_last_name,
            ac.caregiver_id as assigned_caregiver_id,
            acu.first_name as assigned_caregiver_first_name,
            acu.last_name as assigned_caregiver_last_name');
        $this->db->from('service_requests');
        $this->db->join('facility', 'service_requests.facility_id = facility.facility_id');
        $this->db->join('services', 'service_requests.service_id = services.service_id', 'left');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->join('patient', 'service_requests.patient_id = patient.patient_id', 'left');
        $this->db->join('user pu', 'patient.user_id = pu.user_id', 'left');
        $this->db->join('caregiver pc', 'service_requests.preferred_caregiver_id = pc.caregiver_id', 'left');
        $this->db->join('user pcu', 'pc.user_id = pcu.user_id', 'left');
        $this->db->join('caregiver ac', 'service_requests.assigned_caregiver_id = ac.caregiver_id', 'left');
        $this->db->join('user acu', 'ac.user_id = acu.user_id', 'left');
        $this->db->where('facility.user_id', $user_id);
        $this->db->where('service_requests.service_type', 'One-Time');
        
        $this->db->order_by('service_requests.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Get ROUTINE service requests for a facility with episode info
     * Facility ID is derived from current_user_id via facility table
     */
    public function get_routine_facility_requests($user_id) {
        $this->db->select('service_requests.request_id,
            service_requests.patient_id,
            service_requests.service_id,
            service_requests.service_type,
            service_requests.service_description,
            service_requests.preferred_date,
            service_requests.preferred_time,
            service_requests.preferred_caregiver_id,
            service_requests.frequency,
            service_requests.duration_weeks,
            service_requests.status,
            service_requests.assigned_caregiver_id,
            service_requests.assigned_date,
            service_requests.assigned_time,
            service_requests.notes,
            service_requests.admin_notes,
            service_requests.created_at,
            service_requests.updated_at,
            service_requests.facility_id,
            services.name as service_name,
            services.category_id as service_category,
            service_category.category_name,
            patient.patient_id,
            pu.first_name as patient_first_name, 
            pu.last_name as patient_last_name,
            pu.phone_number as patient_phone,
            pc.caregiver_id as preferred_caregiver_id, 
            pcu.first_name as preferred_caregiver_first_name, 
            pcu.last_name as preferred_caregiver_last_name,
            ac.caregiver_id as assigned_caregiver_id,
            acu.first_name as assigned_caregiver_first_name,
            acu.last_name as assigned_caregiver_last_name');
        $this->db->from('service_requests');
        $this->db->join('facility', 'service_requests.facility_id = facility.facility_id');
        $this->db->join('services', 'service_requests.service_id = services.service_id', 'left');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->join('patient', 'service_requests.patient_id = patient.patient_id', 'left');
        $this->db->join('user pu', 'patient.user_id = pu.user_id', 'left');
        $this->db->join('caregiver pc', 'service_requests.preferred_caregiver_id = pc.caregiver_id', 'left');
        $this->db->join('user pcu', 'pc.user_id = pcu.user_id', 'left');
        $this->db->join('caregiver ac', 'service_requests.assigned_caregiver_id = ac.caregiver_id', 'left');
        $this->db->join('user acu', 'ac.user_id = acu.user_id', 'left');
        $this->db->where('facility.user_id', $user_id);
        $this->db->where('service_requests.service_type', 'Routine');
        
        $this->db->order_by('service_requests.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
 
    /**
     * Get ONE-TIME service requests for a specific patient
     */
    public function get_onetime_requests($patient_id, $status = null) {
        $this->db->select('service_requests.request_id,
            service_requests.patient_id,
            service_requests.service_id,
            service_requests.service_type,
            service_requests.service_description,
            service_requests.preferred_date,
            service_requests.preferred_time,
            service_requests.preferred_caregiver_id,
            service_requests.frequency,
            service_requests.duration_weeks,
            service_requests.status,
            service_requests.assigned_caregiver_id,
            service_requests.assigned_date,
            service_requests.assigned_time,
            service_requests.notes,
            service_requests.admin_notes,
            service_requests.created_at,
            service_requests.updated_at,
            service_requests.facility_id,
            services.name as service_name,
            services.category_id as service_category,
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

    public function get_routine_requests($patient_id, $status = null) {
        $this->db->select('service_requests.request_id,
            service_requests.patient_id,
            service_requests.service_id,
            service_requests.service_type,
            service_requests.service_description,
            service_requests.preferred_date,
            service_requests.preferred_time,
            service_requests.preferred_caregiver_id,
            service_requests.frequency,
            service_requests.duration_weeks,
            service_requests.status,
            service_requests.assigned_caregiver_id,
            service_requests.assigned_date,
            service_requests.assigned_time,
            service_requests.notes,
            service_requests.admin_notes,
            service_requests.created_at,
            service_requests.updated_at,
            service_requests.facility_id,
            services.name as service_name,
            services.category_id as service_category,
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
        $this->db->where('service_requests.service_type', 'Routine');
        
        if ($status) {
            $this->db->where('service_requests.status', $status);
        }
        
        $this->db->order_by('service_requests.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
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
        $this->db->select('caregiver.*, user.first_name, user.last_name, user.phone_number, user.email_address, user.user_image_blob');
        $this->db->from('caregiver');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->order_by('user.first_name', 'ASC');
        $query = $this->db->get();
        $caregivers = $query->result();
        
        foreach ($caregivers as $caregiver) {
            if ($caregiver->user_image_blob) {
                $caregiver->user_image_blob = base64_encode($caregiver->user_image_blob);
            }
        }
        
        return $caregivers;
    }
}