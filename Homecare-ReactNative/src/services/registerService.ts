import api from './api';

export interface FacilityData {
  facility_name?: string;
  facility_address?: string;
  facility_type?: 'Hospital' | 'Clinic' | 'Nursing Home' | 'Rehabilitation Center' | string | null;
  country?: string;
  city?: string;
  province?: string;
  postal_code?: string;
  facility_phone?: string;
  facility_email?: string;
  facility_website?: string;
  facility_description?: string;
}

export interface PharmacyData {
  pharmacy_name?: string;
  pharmacy_address?: string;
  pharmacy_phone?: string;
  pharmacy_email?: string;
  country?: string;
  province?: string;
  city?: string;
  postal_code?: string;
}

class RegisterService {
  async register_facility(facilityData: FacilityData): Promise<any> {
    try {
      const response = await api.post('/api/facilities/create', facilityData);
      return response.data;
    } catch (error: any) {
      console.error('Facility registration error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  async register_pharmacy(pharmacyData: PharmacyData): Promise<any> {
    try {
      const response = await api.post('/api/prescriptions/create', pharmacyData);
      return response.data;
    } catch (error: any) {
      console.error('Pharmacy registration error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }
}

export const registerService = new RegisterService();