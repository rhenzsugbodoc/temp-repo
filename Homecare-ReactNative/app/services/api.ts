import AsyncStorage from '@react-native-async-storage/async-storage';

const API_BASE_URL = 'hhttp://localhost/homecare_ci3-hmvc/';

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
    emergency_contact?: string;
    medical_conditions?: string[];
    allergies?: string[];
    current_medications?: string[];
  }
  
  export interface LoginData {
    email_address: string;
    password: string;
  }
  
  export interface ApiResponse<T = any> {
    success: boolean;
    message: string;
    data?: T;
    errors?: Record<string, string>;
  }
  
  class ApiService {
    private baseUrl: string;
  
    constructor(baseUrl: string) {
      this.baseUrl = baseUrl;
    }
  
    // Generic request method
    private async request<T>(
      endpoint: string,
      method: string = 'GET',
      body?: any,
      headers?: Record<string, string>
    ): Promise<ApiResponse<T>> {
      try {
        const token = await AsyncStorage.getItem('userToken');
        
        const config: RequestInit = {
          method,
          headers: {
            'Content-Type': 'application/json',
            ...(token && { Authorization: `Bearer ${token}` }),
            ...headers,
          },
        };
  
        if (body && method !== 'GET') {
          config.body = JSON.stringify(body);
        }
  
        console.log(`🌐 ${method} ${this.baseUrl}${endpoint}`);
        console.log('📤 Request Body:', body);
  
        const response = await fetch(`${this.baseUrl}${endpoint}`, config);
        const data = await response.json();
  
        console.log('📥 Response:', data);
  
        if (!response.ok && !data.success) {
          throw new Error(data.message || 'Request failed');
        }
  
        return data;
      } catch (error) {
        console.error('❌ API Error:', error);
        throw error;
      }
    }
  
    // Register user
    async register(userData: RegisterData): Promise<ApiResponse> {
      // Format date for backend (YYYY-MM-DD)
      if (userData.date_of_birth) {
        const date = new Date(userData.date_of_birth);
        userData.date_of_birth = date.toISOString().split('T')[0];
      }
  
      return this.request('/index.php/auth/register', 'POST', userData);
    }
  
    // Login user
    async login(credentials: LoginData): Promise<ApiResponse> {
      const response = await this.request('/index.php/auth/login', 'POST', credentials);
      
      // Save user data if login successful
      if (response.success && response.data) {
        await AsyncStorage.setItem('userData', JSON.stringify(response.data));
        if (response.data.token) {
          await AsyncStorage.setItem('userToken', response.data.token);
        }
      }
      
      return response;
    }
  
    // Logout user
    async logout(): Promise<void> {
      await AsyncStorage.removeItem('userData');
      await AsyncStorage.removeItem('userToken');
    }
  
    // Get current user
    async getCurrentUser(): Promise<any> {
      const userData = await AsyncStorage.getItem('userData');
      return userData ? JSON.parse(userData) : null;
    }
  
    // Check if user is authenticated
    async isAuthenticated(): Promise<boolean> {
      const token = await AsyncStorage.getItem('userToken');
      return !!token;
    }
  }
  
  export const api = new ApiService(API_BASE_URL);