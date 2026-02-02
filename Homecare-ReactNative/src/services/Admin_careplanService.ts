import api from './api';

export interface CarePlan {
  care_plan_id: string;
  patient_id: string;
  doctor_id: string;
  request_id: string;
  plan_name: string;
  plan_type: 'Medical' | 'Therapy' | 'Rehabilitation' | 'Palliative' | 'Preventive';
  start_date: string;
  end_date: string | null;
  status: string;
  goals: string | null;
  notes: string | null;
  created_at: string;
  updated_at: string;
  // Joined fields from get methods
  patient_first_name?: string;
  patient_last_name?: string;
  doctor_first_name?: string;
  doctor_last_name?: string;
  doctor_phone?: string;
  service_name?: string;
  service_type?: string;
  facility_name?: string;
  request_status?: string;
}

export interface CreateCarePlanData {
  patient_id: number;
  doctor_id: number;
  request_id: number;
  plan_name: string;
  plan_type: 'Medical' | 'Therapy' | 'Rehabilitation' | 'Palliative' | 'Preventive';
  end_date?: string | null;
  goals?: string | null;
  notes?: string | null;
}

export interface UpdateCarePlanData {
  plan_name?: string;
  plan_type?: 'Medical' | 'Therapy' | 'Rehabilitation' | 'Palliative' | 'Preventive';
  end_date?: string | null;
  status?: string;
  goals?: string | null;
  notes?: string | null;
}

class AdminCarePlanService {
  /**
   * Create a new care plan
   * POST /api/care-plans
   */
  async createCarePlan(data: CreateCarePlanData): Promise<any> {
    try {
      const response = await api.post('/api/care-plans', data);
      return response.data;
    } catch (error: any) {
      console.error('Create care plan error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to create care plan' };
    }
  }

  /**
   * Get all care plans for a specific patient
   * GET /api/care-plans/patient/:patient_id
   */
  async getCarePlansByPatient(patientId: number): Promise<CarePlan[]> {
    try {
      const response = await api.get(`/api/care-plans/patient/${patientId}`);
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get care plans by patient error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load patient care plans' };
    }
  }

  /**
   * Get all care plans for the current user
   * GET /api/care-plans/my-care-plans
   */
  async getCarePlansByCurrentUser(): Promise<CarePlan[]> {
    try {

      const response = await api.get('/api/care-plans/my-care-plans');
      

      
      return response.data?.data || [];
    } catch (error: any) {
      console.error('=== Get care plans by current user ERROR ===');
      console.error('Error response:', error.response?.data);
      console.error('Error status:', error.response?.status);
      console.error('Error message:', error.message);
      console.error('Error config:', error.config);
      throw error.response?.data || { success: false, message: 'Failed to load your care plans' };
    }
  }

  /**
   * Get all care plans for the facility (based on logged-in facility user)
   * GET /api/care-plans/facility
   */
  async getCarePlansByFacility(): Promise<CarePlan[]> {
    try {
      const response = await api.get('/api/care-plans/facility');
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get care plans by facility error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load facility care plans' };
    }
  }

  /**
   * Get care plan details by ID
   * GET /api/care-plans/:id
   */
  async getCarePlanById(carePlanId: number): Promise<CarePlan | null> {
    try {
      const response = await api.get(`/api/care-plans/${carePlanId}`);
      return response.data?.data || null;
    } catch (error: any) {
      console.error('Get care plan by ID error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load care plan details' };
    }
  }

  /**
   * Update a care plan
   * PUT /api/care-plans/:id
   */
  async updateCarePlan(carePlanId: number, data: UpdateCarePlanData): Promise<any> {
    try {
      const response = await api.put(`/api/care-plans/${carePlanId}`, data);
      return response.data;
    } catch (error: any) {
      console.error('Update care plan error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to update care plan' };
    }
  }

  /**
   * Delete a care plan
   * DELETE /api/care-plans/:id
   */
  async deleteCarePlan(carePlanId: number): Promise<any> {
    try {
      const response = await api.delete(`/api/care-plans/${carePlanId}`);
      return response.data;
    } catch (error: any) {
      console.error('Delete care plan error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to delete care plan' };
    }
  }
}

export default new AdminCarePlanService();
