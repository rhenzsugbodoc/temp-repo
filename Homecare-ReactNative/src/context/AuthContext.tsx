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
  refreshUserData: () => Promise<void>;
  updateUserData: (userData: Partial<User>) => void;
  setLoggedInUser: (user: User | null) => void;
}

const AuthContext = createContext<AuthContextType | undefined>(undefined);

export const AuthProvider = ({ children }: { children: ReactNode }) => {
  const [loggedInUser, setLoggedInUser] = useState<User | null>(null);
  const [isLoading, setIsLoading] = useState(true);

  const currentUserQuery = useCurrentUser();

  useEffect(() => {
    initializeAuth();
  }, []);

  const initializeAuth = async () => {
    setIsLoading(true);
    try {
      const userData = await getUserData<User>();
      if (userData) {
        setLoggedInUser(userData);
      }
    } catch (error) {
      console.error('Auth initialization error:', error);
    } finally {
      setIsLoading(false);
    }
  };

  const refreshUserData = async () => {
    try {
      const response = await currentUserQuery.refetch();
      if (response.data && response.data.success && response.data.data) {
        setLoggedInUser(response.data.data);
        await saveUserData(response.data.data);
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
        refreshUserData,
        updateUserData,
        setLoggedInUser,
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