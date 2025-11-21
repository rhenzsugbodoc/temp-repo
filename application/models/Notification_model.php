<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_model extends CI_Model {
    
    // Create notification
    public function create_notification($data) {
        if ($this->db->insert('notifications', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    // Get patient notifications
    public function get_patient_notifications($patient_id, $unread_only = false) {
        $this->db->select('*');
        $this->db->from('notifications');
        $this->db->where('patient_id', $patient_id);
        
        if ($unread_only) {
            $this->db->where('is_read', 0);
        }
        
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit(50);
        $query = $this->db->get();
        return $query->result();
    }
    
    // Mark as read
    public function mark_as_read($notification_id, $patient_id) {
        $this->db->where('notification_id', $notification_id);
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('notifications', ['is_read' => 1]);
    }
    
    // Mark all as read
    public function mark_all_as_read($patient_id) {
        $this->db->where('patient_id', $patient_id);
        return $this->db->update('notifications', ['is_read' => 1]);
    }
    
    // Get unread count
    public function get_unread_count($patient_id) {
        $this->db->where('patient_id', $patient_id);
        $this->db->where('is_read', 0);
        return $this->db->count_all_results('notifications');
    }
    
    // Delete notification
    public function delete_notification($notification_id, $patient_id) {
        $this->db->where('notification_id', $notification_id);
        $this->db->where('patient_id', $patient_id);
        return $this->db->delete('notifications');
    }
    
    // Get upcoming reminders
    public function get_upcoming_reminders($patient_id) {
        $this->db->select('*');
        $this->db->from('notifications');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('scheduled_time >=', date('Y-m-d H:i:s'));
        $this->db->where('scheduled_time <=', date('Y-m-d H:i:s', strtotime('+24 hours')));
        $this->db->order_by('scheduled_time', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}