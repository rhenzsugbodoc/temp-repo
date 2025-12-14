// src/services/care_planService.ts
import api from './api';

export interface ServiceRequest {
  request_id: string;
  patient_id: string;
  service_id: string;
  service_category: string;
  service_type: 'One-Time' | 'Routine';
  service_description: string;
  preferred_date: string | null;
  preferred_time: string | null;
  preferred_caregiver_id: string | null;
  assigned_caregiver_id: string | null;
  facility_id: string;
  frequency: string | null;
  duration_weeks: string | null;
  notes: string;
  admin_notes: string | null;
  status: 'Pending' | 'Approved' | 'In Progress' | 'Completed' | 'Cancelled';
  created_at: string;
  updated_at: string;
  service_name: string | null;
  category_name: string | null;
  facility_name: string | null;
  preferred_caregiver_first_name: string | null;
  preferred_caregiver_last_name: string | null;
  assigned_caregiver_first_name: string | null;
  assigned_caregiver_last_name: string | null;
}

export interface RoutineServiceRequest extends ServiceRequest {
  episode_id?: number;
  episode_name?: string;
  episode_type?: string;
  start_date?: string;
  end_date?: string;
  episode_status?: string;
  total_interventions?: number;
  completed_interventions?: number;
}

export interface ServiceRequestDetails extends ServiceRequest {
  facility_address?: string;
  facility_phone?: string;
  preferred_caregiver_phone?: string;
  assigned_caregiver_phone?: string;
  episode?: {
    episode_id: number;
    episode_name: string;
    episode_type: string;
    start_date: string;
    end_date: string | null;
    status: string;
    total_interventions: number;
    completed_interventions: number;
    scheduled_interventions: number;
  };
}

class CarePlanService {
  
  async getOneTimeRequests(patient_id: number, status?: string): Promise<ServiceRequest[]> {
    try {
      const params = status ? { status } : {};
      const response = await api.get(`/api/patients/service-requests/one-time`);
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get one-time requests error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load one-time requests' };
    }
  }

  async getRoutineRequests(patient_id: number, status?: string): Promise<RoutineServiceRequest[]> {
    try {
      const params = status ? { status } : {};
      const response = await api.get(`/api/patients/${patient_id}/service-requests/routine`, { params });
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get routine requests error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load routine requests' };
    }
  }

  async getRequestDetails(request_id: number): Promise<ServiceRequestDetails | null> {
    try {
      const response = await api.get(`/api/patients/service-requests/${request_id}`);
      return response.data?.data || null;
    } catch (error: any) {
      console.error('Get request details error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load request details' };
    }
  }


  async cancelRequest(request_id: number, patient_id: number): Promise<any> {
    try {
      const response = await api.put(`/api/patients/${patient_id}/service-requests/${request_id}/cancel`);
      return response.data;
    } catch (error: any) {
      console.error('Cancel request error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to cancel request' };
    }
  }
}

export default new CarePlanService();