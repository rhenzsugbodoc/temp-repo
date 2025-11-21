<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    // Check if email exists
    public function email_exists($email) {
        $this->db->where('email_address', $email);
        $query = $this->db->get('user');
        return $query->num_rows() > 0;
    }
    
    // Register new user
    public function register_user($data) {
        // Hash password
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        
        // Insert user
        if ($this->db->insert('user', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    // Login user
    public function login_user($email, $password) {
        $this->db->where('email_address', $email);
        $query = $this->db->get('user');
        
        if ($query->num_rows() === 1) {
            $user = $query->row();
            
            // Verify password
            if (password_verify($password, $user->password)) {
                // Don't return password
                unset($user->password);
                return $user;
            }
        }
        return false;
    }
    
    // Get user by ID
    public function get_user_by_id($user_id) {
        $this->db->select('user_id, first_name, middle_name, last_name, email_address, phone_number, date_of_birth, gender, home_address, role, created_at');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        
        if ($query->num_rows() === 1) {
            return $query->row();
        }
        return false;
    }
    
    // Update last login
    public function update_last_login($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->update('user', ['updated_at' => date('Y-m-d H:i:s')]);
    }
}