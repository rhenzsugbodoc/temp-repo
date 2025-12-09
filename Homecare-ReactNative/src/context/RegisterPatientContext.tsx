import React, { createContext, useContext, useState, ReactNode } from 'react';
import DateTimePicker from '@react-native-community/datetimepicker';


type User = {
  first_name?: string;
  middle_name?: string;
  last_name?: string;
  phone_number?: string;
  email_address?: string;
  password?: string;
  confirm_password?: string;
  gender?: "Male" | "Female";
  dob?: Date;
  home_address?: string;
  medical_conditions?: string[];
  allergies?: string[];
  emergency_contact?: string;
  current_medications?: string[];
};

type RegisterContextType = {
  user: User;
  setUser: React.Dispatch<React.SetStateAction<User>>;
}

const RegisterContext = createContext<RegisterContextType | undefined>(undefined);

export const RegisterProvider = ({ children }: { children: ReactNode }) => {
  const [user, setUser] = useState<User>({});
  return (
    <RegisterContext.Provider value={{ user, setUser }}>
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