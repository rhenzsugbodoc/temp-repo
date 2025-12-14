import api from './api';

export interface RegisterData {
  first_name: string;
  middle_name?: string;
  last_name: string;
  email_address: string;
  password: string;
  phone_number?: string;
  date_of_birth?: string;
  gender?: string;
  home_address?: string;
  role: string;
  medical_conditions?: string;
  allergies?: string;
  current_medications?: string;
  emergency_contact?: string;
}