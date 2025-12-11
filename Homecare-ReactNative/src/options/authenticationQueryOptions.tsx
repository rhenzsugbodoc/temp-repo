// src/options/authenticationQueryOptions.ts
import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import authService, { RegisterData, LoginData } from '../services/authService';
import { saveToken, saveUserData, clearAuth } from './tokenHandler';

export const useRegisterMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: async (userData: RegisterData) => {
      const response = await authService.register(userData);
      
      // Handle token and user data storage
      if (response.success && response.data?.token) {
        await saveToken(response.data.token);
        await saveUserData(response.data.user);
      }
      
      return response;
    },
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['currentUser'] });
    },
  });
};

export const useLoginMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: async (credentials: LoginData) => {
      const response = await authService.login(credentials);
      
      // Handle token and user data storage
      if (response.success && response.data?.token) {
        await saveToken(response.data.token);
        await saveUserData(response.data.user);
      }
      
      return response;
    },
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['currentUser'] });
    },
  });
};

export const useLogoutMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: async () => {
      await authService.logout();
      await clearAuth();
    },
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