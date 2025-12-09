// src/options/authenticationQueryOptions.ts
import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import authService, { RegisterData, LoginData } from '../services/authService';

export const useRegisterMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: async (userData: any) => {
      // Transform data to match backend expectations
      const registerData: RegisterData = {
        first_name: userData.first_name,
        middle_name: userData.middle_name,
        last_name: userData.last_name,
        email_address: userData.email_address,
        password: userData.password,
        phone_number: userData.phone_number,
        date_of_birth: userData.dob ? userData.dob.toISOString().split('T')[0] : undefined,
        gender: userData.gender,
        home_address: userData.home_address,
        role: 'Patient',
        medical_conditions: userData.medical_conditions?.join(', ') || 'None',
        allergies: userData.allergies?.join(', ') || 'None',
        current_medications: userData.current_medications?.join(', ') || 'None',
        emergency_contact: userData.emergency_contact,
      };
      
      return authService.register(registerData);
    },
    onSuccess: (data) => {
      // Invalidate and refetch user data
      queryClient.invalidateQueries({ queryKey: ['currentUser'] });
    },
  });
};

export const useLoginMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (credentials: LoginData) => authService.login(credentials),
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['currentUser'] });
    },
  });
};

export const useLogoutMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: () => authService.logout(),
    onSuccess: () => {
      queryClient.clear(); // Clear all queries
    },
  });
};

export const useCurrentUser = () => {
  return useQuery({
    queryKey: ['currentUser'],
    queryFn: () => authService.getCurrentUser(),
    enabled: false, // Only fetch when explicitly called
    retry: false,
  });
};

export const useRefreshTokenMutation = () => {
  return useMutation({
    mutationFn: () => authService.refreshToken(),
  });
};