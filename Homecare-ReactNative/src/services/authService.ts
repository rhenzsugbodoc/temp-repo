// src/services/authService.ts
import api from './api';
import AsyncStorage from '@react-native-async-storage/async-storage';

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

export interface LoginData {
  email_address: string;
  password: string;
}

export interface AuthResponse {
  success: boolean;
  message: string;
  data?: {
    user: any;
    token: string;
    token_type: string;
    expires_in: number;
  };
  errors?: any;
}

class AuthService {
  async register(userData: RegisterData): Promise<AuthResponse> {
    try {
      const response = await api.post('/api/register', userData);
      
      // Store token if registration successful
      if (response.data.success && response.data.data?.token) {
        await AsyncStorage.setItem('auth_token', response.data.data.token);
        await AsyncStorage.setItem('user_data', JSON.stringify(response.data.data.user));
      }
      
      return response.data;
    } catch (error: any) {
      console.error('Registration error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  async login(credentials: LoginData): Promise<AuthResponse> {
    try {
      const response = await api.post('/api/login', credentials);
      
      // Store token if login successful
      if (response.data.success && response.data.data?.token) {
        await AsyncStorage.setItem('auth_token', response.data.data.token);
        await AsyncStorage.setItem('user_data', JSON.stringify(response.data.data.user));
      }
      
      return response.data;
    } catch (error: any) {
      console.error('Login error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  async logout(): Promise<void> {
    try {
      await api.post('/api/logout');
    } catch (error) {
      console.error('Logout error:', error);
    } finally {
      // Clear local storage regardless of API call success
      await AsyncStorage.removeItem('auth_token');
      await AsyncStorage.removeItem('user_data');
    }
  }

  async getCurrentUser(): Promise<any> {
    try {
      const response = await api.get('/api/get_user');
      return response.data;
    } catch (error: any) {
      console.error('Get user error:', error.response?.data || error.message);
      throw error;
    }
  }

  async refreshToken(): Promise<AuthResponse> {
    try {
      const response = await api.post('/api/refresh_token');
      
      if (response.data.success && response.data.data?.token) {
        await AsyncStorage.setItem('auth_token', response.data.data.token);
      }
      
      return response.data;
    } catch (error: any) {
      console.error('Refresh token error:', error.response?.data || error.message);
      throw error;
    }
  }

  async getStoredToken(): Promise<string | null> {
    return await AsyncStorage.getItem('auth_token');
  }

  async getStoredUser(): Promise<any | null> {
    const userData = await AsyncStorage.getItem('user_data');
    return userData ? JSON.parse(userData) : null;
  }
}

export default new AuthService();