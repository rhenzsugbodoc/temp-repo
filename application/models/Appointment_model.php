<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model {
    
    // Create appointment
    public function create_appointment($data) {
        if ($this->db->insert('appointments', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    // Update appointment
    public function update_appointment($appointment_id, $data) {
        $this->db->where('appointment_id', $appointment_id);
        return $this->db->update('appointments', $data);
    }
    
    // Get appointment by ID
    public function get_appointment_by_id($appointment_id) {
        $this->db->select('appointments.*, 
            doctor.*, 
            user.first_name as doctor_first_name, 
            user.last_name as doctor_last_name,
            facility.facility_name, 
            facility.facility_address');
        $this->db->from('appointments');
        $this->db->join('doctor', 'appointments.doctor_id = doctor.doctor_id', 'left');
        $this->db->join('user', 'doctor.user_id = user.user_id', 'left');
        $this->db->join('facility', 'appointments.facility_id = facility.facility_id', 'left');
        $this->db->where('appointments.appointment_id', $appointment_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    // Cancel appointment
    public function cancel_appointment($appointment_id, $patient_id) {
        $this->db->where('appointment_id', $appointment_id);
        $this->db->where('patient_id', $patient_id);
        $this->db->where_not_in('status', ['Completed', 'Cancelled']);
        return $this->db->update('appointments', ['status' => 'Cancelled']);
    }
    
    // Reschedule appointment
    public function reschedule_appointment($appointment_id, $patient_id, $new_date, $new_time) {
        $this->db->where('appointment_id', $appointment_id);
        $this->db->where('patient_id', $patient_id);
        $this->db->where_not_in('status', ['Completed', 'Cancelled']);
        return $this->db->update('appointments', [
            'appointment_date' => $new_date,
            'appointment_time' => $new_time,
            'status' => 'Rescheduled'
        ]);
    }
    
    // Get available doctors
    public function get_available_doctors() {
        $this->db->select('doctor.*, user.first_name, user.last_name, user.phone_number');
        $this->db->from('doctor');
        $this->db->join('user', 'doctor.user_id = user.user_id');
        $this->db->order_by('user.first_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    // Get available time slots
    public function get_available_slots($doctor_id, $date) {
        // Get booked slots
        $this->db->select('appointment_time');
        $this->db->from('appointments');
        $this->db->where('doctor_id', $doctor_id);
        $this->db->where('appointment_date', $date);
        $this->db->where_not_in('status', ['Cancelled', 'No Show']);
        $query = $this->db->get();
        
        $booked = [];
        foreach ($query->result() as $row) {
            $booked[] = $row->appointment_time;
        }
        
        // Generate available slots (9 AM to 5 PM, 30-minute intervals)
        $slots = [];
        $start = strtotime('09:00:00');
        $end = strtotime('17:00:00');
        
        while ($start < $end) {
            $time = date('H:i:s', $start);
            if (!in_array($time, $booked)) {
                $slots[] = $time;
            }
            $start += 1800; // 30 minutes
        }
        
        return $slots;
    }
}