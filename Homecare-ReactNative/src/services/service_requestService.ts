// src/services/authService.ts
import api from './api';
import AsyncStorage from '@react-native-async-storage/async-storage';

export interface FacilityData {
  facility_id?: number;
  user_id?: number | null;
  facility_type?: 'Hospital' | 'Clinic' | 'Nursing Home' | 'Rehabilitation Center' | string | null;
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
  first_name: string;
  last_name: string;
  phone_number: string | null;
  email_address: string | null;
}
export interface OneTimeData {
  patient_id: number | null;
  service_id: number | null,
  service_category: 'Nursing Care' | 'Therapy' | 'Companionship' | 'Assisted Living' | '';
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