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
    
    /**
     * Get all available medicines
     */
    public function get_medicine() {
        $this->db->select('medicine_id, name, medication_type, description');
        $this->db->from('medicines');
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Create inventory entry for a pharmacy
     * Gets pharmacy_id from owner_id (user_id)
     */
    public function create_inventory($user_id, $inventory_data) {
        // Get pharmacy owned by this user
        $this->db->select('pharmacy_id');
        $this->db->from('pharmacy');
        $this->db->where('owner_id', $user_id);
        $pharmacy = $this->db->get()->row();
        
        if (!$pharmacy) {
            return false;
        }
        
        // Validate required fields
        if (!isset($inventory_data['medicine_id']) || !isset($inventory_data['stock_quantity']) || !isset($inventory_data['price'])) {
            return false;
        }
        
        $data = [
            'pharmacy_id' => $pharmacy->pharmacy_id,
            'medicine_id' => $inventory_data['medicine_id'],
            'stock_quantity' => $inventory_data['stock_quantity'],
            'price' => $inventory_data['price'],
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s')
        ];
        
        if ($this->db->insert('pharmacy_medicine_inventory', $data)) {
            return [
                'pharmacy_id' => $pharmacy->pharmacy_id,
                'medicine_id' => $inventory_data['medicine_id']
            ];
        }
        
        return false;
    }
    
    /**
     * Get pharmacy inventory by owner user_id
     */
    public function get_inventory_by_owner($user_id) {
        $this->db->select('pmi.*, m.name as medicine_name, m.medication_type, m.description, p.pharmacy_name');
        $this->db->from('pharmacy_medicine_inventory pmi');
        $this->db->join('pharmacy p', 'p.pharmacy_id = pmi.pharmacy_id');
        $this->db->join('medicines m', 'm.medicine_id = pmi.medicine_id');
        $this->db->where('p.owner_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Update inventory entry (stock_quantity and/or price)
     * Verifies ownership through pharmacy owner_id
     */
    public function update_inventory($user_id, $medicine_id, $update_data) {
        // Get pharmacy owned by this user
        $this->db->select('pharmacy_id');
        $this->db->from('pharmacy');
        $this->db->where('owner_id', $user_id);
        $pharmacy = $this->db->get()->row();
        
        if (!$pharmacy) {
            return false;
        }
        
        // Verify inventory belongs to this pharmacy
        $this->db->where('pharmacy_id', $pharmacy->pharmacy_id);
        $this->db->where('medicine_id', $medicine_id);
        $inventory = $this->db->get('pharmacy_medicine_inventory')->row();
        
        if (!$inventory) {
            return false;
        }
        
        $data = [];
        
        if (isset($update_data['stock_quantity'])) {
            $data['stock_quantity'] = $update_data['stock_quantity'];
        }
        
        if (isset($update_data['price'])) {
            $data['price'] = $update_data['price'];
        }
        
        if (empty($data)) {
            return false;
        }
        
        $this->db->where('pharmacy_id', $pharmacy->pharmacy_id);
        $this->db->where('medicine_id', $medicine_id);
        return $this->db->update('pharmacy_medicine_inventory', $data);
    }
}   