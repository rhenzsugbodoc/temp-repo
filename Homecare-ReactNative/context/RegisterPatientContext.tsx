import React, { createContext, useContext, useState, ReactNode } from 'react';
import DateTimePicker from '@react-native-community/datetimepicker';
import {User} from '../context/AuthContext';



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