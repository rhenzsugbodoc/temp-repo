<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmacy_model extends CI_Model {
    
    public function get_available_pharmacies() {
        $this->db->select('*');
        $this->db->from('pharmacy');
        $this->db->order_by('pharmacy_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    public function create_pharmacy($user_id, $data, $schedule = null) {
        // Check if user exists and is a Pharmacy_Owner
        $this->db->where('user_id', $user_id);
        $this->db->where('role', 'Pharmacy_Owner');
        $owner = $this->db->get('user')->row();
        
        if (!$owner) {
            return false;
        }
        
        $data['owner_id'] = $user_id;
        
        if ($this->db->insert('pharmacy', $data)) {
            $pharmacy_id = $this->db->insert_id();
            
            // Add schedule if provided
            if ($schedule && is_array($schedule)) {
                $this->add_pharmacy_schedule($pharmacy_id, $schedule);
            }
            
            return $pharmacy_id;
        }
        return false;
    }

// Add a pharmacy schedule
    private function add_pharmacy_schedule($pharmacy_id, $schedule) {
        foreach ($schedule as $day_schedule) {
            $schedule_data = [
                'pharmacy_id' => $pharmacy_id,
                'day_of_week' => $day_schedule['day_of_week'],
                'opening_time' => $day_schedule['opening_time'],
                'closing_time' => $day_schedule['closing_time']
            ];
            $this->db->insert('pharmacy_schedule', $schedule_data);
        }
        return true;
    }
    
    // Public method to add schedules to existing pharmacy
    public function add_schedule($pharmacy_id, $schedule) {
        return $this->add_pharmacy_schedule($pharmacy_id, $schedule);
    }

    // Update pharmacy details
    public function update_pharmacy($pharmacy_id, $data) {
        $this->db->where('pharmacy_id', $pharmacy_id);
        return $this->db->update('pharmacy', $data);
    }

    // Delete pharmacy (and associated schedules)
    public function delete_pharmacy($pharmacy_id) {
        
        $this->db->trans_start();
        
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $this->db->delete('pharmacy_schedule');
        
        
        $this->db->where('pharmacy_id', $pharmacy_id);
        $this->db->delete('pharmacy');
        

        $this->db->trans_complete();
        
        return $this->db->trans_status();
    }

    // Update pharmacy schedule (replace all schedules)
    public function update_pharmacy_schedule($pharmacy_id, $schedule) {
        
        $this->db->trans_start();

        $this->db->where('pharmacy_id', $pharmacy_id);
        $this->db->delete('pharmacy_schedule');
        
   
        $this->add_pharmacy_schedule($pharmacy_id, $schedule);
     
        $this->db->trans_complete();
        
        return $this->db->trans_status();
    }

    // Delete specific schedule entry
    public function delete_schedule_entry($schedule_id) {
        $this->db->where('id', $schedule_id);
        return $this->db->delete('pharmacy_schedule');
    }
}   