// src/context/AuthContext.tsx
import React, { createContext, useContext, useState, useEffect, ReactNode } from 'react';
import AsyncStorage from '@react-native-async-storage/async-storage';
import authService from '../services/authService';

interface User {
  user_id: number;
  first_name: string;
  middle_name?: string;
  last_name: string;
  email_address: string;
  role: string;
  phone_number?: string;
  date_of_birth?: string;
  gender?: string;
  home_address?: string;
  profile_picture?: string;
  created_at?: string;
}

interface AuthContextType {
  loggedInUser: User | null;
  isLoading: boolean;
  isAuthenticated: boolean;
  loginUser: (email: string, password: string) => Promise<void>;
  logoutUser: () => Promise<void>;
  refreshUserData: () => Promise<void>;
  updateUserData: (userData: Partial<User>) => void;
}

const AuthContext = createContext<AuthContextType | undefined>(undefined);

export const AuthProvider = ({ children }: { children: ReactNode }) => {
  const [loggedInUser, setLoggedInUser] = useState<User | null>(null);
  const [isLoading, setIsLoading] = useState(true);

  // Initialize - Check if user is already logged in
  useEffect(() => {
    initializeAuth();
  }, []);

  const initializeAuth = async () => {
    try {
      const token = await authService.getStoredToken();
      const userData = await authService.getStoredUser();

      if (token && userData) {
        setLoggedInUser(userData);
      }
    } catch (error) {
      console.error('Auth initialization error:', error);
    } finally {
      setIsLoading(false);
    }
  };

  const loginUser = async (email: string, password: string) => {
    try {
      const response = await authService.login({ email_address: email, password });
      
      if (response.success && response.data) {
        setLoggedInUser(response.data.user);
      } else {
        throw new Error(response.message || 'Login failed');
      }
    } catch (error) {
      throw error;
    }
  };

  const logoutUser = async () => {
    try {
      await authService.logout();
    } catch (error) {
      console.error('Logout error:', error);
    } finally {
      setLoggedInUser(null);
    }
  };

  const refreshUserData = async () => {
    try {
      const response = await authService.getCurrentUser();
      
      if (response.success && response.data) {
        setLoggedInUser(response.data);
        // Update stored user data
        await AsyncStorage.setItem('user_data', JSON.stringify(response.data));
      }
    } catch (error) {
      console.error('Refresh user data error:', error);
      throw error;
    }
  };

  const updateUserData = (userData: Partial<User>) => {
    setLoggedInUser(prev => prev ? { ...prev, ...userData } : null);
  };

  return (
    <AuthContext.Provider
      value={{
        loggedInUser,
        isLoading,
        isAuthenticated: !!loggedInUser,
        loginUser,
        logoutUser,
        refreshUserData,
        updateUserData,
      }}
    >
      {children}
    </AuthContext.Provider>
  );
};

export const useAuth = () => {
  const context = useContext(AuthContext);
  if (!context) {
    throw new Error('useAuth must be used within AuthProvider');
  }
  return context;
};