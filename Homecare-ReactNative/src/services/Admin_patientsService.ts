import api from './api';

export interface PatientList {
    
      "patient_id": 12,
      "user_id": 45,
      "medical_record_number": "MRN123456",
      "blood_type": "O+",
      "allergies": "Penicillin",
      "chronic_conditions": "Diabetes",
      "first_name": "John",
      "last_name": "Doe",
      "email_address": "john.doe@email.com",
      "phone_number": "555-0100",
      "date_of_birth": "1980-05-15",
      "gender": "Male",
      "home_address": "123 Main St, City"
    
}
class AdminCarePlanService {

  /**
   * Get all patients with care plans or service requests for a facility
   * GET /api/facilities/patients?facility_id=X
   */
  async getPatientsByFacility(): Promise<PatientList[]> {
    try {
      const response = await api.get(`/api/facilities/patients`);
      return response.data?.data || [];
    } catch (error: any) {
      console.error('Get patients by facility error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load facility patients' };
    }
  }

 
}

export default new AdminCarePlanService();
