<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility_model extends CI_Model {
    
    /**
     * Get all facilities with pagination
     */
    public function get_all_facilities($limit = 100, $offset = 0) {
        $this->db->select('facility.*, 
                          COUNT(DISTINCT facility_services.service_id) as total_services');
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id', 'left');
        $this->db->group_by('facility.facility_id');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get facility by ID with service count
     */
    public function get_facility_by_id($facility_id) {
        $this->db->select('facility.*, 
                          COUNT(DISTINCT facility_services.service_id) as total_services');
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id', 'left');
        $this->db->where('facility.facility_id', $facility_id);
        $this->db->group_by('facility.facility_id');
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Get facility by user ID
     */
    public function get_facility_by_user_id($user_id) {
        $this->db->select('facility.*');
        $this->db->from('facility');
        $this->db->where('facility.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Get services offered by a facility
     */
    public function get_facility_services($facility_id) {
        $this->db->select('services.*, 
                          service_category.category_name,
                          facility_services.created_at as added_to_facility_at');
        $this->db->from('facility_services');
        $this->db->join('services', 'facility_services.service_id = services.service_id');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->where('facility_services.facility_id', $facility_id);
        $this->db->order_by('service_category.category_name', 'ASC');
        $this->db->order_by('services.name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get facilities that offer a specific service
     */
    public function get_facilities_by_service($service_id) {
        $this->db->select('facility.*, facility_services.created_at as service_added_at');
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id');
        $this->db->where('facility_services.service_id', $service_id);
        $this->db->order_by('facility.facility_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Search facilities by name or location
     */
    public function search_facilities($search_term, $limit = 50) {
        $this->db->select('facility.*, 
                          COUNT(DISTINCT facility_services.service_id) as total_services');
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id', 'left');
        $this->db->group_start();
            $this->db->like('facility.facility_name', $search_term);
            $this->db->or_like('facility.facility_address', $search_term);
        $this->db->group_end();
        $this->db->group_by('facility.facility_id');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get facilities by category
     */
    public function get_facilities_by_category($category_id) {
        $this->db->distinct();
        $this->db->select('facility.*');
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id');
        $this->db->join('services', 'facility_services.service_id = services.service_id');
        $this->db->where('services.category_id', $category_id);
        $this->db->order_by('facility.facility_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get facility with detailed information
     */
    public function get_facility_details($facility_id) {
        // Get facility basic info
        $facility = $this->get_facility_by_id($facility_id);
        
        if (!$facility) {
            return null;
        }
        
        // Get services grouped by category
        $services = $this->get_facility_services_grouped($facility_id);
        
        // Get available doctors at facility
        $doctors = $this->get_facility_doctors($facility_id);
        
        // Get available caregivers at facility
        $caregivers = $this->get_facility_caregivers($facility_id);
        
        return [
            'facility' => $facility,
            'services' => $services,
            'doctors' => $doctors,
            'caregivers' => $caregivers
        ];
    }
    
    /**
     * Get services grouped by category
     */
    public function get_facility_services_grouped($facility_id) {
        $this->db->select('service_category.category_id,
                          service_category.category_name,
                          services.service_id,
                          services.name as service_name,
                          services.description as service_description');
        $this->db->from('facility_services');
        $this->db->join('services', 'facility_services.service_id = services.service_id');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->where('facility_services.facility_id', $facility_id);
        $this->db->order_by('service_category.category_name', 'ASC');
        $this->db->order_by('services.name', 'ASC');
        $query = $this->db->get();
        $results = $query->result();
        
        // Group by category
        $grouped = [];
        foreach ($results as $row) {
            $category = $row->category_name ?: 'Uncategorized';
            
            if (!isset($grouped[$category])) {
                $grouped[$category] = [
                    'category_id' => $row->category_id,
                    'category_name' => $category,
                    'services' => []
                ];
            }
            
            $grouped[$category]['services'][] = [
                'service_id' => $row->service_id,
                'service_name' => $row->service_name,
                'description' => $row->service_description
            ];
        }
        
        return array_values($grouped);
    }
    
    /**
     * Get doctors at facility
     */
    public function get_facility_doctors($facility_id) {
        $this->db->select('doctor.doctor_id, 
                          doctor.professional_display_name,
                          doctor.specialization,
                          user.phone_number,
                          user.email_address');
        $this->db->from('doctor');
        $this->db->join('user', 'doctor.user_id = user.user_id');
        $this->db->where('doctor.facility_id', $facility_id);
        $this->db->order_by('doctor.professional_display_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get caregivers at facility
     */
    public function get_facility_caregivers($facility_id) {
        $this->db->select('caregiver.caregiver_id,
                          caregiver.caregiver_type,
                          caregiver.professional_display_name,
                          user.phone_number,
                          user.email_address');
        $this->db->from('caregiver');
        $this->db->join('user', 'caregiver.user_id = user.user_id');
        $this->db->where('caregiver.facility_id', $facility_id);
        $this->db->order_by('caregiver.professional_display_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Check if facility offers a specific service
     */
    public function facility_has_service($facility_id, $service_id) {
        $this->db->where('facility_id', $facility_id);
        $this->db->where('service_id', $service_id);
        $query = $this->db->get('facility_services');
        return $query->num_rows() > 0;
    }
    
    /**
     * Get facilities within radius (if you have lat/long)
     * This is a placeholder - you'll need to implement distance calculation
     */
    public function get_nearby_facilities($latitude, $longitude, $radius_km = 10) {
        // Placeholder - implement Haversine formula if you have coordinates
        $this->db->select('*');
        $this->db->from('facility');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get facility operating hours (if you have this table)
     */
    public function get_facility_hours($facility_id) {
        // Placeholder if you add operating_hours table
        return [];
    }
    
    /**
     * Create facility (Admin only)
     */
    public function create_facility($data) {
        if ($this->db->insert('facility', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    /**
     * Update facility (Admin only)
     */
    public function update_facility($facility_id, $data) {
        $this->db->where('facility_id', $facility_id);
        return $this->db->update('facility', $data);
    }
    
    /**
     * Add service to facility (Admin only)
     */
    public function add_service_to_facility($facility_id, $service_id) {
        // Check if already exists
        if ($this->facility_has_service($facility_id, $service_id)) {
            return false; // Already exists
        }
        
        $data = [
            'facility_id' => $facility_id,
            'service_id' => $service_id,
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        return $this->db->insert('facility_services', $data);
    }
    
    /**
     * Remove service from facility (Admin only)
     */
    public function remove_service_from_facility($facility_id, $service_id) {
        $this->db->where('facility_id', $facility_id);
        $this->db->where('service_id', $service_id);
        return $this->db->delete('facility_services');
    }
}