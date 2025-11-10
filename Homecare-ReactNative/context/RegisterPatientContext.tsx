import React, { createContext, useContext, useState, ReactNode } from 'react';
import DateTimePicker from '@react-native-community/datetimepicker';
import {User} from '../context/AuthContext';

type PartialUser = Partial<User>; 

type RegisterContextType = {
  user: PartialUser;
  setUser: React.Dispatch<React.SetStateAction<PartialUser>>;
}

const RegisterContext = createContext<RegisterContextType | undefined>(undefined);

export const RegisterProvider = ({ children }: { children: ReactNode }) => {
  const [user, setUser] = useState<PartialUser>({});
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