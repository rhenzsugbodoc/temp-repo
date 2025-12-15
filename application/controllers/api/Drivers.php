<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Drivers extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Driver_model');
        $this->load->model('Prescription_order_model');
        
        // Validate JWT token and set current_user_id, current_user_role
        $this->validate_token();
    }

    // GET /api/drivers/available-orders - Get all available orders
    public function available_orders() {
        // Only drivers can access
        if ($this->current_user_role !== 'Driver') {
            return $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'error' => 'Access denied. Drivers only.',
                    'current_role' => $this->current_user_role
                ]));
        }

        $limit = $this->input->get('limit') ?: 50;
        $orders = $this->Driver_model->get_available_orders($limit);

        return $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'data' => $orders
            ]));
    }

    // GET /api/drivers/my-orders - Get driver's assigned orders
    public function my_orders() {
        // Only drivers can access
        if ($this->current_user_role !== 'Driver') {
            return $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Access denied. Drivers only.']));
        }

        // Get driver profile
        $driver = $this->Driver_model->get_driver_by_user_id($this->current_user_id);
        
        if (!$driver) {
            return $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Driver profile not found']));
        }

        $status = $this->input->get('status');
        $orders = $this->Driver_model->get_driver_orders($driver->driver_id, $status);

        return $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'data' => $orders
            ]));
    }

    // POST /api/drivers/orders/:id/accept - Accept an order
    public function accept_order($order_id) {
        // Only drivers can access
        if ($this->current_user_role !== 'Driver') {
            return $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Access denied. Drivers only.']));
        }

        // Get driver profile
        $driver = $this->Driver_model->get_driver_by_user_id($this->current_user_id);
        
        if (!$driver) {
            return $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Driver profile not found']));
        }

        // Check if order exists and is available
        $order = $this->Prescription_order_model->get_order_by_id($order_id);
        
        if (!$order) {
            return $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Order not found']));
        }

        // Check if order is available (no driver assigned)
        if ($order->driver_id !== null) {
            return $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Order already assigned to another driver']));
        }

        // Check if order is in acceptable status
        if (!in_array($order->status, ['Pending', 'Verified'])) {
            return $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Order cannot be accepted in current status']));
        }

        // Assign driver and update status to Processing
        $result = $this->Prescription_order_model->assign_driver($order_id, $driver->driver_id);

        if ($result) {
            return $this->output
                ->set_status_header(200)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => true,
                    'message' => 'Order accepted successfully',
                    'data' => $this->Prescription_order_model->get_order_by_id($order_id)
                ]));
        } else {
            return $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Failed to accept order']));
        }
    }

    // PUT /api/drivers/orders/:id/status - Update delivery status
    public function update_delivery_status($order_id) {
        // Only drivers can access
        if ($this->current_user_role !== 'Driver') {
            return $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Access denied. Drivers only.']));
        }

        // Get driver profile
        $driver = $this->Driver_model->get_driver_by_user_id($this->current_user_id);
        
        if (!$driver) {
            return $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Driver profile not found']));
        }

        // Check if order exists
        $order = $this->Prescription_order_model->get_order_by_id($order_id);
        
        if (!$order) {
            return $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Order not found']));
        }

        // Check if order is assigned to this driver
        if ($order->driver_id != $driver->driver_id) {
            return $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'You are not assigned to this order']));
        }

        // Get new status from request body
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if (!isset($data['status'])) {
            return $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Status is required']));
        }

        $new_status = $data['status'];

        // Update order status
        $result = $this->Prescription_order_model->update_order_status($order_id, $new_status);

        if ($result === false) {
            return $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Invalid status']));
        }

        if ($result) {
            // Update driver status based on order status
            if ($new_status === 'Out for Delivery') {
                $this->Driver_model->update_status($driver->driver_id, 'Delivering');
            } elseif ($new_status === 'Delivered') {
                $this->Driver_model->update_status($driver->driver_id, 'Available');
            }

            return $this->output
                ->set_status_header(200)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => true,
                    'message' => 'Order status updated successfully',
                    'data' => $this->Prescription_order_model->get_order_by_id($order_id)
                ]));
        } else {
            return $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Failed to update order status']));
        }
    }

    // PUT /api/drivers/status - Update driver availability status
    public function update_status() {
        // Only drivers can access
        if ($this->current_user_role !== 'Driver') {
            return $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Access denied. Drivers only.']));
        }

        // Get driver profile
        $driver = $this->Driver_model->get_driver_by_user_id($this->current_user_id);
        
        if (!$driver) {
            return $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Driver profile not found']));
        }

        // Get new status from request body
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if (!isset($data['status'])) {
            return $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Status is required']));
        }

        $new_status = $data['status'];
        $result = $this->Driver_model->update_status($driver->driver_id, $new_status);

        if (!$result) {
            return $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Invalid status. Allowed: Available, Delivering, Offline']));
        }

        return $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'message' => 'Driver status updated successfully'
            ]));
    }
}
