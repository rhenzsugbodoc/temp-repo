<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caregiver_Assignment_model extends CI_Model {
    
    private $table = 'caregiver_assignments';
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    /**
     * Create a new caregiver assignment
     * @param array $data Assignment data
     * @return int|bool assignment_id on success, false on failure
     */
    public function create_assignment($data) {
        if ($this->db->insert('caregiver_assignments', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    /**
     * Get all caregiver assignments for a care plan
     * @param int $care_plan_id
     * @return array
     */
    public function get_assignments_by_care_plan($care_plan_id) {
        $this->db->select('
            ca.*,
            cu.first_name as caregiver_first_name,
            cu.last_name as caregiver_last_name,
            cu.phone_number as caregiver_phone,
            c.professional_display_name,
            c.caregiver_type as specialization,
            pu.first_name as patient_first_name,
            pu.last_name as patient_last_name,
            pu.phone_number as patient_phone,
            cp.plan_name,
            cp.plan_type
        ');
        $this->db->from($this->table . ' ca');
        $this->db->join('caregiver c', 'c.caregiver_id = ca.caregiver_id', 'left');
        $this->db->join('user cu', 'cu.user_id = c.user_id', 'left');
        $this->db->join('patient p', 'p.patient_id = ca.patient_id', 'left');
        $this->db->join('user pu', 'pu.user_id = p.user_id', 'left');
        $this->db->join('care_plans cp', 'cp.care_plan_id = ca.care_plan_id', 'left');
        $this->db->where('ca.care_plan_id', $care_plan_id);
        $this->db->order_by('ca.created_at', 'DESC');
        
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get all caregiver assignments for a patient
     * @param int $patient_id
     * @return array
     */
    public function get_assignments_by_patient($patient_id) {
        $this->db->select('
            ca.*,
            cu.first_name as caregiver_first_name,
            cu.last_name as caregiver_last_name,
            cu.phone_number as caregiver_phone,
            c.professional_display_name,
            c.caregiver_type as specialization,
            cp.plan_name,
            cp.plan_type,
            cp.status as care_plan_status
        ');
        $this->db->from($this->table . ' ca');
        $this->db->join('caregiver c', 'c.caregiver_id = ca.caregiver_id', 'left');
        $this->db->join('user cu', 'cu.user_id = c.user_id', 'left');
        $this->db->join('care_plans cp', 'cp.care_plan_id = ca.care_plan_id', 'left');
        $this->db->where('ca.patient_id', $patient_id);
        $this->db->order_by('ca.created_at', 'DESC');
        
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Get assignment by ID
     * @param int $assignment_id
     * @return object|null
     */
    public function get_assignment_by_id($assignment_id) {
        $this->db->select('
            ca.*,
            cu.first_name as caregiver_first_name,
            cu.last_name as caregiver_last_name,
            cu.phone_number as caregiver_phone,
            c.professional_display_name,
            c.caregiver_type as specialization,
            pu.first_name as patient_first_name,
            pu.last_name as patient_last_name,
            pu.phone_number as patient_phone,
            cp.plan_name,
            cp.plan_type,
            cp.status as care_plan_status
        ');
        $this->db->from($this->table . ' ca');
        $this->db->join('caregiver c', 'c.caregiver_id = ca.caregiver_id', 'left');
        $this->db->join('user cu', 'cu.user_id = c.user_id', 'left');
        $this->db->join('patient p', 'p.patient_id = ca.patient_id', 'left');
        $this->db->join('user pu', 'pu.user_id = p.user_id', 'left');
        $this->db->join('care_plans cp', 'cp.care_plan_id = ca.care_plan_id', 'left');
        $this->db->where('ca.assignment_id', $assignment_id);
        
        $query = $this->db->get();
        return $query->row();
    }
    
    /**
     * Update caregiver assignment
     * @param int $assignment_id
     * @param array $data Update data
     * @return bool
     */
    public function update_assignment($assignment_id, $data) {
        $this->db->where('assignment_id', $assignment_id);
        return $this->db->update($this->table, $data);
    }
    
    /**
     * Delete caregiver assignment
     * @param int $assignment_id
     * @return bool
     */
    public function delete_assignment($assignment_id) {
        $this->db->where('assignment_id', $assignment_id);
        return $this->db->delete($this->table);
    }
    
    /**
     * Get active assignments for a caregiver
     * @param int $caregiver_id
     * @return array
     */
    public function get_active_assignments_by_caregiver($caregiver_id) {
        $this->db->select('
            ca.*,
            pu.first_name as patient_first_name,
            pu.last_name as patient_last_name,
            pu.phone_number as patient_phone,
            cp.plan_name,
            cp.plan_type
        ');
        $this->db->from($this->table . ' ca');
        $this->db->join('patient p', 'p.patient_id = ca.patient_id', 'left');
        $this->db->join('user pu', 'pu.user_id = p.user_id', 'left');
        $this->db->join('care_plans cp', 'cp.care_plan_id = ca.care_plan_id', 'left');
        $this->db->where('ca.caregiver_id', $caregiver_id);
        $this->db->where('ca.status', 'Active');
        $this->db->order_by('ca.start_date', 'DESC');
        
        $query = $this->db->get();
        return $query->result();
    }
}
