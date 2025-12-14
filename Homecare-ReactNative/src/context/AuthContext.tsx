import React, { createContext, useContext, useEffect, useState, ReactNode } from 'react';
import { getUserData, saveUserData } from '../options/tokenHandler';
import { useCurrentUser } from '../options/authenticationQueryOptions';

export interface User {
  user_id: number;
  first_name: string;
  middle_name?: string;
  last_name: string;
  email_address: string;
  role: string;
  phone_number?: string;
  password?: string;
  emergency_contact?: string,
  date_of_birth?: string;
  gender?: string;
  home_address?: string;
  profile_picture?: string;
  created_at?: string;
  updated_at?: string;
}

interface AuthContextType {
  isLoading: boolean;
  refreshUserData: () => Promise<void>;
}

const AuthContext = createContext<AuthContextType | undefined>(undefined);

export const AuthProvider = ({ children }: { children: ReactNode }) => {
  const [isLoading, setIsLoading] = useState(true);

  const currentUserQuery = useCurrentUser();

  useEffect(() => {
    initializeAuth();
  }, []);

  const initializeAuth = async () => {
    setIsLoading(true);
    try {
      //checks secure store if user data exists
      const userData = await getUserData<User>();
    } catch (error) {
      console.error('Auth initialization error:', error);
    } finally {
      setIsLoading(false);
    }
  };

  const refreshUserData = async () => {
    try {
      //used on dashboard loads?
      const response = await currentUserQuery.refetch();
      if (response.data && response.data.success && response.data.data) {
        
        await saveUserData(response.data.data);
      }
    } catch (error) {
      console.error('Refresh user data error:', error);
      throw error;
    }
  };

  return (
    <AuthContext.Provider
      value={{
        isLoading,
        refreshUserData,

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