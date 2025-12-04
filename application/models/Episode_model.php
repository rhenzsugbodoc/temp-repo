<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode_model extends CI_Model {
    
    /**
     * Create care episode
     */
    public function create_episode($data) {
        if ($this->db->insert('care_episodes', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    /**
     * Get patient's care episodes
     */
    public function get_patient_episodes($patient_id, $status = null) {
        $this->db->select('care_episodes.*, 
                          service_requests.service_id,
                          services.name as service_name,
                          service_category.category_name,
                          caregiver.caregiver_id,
                          user.first_name as caregiver_first_name,
                          user.last_name as caregiver_last_name,
                          COUNT(DISTINCT care_interventions.intervention_id) as total_interventions,
                          SUM(CASE WHEN care_interventions.status = "Completed" THEN 1 ELSE 0 END) as completed_interventions,
                          SUM(CASE WHEN care_interventions.status = "Scheduled" THEN 1 ELSE 0 END) as scheduled_interventions');
        $this->db->from('care_episodes');
        $this->db->join('service_requests', 'care_episodes.service_request_id = service_requests.request_id');
        $this->db->join('services', 'service_requests.service_id = services.service_id');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->join('caregiver', 'care_episodes.assigned_caregiver_id = caregiver.caregiver_id', 'left');
        $this->db->join('user', 'caregiver.user_id = user.user_id', 'left');
        $this->db->join('care_interventions', 'care_episodes.episode_id = care_interventions.episode_id', 'left');
        $this->db->where('care_episodes.patient_id', $patient_id);
        
        if ($status) {
            $this->db->where('care_episodes.status', $status);
        }
        
        $this->db->group_by('care_episodes.episode_id');
        $this->db->order_by('care_episodes.start_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get episode by ID
     */
    public function get_episode_by_id($episode_id) {
        $this->db->select('care_episodes.*');
        $this->db->from('care_episodes');
        $this->db->where('episode_id', $episode_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Get episode details with full information
     */
    public function get_episode_details($episode_id, $patient_id) {
        // Get episode basic info
        $this->db->select('care_episodes.*, 
                          service_requests.service_id,
                          services.name as service_name,
                          service_category.category_name,
                          caregiver.caregiver_id,
                          user.first_name as caregiver_first_name,
                          user.last_name as caregiver_last_name,
                          user.phone_number as caregiver_phone');
        $this->db->from('care_episodes');
        $this->db->join('service_requests', 'care_episodes.service_request_id = service_requests.request_id');
        $this->db->join('services', 'service_requests.service_id = services.service_id');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->join('caregiver', 'care_episodes.assigned_caregiver_id = caregiver.caregiver_id', 'left');
        $this->db->join('user', 'caregiver.user_id = user.user_id', 'left');
        $this->db->where('care_episodes.episode_id', $episode_id);
        $this->db->where('care_episodes.patient_id', $patient_id);
        $query = $this->db->get();
        $episode = $query->row();
        
        if (!$episode) {
            return null;
        }
        
        // Get intervention statistics
        $stats = $this->get_episode_statistics($episode_id);
        $episode->statistics = $stats;
        
        // Get upcoming interventions
        $episode->upcoming_interventions = $this->get_upcoming_interventions($episode_id, 5);
        
        // Get recent interventions
        $episode->recent_interventions = $this->get_recent_interventions($episode_id, 5);
        
        return $episode;
    }
    
    /**
     * Get episode interventions
     */
    public function get_episode_interventions($episode_id, $status = null) {
        $this->db->select('care_interventions.*, 
                          caregiver.caregiver_id,
                          user.first_name as caregiver_first_name,
                          user.last_name as caregiver_last_name');
        $this->db->from('care_interventions');
        $this->db->join('caregiver', 'care_interventions.assigned_caregiver_id = caregiver.caregiver_id', 'left');
        $this->db->join('user', 'caregiver.user_id = user.user_id', 'left');
        $this->db->where('care_interventions.episode_id', $episode_id);
        
        if ($status) {
            $this->db->where('care_interventions.status', $status);
        }
        
        $this->db->order_by('care_interventions.scheduled_date', 'ASC');
        $this->db->order_by('care_interventions.scheduled_time', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get episode statistics
     */
    public function get_episode_statistics($episode_id) {
        $this->db->select('
            COUNT(*) as total_interventions,
            SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed,
            SUM(CASE WHEN status = "Scheduled" THEN 1 ELSE 0 END) as scheduled,
            SUM(CASE WHEN status = "Missed" THEN 1 ELSE 0 END) as missed,
            SUM(CASE WHEN status = "Cancelled" THEN 1 ELSE 0 END) as cancelled,
            SUM(CASE WHEN status = "Rescheduled" THEN 1 ELSE 0 END) as rescheduled
        ');
        $this->db->from('care_interventions');
        $this->db->where('episode_id', $episode_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Get upcoming interventions
     */
    public function get_upcoming_interventions($episode_id, $limit = 5) {
        $this->db->select('care_interventions.*, 
                          caregiver.caregiver_id,
                          user.first_name as caregiver_first_name,
                          user.last_name as caregiver_last_name');
        $this->db->from('care_interventions');
        $this->db->join('caregiver', 'care_interventions.assigned_caregiver_id = caregiver.caregiver_id', 'left');
        $this->db->join('user', 'caregiver.user_id = user.user_id', 'left');
        $this->db->where('care_interventions.episode_id', $episode_id);
        $this->db->where('care_interventions.scheduled_date >=', date('Y-m-d'));
        $this->db->where('care_interventions.status', 'Scheduled');
        $this->db->order_by('care_interventions.scheduled_date', 'ASC');
        $this->db->order_by('care_interventions.scheduled_time', 'ASC');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get recent interventions
     */
    public function get_recent_interventions($episode_id, $limit = 5) {
        $this->db->select('care_interventions.*, 
                          caregiver.caregiver_id,
                          user.first_name as caregiver_first_name,
                          user.last_name as caregiver_last_name');
        $this->db->from('care_interventions');
        $this->db->join('caregiver', 'care_interventions.assigned_caregiver_id = caregiver.caregiver_id', 'left');
        $this->db->join('user', 'caregiver.user_id = user.user_id', 'left');
        $this->db->where('care_interventions.episode_id', $episode_id);
        $this->db->where('care_interventions.status', 'Completed');
        $this->db->order_by('care_interventions.actual_end_time', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Update episode
     */
    public function update_episode($episode_id, $data) {
        $this->db->where('episode_id', $episode_id);
        return $this->db->update('care_episodes', $data);
    }
    
    /**
     * Get episode by service request ID
     */
    public function get_episode_by_request_id($request_id) {
        $this->db->select('*');
        $this->db->from('care_episodes');
        $this->db->where('service_request_id', $request_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Cancel future interventions
     */
    public function cancel_future_interventions($episode_id) {
        $this->db->where('episode_id', $episode_id);
        $this->db->where('status', 'Scheduled');
        $this->db->where('scheduled_date >=', date('Y-m-d'));
        return $this->db->update('care_interventions', [
            'status' => 'Cancelled',
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
    
    /**
     * Suspend episode
     */
    public function suspend_episode($episode_id, $patient_id) {
        $this->db->where('episode_id', $episode_id);
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('care_episodes', ['status' => 'Suspended']);
    }
    
    /**
     * Cancel episode
     */
    public function cancel_episode($episode_id, $patient_id) {
        $this->db->where('episode_id', $episode_id);
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('care_episodes', ['status' => 'Cancelled']);
    }
    
    /**
     * Complete episode
     */
    public function complete_episode($episode_id, $patient_id) {
        $this->db->where('episode_id', $episode_id);
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('care_episodes', ['status' => 'Completed', 'end_date' => date('Y-m-d')]);
    }
}