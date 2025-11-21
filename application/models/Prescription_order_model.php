<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescription_order_model extends CI_Model {
    
    // Create prescription order
    public function create_order($data) {
        if ($this->db->insert('prescription_orders', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    // Get patient's prescription orders
    public function get_patient_orders($patient_id, $status = null) {
        $this->db->select('prescription_orders.*, pharmacy.pharmacy_name, pharmacy.contact_number as pharmacy_phone');
        $this->db->from('prescription_orders');
        $this->db->join('pharmacy', 'prescription_orders.pharmacy_id = pharmacy.pharmacy_id', 'left');
        $this->db->where('prescription_orders.patient_id', $patient_id);
        
        if ($status) {
            $this->db->where('prescription_orders.status', $status);
        }
        
        $this->db->order_by('prescription_orders.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get order by ID
    public function get_order_by_id($order_id) {
        $this->db->select('prescription_orders.*, pharmacy.pharmacy_name, pharmacy.contact_number as pharmacy_phone, pharmacy.address as pharmacy_address');
        $this->db->from('prescription_orders');
        $this->db->join('pharmacy', 'prescription_orders.pharmacy_id = pharmacy.pharmacy_id', 'left');
        $this->db->where('prescription_orders.order_id', $order_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    // Update prescription order
    public function update_order($order_id, $data) {
        $this->db->where('order_id', $order_id);
        return $this->db->update('prescription_orders', $data);
    }
    
    // Cancel prescription order
    public function cancel_order($order_id, $patient_id) {
        $this->db->where('order_id', $order_id);
        $this->db->where('patient_id', $patient_id);
        $this->db->where_in('status', ['Pending', 'Verified']);
        return $this->db->update('prescription_orders', ['status' => 'Cancelled']);
    }
    
    // Get available pharmacies
    public function get_available_pharmacies() {
        $this->db->select('*');
        $this->db->from('pharmacy');
        $this->db->order_by('pharmacy_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}