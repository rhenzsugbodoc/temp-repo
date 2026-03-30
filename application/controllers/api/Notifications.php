<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Notifications extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Notification_model');
    }
    
    /**
     * GET /api/notifications
     * Get all notifications for current user
     */
    public function get_notifications() {
        $this->require_role(['Admin', 'Patient', 'Doctor', 'Caregiver', 'Driver', 'Pharmacy_Owner']);

        if ($this->input->method() !== 'get') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }

        $notifications = $this->Notification_model->get_notifications($this->current_user_id);
        $unread_count = $this->Notification_model->get_unread_count($this->current_user_id);

        $this->json_response([
            'success' => true,
            'count' => count($notifications),
            'unread_count' => $unread_count,
            'data' => $notifications
        ], 200);
    }
    
    /**
     * PUT /api/notifications/:id/mark-read
     * Mark a single notification as read
     */
    public function mark_as_read($notification_id) {
        $this->require_role(['Admin', 'Patient', 'Doctor', 'Caregiver', 'Driver', 'Pharmacy_Owner']);

        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }

        if ($this->Notification_model->mark_as_read($notification_id)) {
            $this->json_response([
                'success' => true,
                'message' => 'Notification marked as read'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to mark notification as read'
            ], 500);
        }
    }
    
    /**
     * PUT /api/notifications/mark-all-read
     * Mark all notifications as read for current user
     */
    public function mark_all_as_read() {
        $this->require_role(['Admin', 'Patient', 'Doctor', 'Caregiver', 'Driver', 'Pharmacy_Owner']);

        if ($this->input->method() !== 'put') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }

        if ($this->Notification_model->mark_all_as_read($this->current_user_id)) {
            $this->json_response([
                'success' => true,
                'message' => 'All notifications marked as read'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to mark all notifications as read'
            ], 500);
        }
    }
    
    /**
     * DELETE /api/notifications/:id
     * Delete a notification
     */
    public function delete($notification_id) {
        $this->require_role(['Admin', 'Patient', 'Doctor', 'Caregiver', 'Driver', 'Pharmacy_Owner']);

        if ($this->input->method() !== 'delete') {
            $this->json_response(['success' => false, 'message' => 'Method not allowed'], 405);
        }

        if ($this->Notification_model->delete_notification($notification_id)) {
            $this->json_response([
                'success' => true,
                'message' => 'Notification deleted successfully'
            ], 200);
        } else {
            $this->json_response([
                'success' => false,
                'message' => 'Failed to delete notification'
            ], 500);
        }
    }
}