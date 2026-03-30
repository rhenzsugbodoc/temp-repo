<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model {
    
    public function get_all_doctor($limit = 100, $offset = 0) {
        $this->db->select('doctor.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.user_image_blob');
        $this->db->from('doctor');
        $this->db->join('user', 'doctor.user_id = user.user_id');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        
        $results = $query->result();
        foreach ($results as $doctor) {
            if ($doctor->user_image_blob) {
                $doctor->user_image_blob = base64_encode($doctor->user_image_blob);
            }
        }
        return $results;
    }
    
    public function get_doctor_by_id($doctor_id) {
        $this->db->select('doctor.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.user_image_blob');
        $this->db->from('doctor');
        $this->db->join('user', 'doctor.user_id = user.user_id');
        $this->db->where('doctor.doctor_id', $doctor_id);
        $query = $this->db->get();
        
        $doctor = $query->row();
        if ($doctor && $doctor->user_image_blob) {
            $doctor->user_image_blob = base64_encode($doctor->user_image_blob);
        }
        return $doctor;
    }
    
    public function get_doctor_by_user_id($user_id) {
        $this->db->select('doctor.*, user.first_name, user.last_name, user.email_address, user.phone_number, user.user_image_blob');
        $this->db->from('doctor');
        $this->db->join('user', 'doctor.user_id = user.user_id');
        $this->db->where('doctor.user_id', $user_id);
        $query = $this->db->get();
        
        $doctor = $query->row();
        if ($doctor && $doctor->user_image_blob) {
            $doctor->user_image_blob = base64_encode($doctor->user_image_blob);
        }
        return $doctor;
    }
    
    public function create_doctor($data) {
        if ($this->db->insert('doctor', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
/*
    public function update_caregiver($caregiver_id, $data) {
        $this->db->where('caregiver_id', $caregiver_id);
        return $this->db->update('caregiver', $data);
    }
    
    public function delete_caregiver($caregiver_id) {
        $this->db->where('caregiver_id', $caregiver_id);
        return $this->db->delete('caregiver');
    }
    
    public function get_caregiver_patients($caregiver_id) {
        $this->db->select('patient.*, user.first_name, user.last_name, caregiver_assignments.assignment_type, caregiver_assignments.start_date');
        $this->db->from('caregiver_assignments');
        $this->db->join('patient', 'caregiver_assignments.patient_id = patient.patient_id');
        $this->db->join('user', 'patient.user_id = user.user_id');
        $this->db->where('caregiver_assignments.caregiver_id', $caregiver_id);
        $this->db->where('caregiver_assignments.status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }
*/
}