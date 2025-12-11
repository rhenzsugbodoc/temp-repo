import React, { createContext, useContext, useState, ReactNode } from 'react';
import { RegisterData } from '../services/authService';
import { useRegisterMutation } from '../options/authenticationQueryOptions';

type RegisterContextType = {
  user: Partial<RegisterData>;
  setUser: React.Dispatch<React.SetStateAction<Partial<RegisterData>>>;
  registerUser: (userData: RegisterData) => Promise<any>;
  isRegistering: boolean;
}

const RegisterContext = createContext<RegisterContextType | undefined>(undefined);

export const RegisterProvider = ({ children }: { children: ReactNode }) => {
  const [user, setUser] = useState<Partial<RegisterData>>({});
  const registerMutation = useRegisterMutation();

  const registerUser = async (userData: RegisterData) => {
    try {
      userData.role ='Patient';
      const response = await registerMutation.mutateAsync(userData);
      return response;
    } catch (error) {
      throw error;
    }
  };

  return (
    <RegisterContext.Provider value={{ 
      user, 
      setUser, 
      registerUser,
      isRegistering: registerMutation.isPending 
    }}>
      {children}
    </RegisterContext.Provider>
  );
};

export const useRegister = () => {
  const context = useContext(RegisterContext);
  if (!context) {
    throw new Error('useRegister must be used within a RegisterProvider');
  }
  return context;
};