<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caregiver_model extends CI_Model {
    
    public function get_all_caregivers($limit = 100, $offset = 0) {
        $this->db->select('caregiver.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.user_image_blob');
        $this->db->from('caregiver');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        
        $results = $query->result();
        foreach ($results as $caregiver) {
            if ($caregiver->user_image_blob) {
                $caregiver->user_image_blob = base64_encode($caregiver->user_image_blob);
            }
        }
        return $results;
    }
    
    public function get_caregiver_by_id($caregiver_id) {
        $this->db->select('caregiver.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.user_image_blob');
        $this->db->from('caregiver');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->where('caregiver.caregiver_id', $caregiver_id);
        $query = $this->db->get();
        
        $caregiver = $query->row();
        if ($caregiver && $caregiver->user_image_blob) {
            $caregiver->user_image_blob = base64_encode($caregiver->user_image_blob);
        }
        return $caregiver;
    }
    
    public function get_caregiver_by_user_id($user_id) {
        $this->db->select('caregiver.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.user_image_blob');
        $this->db->from('caregiver');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->where('caregiver.user_id', $user_id);
        $query = $this->db->get();
        
        $caregiver = $query->row();
        if ($caregiver && $caregiver->user_image_blob) {
            $caregiver->user_image_blob = base64_encode($caregiver->user_image_blob);
        }
        return $caregiver;
    }
    
    public function create_caregiver($data) {
        if ($this->db->insert('caregiver', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    public function update_caregiver($caregiver_id, $data) {
        $this->db->where('caregiver_id', $caregiver_id);
        return $this->db->update('caregiver', $data);
    }
    
    public function delete_caregiver($caregiver_id) {
        $this->db->where('caregiver_id', $caregiver_id);
        return $this->db->delete('caregiver');
    }
    
    public function get_caregiver_patients($caregiver_id) {
        $this->db->select('patient.*, user.first_name, user.last_name, user.user_image_blob, caregiver_assignments.assignment_type, caregiver_assignments.start_date');
        $this->db->from('caregiver_assignments');
        $this->db->join('patient', 'caregiver_assignments.patient_id = patient.patient_id');
        $this->db->join('user', 'patient.user_id = user.user_id');
        $this->db->where('caregiver_assignments.caregiver_id', $caregiver_id);
        $this->db->where('caregiver_assignments.status', 'Active');
        $query = $this->db->get();
        $patients = $query->result();
        
        foreach ($patients as $patient) {
            if ($patient->user_image_blob) {
                $patient->user_image_blob = base64_encode($patient->user_image_blob);
            }
        }
        
        return $patients;
    }
}