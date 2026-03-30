import api from './api';

export interface PatientList {
  patient_id: number;
  user_id: number;
  medical_record_number: string;
  blood_type: string;
  allergies: string;
  chronic_conditions: string;
  first_name: string;
  last_name: string;
  email_address: string;
  phone_number: string;
  date_of_birth: string;
  gender: string;
  home_address: string;
  user_image_blob: string | null;
}

export interface FacilityDetails {
  facility_id: number;
  user_id: number;
  facility_type: string;
  facility_address: string;
  facility_name: string;
  facility_phone: string;
  created_at: string;
  updated_at: string;
  country: string | null;
  city: string | null;
  province: string | null;
  postal_code: string | null;
  facility_image: string | null;
  facility_email: string | null;
  facility_website: string | null;
  facility_description: string | null;
  facility_image_blob: string | null;
  total_services: number;
  has_image: number;
}

export interface ServiceDetails {
  service_id: number,
  name: string,
  description: string,
  category_id: number,
  category_name: string,
  created_at: string,
  updated_at: string
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

  async getCurrentFacility(): Promise<FacilityDetails> {
    try{
      const res = await api.get('/api/facilities/my-facility')
      return res.data?.data || null;
    } catch (error: any) {
      console.error('Get current facility error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to load current facility details' };
    }
  }

  async editCurrentFacility(details: FacilityDetails) {
    try{
      const res = await api.put(`/api/facilities/${details.facility_id}`, details);
      return res.data?.data || []; 
    }
    catch(error: any) {
      console.error('Editing facility details error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to edit  facility details' };
    }
  }

  async getAvailableServices(): Promise<ServiceDetails[]> {
    try{
      const res = await api.get(`/api/facilities/available-services`);
      return res.data?.data || []; 
    }
    catch(error: any) {
      console.error('Getting available services error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to get available services list' };
    }
  }

  async addServiceToFacility(id: number) {
    try{
      const res = await api.post(`/api/facilities/services/${id}`);
      return res.data?.data || []; 
    }
    catch(error: any) {
      console.error('Adding service to facility error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to add service to facility' };
    }
  }

 
}

export default new AdminCarePlanService();
