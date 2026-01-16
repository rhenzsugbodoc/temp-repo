<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_model extends CI_Model {	
    
    // Get driver by user_id
    public function get_driver_by_user_id($user_id) {
        $this->db->where('user_id', $user_id);
        return $this->db->get('driver')->row();
    }

    // Get driver by driver_id
    public function get_driver_by_id($driver_id) {
        $this->db->select('driver.*, user.first_name, user.last_name, user.phone_number, user.email_address');
        $this->db->from('driver');
        $this->db->join('user', 'driver.user_id = user.user_id');
        $this->db->where('driver.driver_id', $driver_id);
        return $this->db->get()->row();
    }

    // Get available orders (no driver assigned, status = Verified or Pending)
    public function get_available_orders($limit = 50) {
        $this->db->select('prescription_orders.*, u.first_name as patient_first_name, u.last_name as patient_last_name, pharmacy.pharmacy_name, pharmacy.address as pharmacy_address');
        $this->db->from('prescription_orders');
        $this->db->join('patient', 'prescription_orders.patient_id = patient.patient_id');
        $this->db->join('user as u', 'patient.user_id = u.user_id');
        $this->db->join('pharmacy', 'prescription_orders.pharmacy_id = pharmacy.pharmacy_id', 'left');
        $this->db->where('prescription_orders.driver_id IS NULL', null, false);
        $this->db->where_in('prescription_orders.status', ['Pending', 'Verified']);
        $this->db->order_by('prescription_orders.created_at', 'ASC');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }

    // Get driver's assigned orders
    public function get_driver_orders($driver_id, $status = null) {
        $this->db->select('prescription_orders.*, u.first_name as patient_first_name, u.last_name as patient_last_name, u.phone_number as patient_phone, pharmacy.pharmacy_name, pharmacy.address as pharmacy_address');
        $this->db->from('prescription_orders');
        $this->db->join('patient', 'prescription_orders.patient_id = patient.patient_id');
        $this->db->join('user as u', 'patient.user_id = u.user_id');
        $this->db->join('pharmacy', 'prescription_orders.pharmacy_id = pharmacy.pharmacy_id', 'left');
        $this->db->where('prescription_orders.driver_id', $driver_id);
        
        if ($status) {
            $this->db->where('prescription_orders.status', $status);
        }
        
        $this->db->order_by('prescription_orders.created_at', 'DESC');
        return $this->db->get()->result();
    }
    
    public function update_status($driver_id, $status) {
        $allowed_statuses = ['Available', 'Assigned', 'Delivering', 'Offline'];
        if (!in_array($status, $allowed_statuses)) {
            return false;
        }
        $this->db->where('driver_id', $driver_id);
        return $this->db->update('driver', ['status' => $status]);
    }

}