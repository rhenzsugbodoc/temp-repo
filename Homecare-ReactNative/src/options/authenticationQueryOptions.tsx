// src/options/authenticationQueryOptions.ts
import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import authService, { RegisterData, LoginData, EditUserData } from '../services/authService';
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
    queryFn: async () => {
      const response = await authService.getCurrentUser();
      return response.data; // Extract the user data from the response
    },
    staleTime: 1000 * 60 * 5, // 5 minutes
    retry: 1,
  });
};

export const useRefreshTokenMutation = () => {
  return useMutation({
    mutationFn: () => authService.refreshToken(),
  });
};

export const useEditUserMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: async (userData: EditUserData) => {
      const response = await authService.editUser(userData);
      
      // Update stored user data
      if (response.success && response.data) {
        await saveUserData(response.data);
      }
      
      return response;
    },
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['currentUser'] });
    },
  });
};

export const useDeleteUserMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (userId: string) => authService.deleteUser(userId),
    onSuccess: () => {
      queryClient.clear(); // Clear all queries after user deletion
    },
  });
};