// src/services/authService.ts
import api from './api';
import AsyncStorage from '@react-native-async-storage/async-storage';

export interface FacilityData {
  facility_id?: number;
  user_id?: number | null;
  facility_address?: string | null;
  facility_name: string;
  facility_phone?: string | null;
  created_at?: string | null;
  updated_at?: string | null;
  total_services?: number | null;
}
export interface DoctorDetails {
  doctor_id: number;
  professional_display_name: string;
  specialization: string | null;
  phone_number: string | null;
  email_address: string | null;
}

export interface CaregiverDetails {
  caregiver_id: number;
  caregiver_type: string;
  professional_display_name: string;
  phone_number: string | null;
  email_address: string | null;
}

export interface FacilityOneTimeRequest {
  request_id: number;
  patient_id: number;
  service_id: number;
  facility_id: number;
  service_type: string;
  preferred_date: string | null;
  preferred_time: string | null;
  service_description: string | null;
  preffered_caregiver_id: number | null;
  assigned_caregiver_id: number | null;
  status: 'Pending' | 'Confirmed' | 'In Progress' | 'Completed' | 'Cancelled' | null;
  notes: string | null;
  created_at: string;
  updated_at: string | null;
  service_name: string;
  category_name: string | null;
  patient_first_name: string;
  patient_last_name: string;
  patient_phone: string | null;
  preferred_caregiver_first_name: string | null;
  preferred_caregiver_last_name: string | null;
  assigned_caregiver_first_name: string | null;
  assigned_caregiver_last_name: string | null;
}

export interface FacilityRoutineRequest extends FacilityOneTimeRequest {
  episode_id: number | null;
  episode_name: string | null;
  episode_type: string | null;
  start_date: string | null;
  end_date: string | null;
  episode_status: string | null;
  total_interventions: number;
  completed_interventions: number;
}

export interface OneTimeData {
  patient_id: number | null;
  service_id: number | null,
  service_category: number | null;
  facility_id: number | null;
  preferred_date: string | null;
  preferred_time: string | null;
  service_description: string;
  preffered_caregiver_id?: number | null;
  notes?: string | null;
}

export interface RoutineServiceData {
  service_id: number;
  episode_name: string;
  episode_type: string;
  clinical_category: 'Clinical' | 'Non-clinical';
  start_date: string; 
  duration_weeks: number;
  frequency: string;
  service_category?: string;
  service_description?: string;
  preferred_time?: string; 
  preferred_caregiver_id?: number | null;
  facility_id?: number | null;
  notes?: string | null;
  primary_diagnosis?: string | null;
}

export interface FacilityDetails {
  service_id: string | number,         
  name: string,                        
  description: string | null,         
  category_id: string | number | null, 
  category_name: string | null,      
  added_to_facility_at: string        
  created_at: string | null,        
  updated_at: string | null
}

class ServiceRequestService {
      // Get all doctors at a facility
      async getFacilityDoctors(facility_id: number): Promise<DoctorDetails[]> {
        try {
          const response = await api.get(`/api/facilities/${facility_id}/doctors`);
          return response.data?.data || [];
        } catch (error: any) {
          console.error('Get facility doctors error:', error.response?.data || error.message);
          throw error.response?.data || { success: false, message: 'Failed to load facility doctors' };
        }
      }

      async getFacilityOneTimeRequests(status?: string, enabled: boolean = true): Promise<FacilityOneTimeRequest[]> {
        try {
          const url = status 
            ? `api/facilities/service-requests/one-time?status=${status}`
            : `api/facilities/service-requests/one-time`;
          const response = await api.get(url);
          return response.data?.data || [];
        } catch (error: any) {
          console.error('Get facility one-time requests error:', error.response?.data || error.message);
          throw error.response?.data || { success: false, message: 'Failed to load facility one-time requests' };
        }
      }
      async getFacilityRoutineRequests(status?: string, enabled: boolean = true): Promise<FacilityRoutineRequest[]> {
        try {
          const url = status 
            ? `api/facilities/service-requests/routine?status=${status}`
            : `api/facilities/service-requests/routine`;
          const response = await api.get(url);
          return response.data?.data || [];
        } catch (error: any) {
          console.error('Get facility routine requests error:', error.response?.data || error.message);
          throw error.response?.data || { success: false, message: 'Failed to load facility routine requests' };
        }
      }
      // Get all caregivers at a facility
      async getFacilityCaregivers(facility_id: number): Promise<CaregiverDetails[]> {
        try {
          const response = await api.get(`/api/facilities/${facility_id}/caregivers`);
          return response.data?.data || [];
        } catch (error: any) {
          console.error('Get facility caregivers error:', error.response?.data || error.message);
          throw error.response?.data || { success: false, message: 'Failed to load facility caregivers' };
        }
      }
    

    async getFacilityData(): Promise<FacilityData[]> {
      try {
        const response = await api.get('/api/facilities');
        return response.data?.data || [];

      } catch (error: any) {
        console.error('Get facility list error:', error.response?.data || error.message);
        throw error.response?.data || { success: false, message: 'Failed to load Facility List' };
      }
    }
    async getFacilityServices(facility_id: number): Promise<FacilityDetails[]> {
      try {
        const response = await api.get(`/api/facilities/${facility_id}/services`);
        return response.data?.data || [];
      } catch (error: any) {
        console.error('Get facility services error:', error.response?.data || error.message);
        throw error.response?.data || { success: false, message: 'Failed to load facility services' };
      }
    }
  // Get facility by ID
  async getFacilityById(facility_id: number): Promise<FacilityData | null> {
    try {
      const response = await api.get(`/api/facilities/${facility_id}`);
      return response.data?.data || null;
    } catch (error: any) {
      console.error('Get facility by ID error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load Facility' };
    }
  }

  // Get facilities by service
  async getFacilitiesByService(service_id: number): Promise<FacilityData[]> {
    try {
      const response = await api.get(`/api/facilities/by-service/${service_id}`);
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get facilities by service error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load facilities by service' };
    }
  }

  // Search facilities by name or location
  async searchFacilities(query: string, limit: number = 50): Promise<FacilityData[]> {
    try {
      const response = await api.get(`/api/facilities/search?q=${encodeURIComponent(query)}&limit=${limit}`);
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Search facilities error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to search facilities' };
    }
  }

  // Get facilities by category
  async getFacilitiesByCategory(category_id: number): Promise<FacilityData[]> {
    try {
      const response = await api.get(`/api/facilities/by-category/${category_id}`);
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get facilities by category error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load facilities by category' };
    }
  }
  async create_routine(requestData: RoutineServiceData): Promise<any> {
    try {
      const response = await api.post('/api/patients/service-requests/routine', requestData);
      
      
      return response.data;
    } catch (error: any) {
      console.error('Submission error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  async create_oneTime(requestData: OneTimeData): Promise<any> {
    try {
      const response = await api.post('/api/patients/service-requests/one-time', requestData);
      
      return response.data;
    } catch (error: any) {
      console.error('Submission error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }
}

export default new ServiceRequestService();