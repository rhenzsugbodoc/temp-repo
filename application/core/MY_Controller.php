<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    protected $current_user_id;
    protected $current_user_role;
    protected $current_user_email;
    
    public function __construct() {
        parent::__construct();
        $this->enable_cors();
        $this->load->helper('jwt');
    }
    
    protected function enable_cors() {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
        
        if ($this->input->method() === 'options') {
            exit(0);
        }
    }
    
    protected function json_response($data = [], $status_code = 200) {
        $this->output
            ->set_status_header($status_code)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;
    }
    
    /**
     * Validate JWT Token
     * @return int user_id
     */
    protected function validate_token() {
        $token = get_bearer_token();
        
        if (!$token) {
            $this->json_response([
                'success' => false,
                'message' => 'Unauthorized - No token provided'
            ], 401);
        }
        
        $decoded = verify_jwt($token);
        
        if (!$decoded) {
            $this->json_response([
                'success' => false,
                'message' => 'Unauthorized - Invalid or expired token'
            ], 401);
        }
        
        // Store current user info from token
        $this->current_user_id = $decoded['user_id'];
        $this->current_user_role = $decoded['role'];
        $this->current_user_email = $decoded['email'];
        
        return $this->current_user_id;
    }
    
    /**
     * Check if user has required role
     * @param array $allowed_roles Array of allowed roles
     */
    protected function require_role($allowed_roles = []) {
        $this->validate_token();
        
        if (!in_array($this->current_user_role, $allowed_roles)) {
            $this->json_response([
                'success' => false,
                'message' => 'Forbidden - You do not have permission to access this resource',
                'required_roles' => $allowed_roles,
                'your_role' => $this->current_user_role
            ], 403);
        }
    }
    
    /**
     * Check if user is accessing their own resource
     * @param int $resource_user_id The user_id of the resource being accessed
     */
    protected function is_own_resource($resource_user_id) {
        return $this->current_user_id == $resource_user_id;
    }
}