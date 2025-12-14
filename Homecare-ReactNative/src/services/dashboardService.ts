// services/dashboardService.ts
import api from './api';
import AsyncStorage from '@react-native-async-storage/async-storage';

export interface PatientDashboardData {
  patient: {
    patient_id: string;
    user_id: string;
    medical_conditions: string | null;
    allergies: string | null;
    current_medications: string | null;
    facility_id: string | null;
    created_at: string;
    updated_at: string;
    first_name: string;
    last_name: string;
    email_address: string;
    phone_number: string;
    date_of_birth: string;
    gender: string;
    home_address: string;
    emergency_contact: string | null;
  };
  summary: {
    upcoming_appointments: number;
    active_medications: number;
    active_care_plans: number;
    assigned_caregivers: number;
    unpaid_balance: number;
  };
  upcoming_appointments: Array<any>; 
  todays_medications: Array<any>;   
}

export interface DashboardData {
  user: {
    user_id: number;
    first_name: string;
    last_name: string;
    email_address: string;
    role: string;
    profile_picture?: string;
  };
  today_schedule: Array<{
    schedule_id: number;
    title: string;
    description?: string;
    scheduled_time: string;
    type: string;
    status: string;
  }>;
  care_team: Array<{
    provider_id: number;
    name: string;
    role: string;
    specialization?: string;
    profile_picture?: string;
  }>;
  upcoming_appointments?: Array<{
    appointment_id: number;
    title: string;
    date: string;
    time: string;
    provider_name: string;
  }>;
  recent_visits?: Array<{
    visit_id: number;
    date: string;
    provider_name: string;
    purpose: string;
  }>;
  health_summary?: {
    last_checkup?: string;
    pending_tasks?: number;
    medications_count?: number;
  };
}

class DashboardService {
  async getPatientDashboard(): Promise<PatientDashboardData> {
    try {
      //might replace logins async storage set Item user data with patient details 
      const response = await api.get('api/patients/dashboard');
      await AsyncStorage.setItem('patientID', JSON.stringify(response.data.data.patient.patient_id));
      return response.data.data;
    } catch (error: any) {
      console.error('Get patient dashboard error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load dashboard' };
    }
  }

  async getDoctorDashboard(): Promise<any> {
    try {
      const response = await api.get('/api/doctors/dashboard');
      return response.data.data;
    } catch (error: any) {
      console.error('Get doctor dashboard error:', error.response?.data || error.message);
      throw error;
    }
  }

  async getCaregiverDashboard(): Promise<any> {
    try {
      const response = await api.get('/api/caregiver/dashboard');
      return response.data.data;
    } catch (error: any) {
      console.error('Get caregiver dashboard error:', error.response?.data || error.message);
      throw error;
    }
  }

  async getTodaySchedule(): Promise<any[]> {
    try {
      const response = await api.get('/api/patients/dashboard/schedule/today');
      return response.data.data;
    } catch (error: any) {
      console.error('Get today schedule error:', error.response?.data || error.message);
      throw error;
    }
  }

  async getCareTeam(): Promise<any[]> {
    try {
      const response = await api.get('/api/patients/dashboard/available-caregivers');
      return response.data.data;
    } catch (error: any) {
      console.error('Get care team error:', error.response?.data || error.message);
      throw error;
    }
  }
}

export default new DashboardService();