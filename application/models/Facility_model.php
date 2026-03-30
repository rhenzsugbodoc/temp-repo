<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility_model extends CI_Model {
    
    /**
     * Get all facilities with pagination
     */
    public function get_all_facilities($limit = 100, $offset = 0) {
        $this->db->select('facility.*, 
                          COUNT(DISTINCT facility_services.service_id) as total_services,
                          CASE WHEN facility.facility_image_blob IS NOT NULL THEN 1 ELSE 0 END as has_image', FALSE);
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id', 'left');
        $this->db->group_by('facility.facility_id');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        
        $results = $query->result();
        foreach ($results as $facility) {
            if ($facility->facility_image_blob) {
                $facility->facility_image_blob = base64_encode($facility->facility_image_blob);
            }
        }
        return $results;
    }
    
    /**
     * Get facility by ID with service count
     */
    public function get_facility_by_id($facility_id) {
        $this->db->select('facility.*, 
                          COUNT(DISTINCT facility_services.service_id) as total_services,
                          CASE WHEN facility.facility_image_blob IS NOT NULL THEN 1 ELSE 0 END as has_image', FALSE);
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id', 'left');
        $this->db->where('facility.facility_id', $facility_id);
        $this->db->group_by('facility.facility_id');
        $query = $this->db->get();
        $facility = $query->row();
        
        if ($facility && $facility->facility_image_blob) {
            $facility->facility_image_blob = base64_encode($facility->facility_image_blob);
        }
        return $facility;
    }
    
    /**
     * Get facility by user ID
     */
    public function get_facility_by_user_id($user_id) {
        $this->db->select('facility.*, 
                          COUNT(DISTINCT facility_services.service_id) as total_services,
                          CASE WHEN facility.facility_image_blob IS NOT NULL THEN 1 ELSE 0 END as has_image', FALSE);
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id', 'left');
        $this->db->where('facility.user_id', $user_id);
        $this->db->group_by('facility.facility_id');
        $query = $this->db->get();
        $facility = $query->row();
        
        if ($facility && $facility->facility_image_blob) {
            $facility->facility_image_blob = base64_encode($facility->facility_image_blob);
        }
        return $facility;
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
        $this->db->select('facility.*, facility_services.created_at as service_added_at,
                          CASE WHEN facility.facility_image_blob IS NOT NULL THEN 1 ELSE 0 END as has_image', FALSE);
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id');
        $this->db->where('facility_services.service_id', $service_id);
        $this->db->order_by('facility.facility_name', 'ASC');
        $query = $this->db->get();
        
        $results = $query->result();
        foreach ($results as $facility) {
            if ($facility->facility_image_blob) {
                $facility->facility_image_blob = base64_encode($facility->facility_image_blob);
            }
        }
        return $results;
    }
    
    /**
     * Search facilities by name or location
     */
    public function search_facilities($search_term, $limit = 50) {
        $this->db->select('facility.*, 
                          COUNT(DISTINCT facility_services.service_id) as total_services,
                          CASE WHEN facility.facility_image_blob IS NOT NULL THEN 1 ELSE 0 END as has_image', FALSE);
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id', 'left');
        $this->db->group_start();
            $this->db->like('facility.facility_name', $search_term);
            $this->db->or_like('facility.facility_address', $search_term);
        $this->db->group_end();
        $this->db->group_by('facility.facility_id');
        $this->db->limit($limit);
        $query = $this->db->get();
        
        $results = $query->result();
        foreach ($results as $facility) {
            if ($facility->facility_image_blob) {
                $facility->facility_image_blob = base64_encode($facility->facility_image_blob);
            }
        }
        return $results;
    }
    
    /**
     * Get facilities by category
     */
    public function get_facilities_by_category($category_id) {
        $this->db->distinct();
        $this->db->select('facility.*,
                          CASE WHEN facility.facility_image_blob IS NOT NULL THEN 1 ELSE 0 END as has_image', FALSE);
        $this->db->from('facility');
        $this->db->join('facility_services', 'facility.facility_id = facility_services.facility_id');
        $this->db->join('services', 'facility_services.service_id = services.service_id');
        $this->db->where('services.category_id', $category_id);
        $this->db->order_by('facility.facility_name', 'ASC');
        $query = $this->db->get();
        
        $results = $query->result();
        foreach ($results as $facility) {
            if ($facility->facility_image_blob) {
                $facility->facility_image_blob = base64_encode($facility->facility_image_blob);
            }
        }
        return $results;
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
     * Get all available services with their categories
     * Returns all services from the services table that facilities can choose to add
     */
    public function get_all_available_services() {
        $this->db->select('services.service_id,
                          services.name,
                          services.description,
                          services.category_id,
                          service_category.category_name,
                          services.created_at,
                          services.updated_at');
        $this->db->from('services');
        $this->db->join('service_category', 'services.category_id = service_category.category_id', 'left');
        $this->db->order_by('service_category.category_name', 'ASC');
        $this->db->order_by('services.name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get all available services grouped by category
     */
    public function get_all_available_services_grouped() {
        $services = $this->get_all_available_services();
        
        // Group by category
        $grouped = [];
        foreach ($services as $service) {
            $category = $service->category_name ?: 'Uncategorized';
            
            if (!isset($grouped[$category])) {
                $grouped[$category] = [
                    'category_id' => $service->category_id,
                    'category_name' => $category,
                    'services' => []
                ];
            }
            
            $grouped[$category]['services'][] = [
                'service_id' => $service->service_id,
                'name' => $service->name,
                'description' => $service->description,
                'created_at' => $service->created_at,
                'updated_at' => $service->updated_at
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
        // Handle blob data separately if present
        if (isset($data['facility_image_blob']) && $data['facility_image_blob'] !== null) {
            $blob = $data['facility_image_blob'];
            unset($data['facility_image_blob']);
            
            // Insert other data first
            if ($this->db->insert('facility', $data)) {
                $facility_id = $this->db->insert_id();
                
                // Update with blob data using query binding
                $sql = "UPDATE facility SET facility_image_blob = ? WHERE facility_id = ?";
                $this->db->query($sql, array($blob, $facility_id));
                
                log_message('debug', 'Facility created with ID: ' . $facility_id . ', blob size: ' . strlen($blob));
                return $facility_id;
            }
            return false;
        } else {
            // No blob data, regular insert
            if ($this->db->insert('facility', $data)) {
                return $this->db->insert_id();
            }
            return false;
        }
    }
    
    /**
     * Update facility (Admin only)
     */
    public function update_facility($facility_id, $data) {
        // Handle blob data separately if present
        if (isset($data['facility_image_blob']) && $data['facility_image_blob'] !== null) {
            $blob = $data['facility_image_blob'];
            unset($data['facility_image_blob']);
            
            // Update other data first
            if (!empty($data)) {
                $this->db->where('facility_id', $facility_id);
                $this->db->update('facility', $data);
            }
            
            // Update with blob data using query binding
            $sql = "UPDATE facility SET facility_image_blob = ? WHERE facility_id = ?";
            $this->db->query($sql, array($blob, $facility_id));
            
            log_message('debug', 'Facility updated with ID: ' . $facility_id . ', blob size: ' . strlen($blob));
            return true;
        } else {
            // No blob data, regular update
            $this->db->where('facility_id', $facility_id);
            return $this->db->update('facility', $data);
        }
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
    
    /**
     * Get all patients with care plans or service requests at a facility
     * Facility ID is derived from current_user_id via facility table
     */
    public function get_facility_patients($user_id) {
        $this->db->select('patient.*, 
                          user.first_name, 
                          user.last_name, 
                          user.email_address, 
                          user.phone_number, 
                          user.date_of_birth, 
                          user.gender, 
                          user.home_address,
                          user.user_image_blob');
        $this->db->from('patient');
        $this->db->join('user', 'patient.user_id = user.user_id');
        $this->db->group_start();
            $this->db->where('patient.patient_id IN (SELECT DISTINCT patient_id FROM care_plans WHERE care_plans.patient_id = patient.patient_id)', NULL, FALSE);
            $this->db->or_where('patient.patient_id IN (SELECT DISTINCT patient_id FROM service_requests sr JOIN facility f ON sr.facility_id = f.facility_id WHERE f.user_id = ' . (int)$user_id . ' AND sr.patient_id = patient.patient_id)', NULL, FALSE);
        $this->db->group_end();
        $this->db->order_by('user.last_name', 'ASC');
        $this->db->order_by('user.first_name', 'ASC');
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