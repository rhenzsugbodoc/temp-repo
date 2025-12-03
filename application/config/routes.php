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

// Patient Routes
$route['api/patients/profile']['GET'] = 'api/patients/profile';
$route['api/patients/profile']['PUT'] = 'api/patients/update_profile';
$route['api/patients/dashboard']['GET'] = 'api/patients/dashboard';

// Service Requests
$route['api/patients/service-requests']['GET'] = 'api/patients/service_requests';
$route['api/patients/available-caregivers']['GET'] = 'api/patients/available_caregivers';
$route['api/patients/service-requests/one-time']['POST'] = 'api/patients/create_onetime_service';
$route['api/patients/service-requests/routine']['POST'] = 'api/patients/create_routine_service';
$route['api/patients/episodes']['GET'] = 'api/patients/episodes';
$route['api/patients/episodes/(:num)']['GET'] = 'api/patients/episode_details/$1';
$route['api/patients/service-requests/one-time']['GET'] = 'api/patients/get_onetime_requests';
$route['api/patients/service-requests/routine']['GET'] = 'api/patients/get_routine_requests';
$route['api/patients/service-requests/(:num)']['GET'] = 'api/patients/get_request_details/$1';
$route['api/patients/service-requests/(:num)/cancel']['PUT'] = 'api/patients/cancel_service_request/$1';
$route['api/patients/episodes/(:num)/cancel']['PUT'] = 'api/patients/cancel_episode/$1';

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

// Facility Routes (Public - No Auth Required)
$route['api/facilities']['GET'] = 'api/facilities/index'; // Get all facilities
$route['api/facilities/search']['GET'] = 'api/facilities/search'; // Search facilities
$route['api/facilities/by-service/(:num)']['GET'] = 'api/facilities/by_service/$1'; // Get facilities by service
$route['api/facilities/by-category/(:num)']['GET'] = 'api/facilities/by_category/$1'; // Get facilities by category
$route['api/facilities/(:num)']['GET'] = 'api/facilities/show/$1'; // Get specific facility
$route['api/facilities/(:num)/details']['GET'] = 'api/facilities/details/$1'; // Get facility complete details
$route['api/facilities/(:num)/services']['GET'] = 'api/facilities/services/$1'; // Get facility services (all)
$route['api/facilities/(:num)/services/grouped']['GET'] = 'api/facilities/services_grouped/$1'; // Get facility services (grouped by category)
$route['api/facilities/(:num)/doctors']['GET'] = 'api/facilities/doctors/$1'; // Get facility doctors
$route['api/facilities/(:num)/caregivers']['GET'] = 'api/facilities/caregivers/$1'; // Get facility caregivers

// FACILITY ADMIN ROUTES (Require Admin Auth) --> no admin model yet
$route['api/facilities']['POST'] = 'api/facilities/create'; // Create facility (Admin only)
$route['api/facilities/(:num)']['PUT'] = 'api/facilities/update/$1'; // Update facility (Admin only)
$route['api/facilities/(:num)/services']['POST'] = 'api/facilities/add_service/$1'; // Add service to facility (Admin only)
$route['api/facilities/(:num)/services/(:num)']['DELETE'] = 'api/facilities/remove_service/$1/$2'; // Remove service from facility (Admin only)