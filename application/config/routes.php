<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth Routes 
$route['api/register'] = 'api/auth/register';
$route['api/login'] = 'api/auth/login';
$route['api/logout'] = 'api/auth/logout';
$route['api/user'] = 'api/auth/get_user';

// Patient Routes - Specific routes FIRST!
$route['api/patients/profile']['GET'] = 'api/patients/profile';
$route['api/patients/profile']['PUT'] = 'api/patients/update_profile';
$route['api/patients/dashboard']['GET'] = 'api/patients/dashboard';

// Service Requests
$route['api/patients/service-requests']['GET'] = 'api/patients/service_requests';
$route['api/patients/service-requests']['POST'] = 'api/patients/create_service_request';
$route['api/patients/service-requests/(:num)/cancel']['PUT'] = 'api/patients/cancel_service_request/$1';
$route['api/patients/available-caregivers']['GET'] = 'api/patients/available_caregivers';

// Appointments
$route['api/patients/appointments']['GET'] = 'api/patients/appointments';
$route['api/patients/appointments']['POST'] = 'api/patients/book_appointment';
$route['api/patients/appointments/(:num)/cancel']['PUT'] = 'api/patients/cancel_appointment/$1';
$route['api/patients/appointments/(:num)/reschedule']['PUT'] = 'api/patients/reschedule_appointment/$1';
$route['api/patients/available-doctors']['GET'] = 'api/patients/available_doctors';
$route['api/patients/available-slots']['GET'] = 'api/patients/available_slots';

// Prescription Orders
$route['api/patients/prescription-orders']['GET'] = 'api/patients/prescription_orders';
$route['api/patients/prescription-orders']['POST'] = 'api/patients/create_prescription_order';
$route['api/patients/prescription-orders/(:num)/cancel']['PUT'] = 'api/patients/cancel_prescription_order/$1';
$route['api/patients/available-pharmacies']['GET'] = 'api/patients/available_pharmacies';

// Notifications
$route['api/patients/notifications']['GET'] = 'api/patients/notifications';
$route['api/patients/notifications/(:num)/read']['PUT'] = 'api/patients/mark_notification_read/$1';
$route['api/patients/notifications/read-all']['PUT'] = 'api/patients/mark_all_notifications_read';
$route['api/patients/notifications/(:num)']['DELETE'] = 'api/patients/delete_notification/$1';
$route['api/patients/upcoming-reminders']['GET'] = 'api/patients/upcoming_reminders';

// Health Data
$route['api/patients/medications']['GET'] = 'api/patients/medications';
$route['api/patients/medication-logs']['GET'] = 'api/patients/medication_logs';
$route['api/patients/vital-signs']['GET'] = 'api/patients/vital_signs';
$route['api/patients/care-plans']['GET'] = 'api/patients/care_plans';
$route['api/patients/medical-records']['GET'] = 'api/patients/medical_records';
$route['api/patients/caregivers']['GET'] = 'api/patients/caregivers';
$route['api/patients/billing']['GET'] = 'api/patients/billing';

// General patient routes
$route['api/patients']['GET'] = 'api/patients/index';
$route['api/patients']['POST'] = 'api/patients/create';
$route['api/patients/(:num)']['GET'] = 'api/patients/show/$1';
$route['api/patients/(:num)']['PUT'] = 'api/patients/update/$1';
$route['api/patients/(:num)']['DELETE'] = 'api/patients/delete/$1';

// Caregiver Routes
$route['api/caregivers/(:num)/patients']['GET'] = 'api/caregivers/patients/$1';
$route['api/caregivers/(:num)']['GET'] = 'api/caregivers/show/$1';
$route['api/caregivers']['GET'] = 'api/caregivers/index';
$route['api/caregivers']['POST'] = 'api/caregivers/create';