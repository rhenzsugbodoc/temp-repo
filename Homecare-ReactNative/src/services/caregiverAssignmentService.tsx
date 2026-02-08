import api from './api';

export interface CaregiverAssignment {
  assignment_id: string;
  patient_id: string;
  caregiver_id: string;
  care_plan_id: string;
  assignment_type: 'Primary' | 'Secondary' | 'Emergency' | 'Temporary';
  start_date: string;
  end_date: string | null;
  shift_schedule: string | null;
  responsibilities: string | null;
  status: 'Active' | 'Inactive' | 'Completed';
  created_at: string;
  updated_at: string;
  // Joined fields from queries
  caregiver_first_name?: string;
  caregiver_last_name?: string;
  caregiver_phone?: string;
  professional_display_name?: string;
  specialization?: string;
  patient_first_name?: string;
  patient_last_name?: string;
  patient_phone?: string;
  plan_name?: string;
  plan_type?: string;
  care_plan_status?: string;
}

export interface CreateAssignmentData {
  patient_id: number;
  caregiver_id: number;
  care_plan_id: number;
  assignment_type: 'Primary' | 'Secondary' | 'Emergency' | 'Temporary';
  end_date?: string | null;
  shift_schedule?: string | null;
  responsibilities?: string | null;
  status?: 'Active' | 'Inactive' | 'Completed';
}

export interface UpdateAssignmentData {
  assignment_id: number;
  assignment_type?: 'Primary' | 'Secondary' | 'Emergency' | 'Temporary';
  start_date?: string;
  end_date?: string | null;
  shift_schedule?: string | null;
  responsibilities?: string | null;
  status?: 'Active' | 'Inactive' | 'Completed';
}

class CaregiverAssignmentService {
  /**
   * Create a new caregiver assignment
   * POST /api/caregiver-assignments
   */
  async createAssignment(data: CreateAssignmentData): Promise<any> {
    try {
      console.log('=== CREATE ASSIGNMENT REQUEST ===');
      console.log('Request Body:', JSON.stringify(data, null, 2));
      const response = await api.post('/api/caregiver-assignments', data);
      console.log('Response:', JSON.stringify(response.data, null, 2));
      return response.data;
    } catch (error: any) {
      console.error('Create assignment error:', error.response?.data || error.message);
      console.error('Full error:', JSON.stringify(error, null, 2));
      throw error.response?.data || { success: false, message: 'Failed to create caregiver assignment' };
    }
  }

  /**
   * Get all caregiver assignments for a care plan
   * GET /api/caregiver-assignments/care-plan/:id
   */
  async getAssignmentsByCarePlan(carePlanId: number): Promise<CaregiverAssignment[]> {
    try {
      console.log('=== GET ASSIGNMENTS BY CARE PLAN ===');
      console.log('Care Plan ID:', carePlanId);
      const response = await api.get(`/api/caregiver-assignments/care-plan/${carePlanId}`);
      console.log('Response:', JSON.stringify(response.data, null, 2));
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get assignments by care plan error:', error.response?.data || error.message);
      console.error('Full error:', JSON.stringify(error, null, 2));
      throw error.response?.data || { success: false, message: 'Failed to load care plan assignments' };
    }
  }

  /**
   * Get all caregiver assignments for a patient
   * GET /api/caregiver-assignments/patient/:id
   */
  async getAssignmentsByPatient(patientId: number): Promise<CaregiverAssignment[]> {
    try {
      console.log('=== GET ASSIGNMENTS BY PATIENT ===');
      console.log('Patient ID:', patientId);
      const response = await api.get(`/api/caregiver-assignments/patient/${patientId}`);
      console.log('Response:', JSON.stringify(response.data, null, 2));
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get assignments by patient error:', error.response?.data || error.message);
      console.error('Full error:', JSON.stringify(error, null, 2));
      throw error.response?.data || { success: false, message: 'Failed to load patient assignments' };
    }
  }

  /**
   * Update a caregiver assignment
   * PUT /api/caregiver-assignments
   */
  async updateAssignment(data: UpdateAssignmentData): Promise<any> {
    try {
      const response = await api.put('/api/caregiver-assignments', data);
      return response.data;
    } catch (error: any) {
      console.error('Update assignment error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to update assignment' };
    }
  }
}

export default new CaregiverAssignmentService();
