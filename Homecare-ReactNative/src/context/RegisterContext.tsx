import React, { createContext, useContext, useState, ReactNode } from 'react';
import { RegisterData } from '../services/authService';
import { useRegisterMutation } from '../options/authenticationQueryOptions';
import {FacilityData, PharmacyData} from '../services/registerService';
import { useRegisterFacilityMutation, useRegisterPharmacyMutation } from '../options/registerFacilityQueryOptions';


type RegisterContextType = {
  user: Partial<RegisterData>;
  setUser: React.Dispatch<React.SetStateAction<Partial<RegisterData>>>;
  facility: Partial<FacilityData>;
  setFacility: React.Dispatch<React.SetStateAction<Partial<FacilityData>>>;
  pharmacy: Partial<PharmacyData>;
  setPharmacy: React.Dispatch<React.SetStateAction<Partial<PharmacyData>>>;
  registerUser: (userData: RegisterData) => Promise<any>;
  registerFacility: (facilityData: FacilityData) => Promise<any>;
  registerPharmacy: (pharmacyData: PharmacyData) => Promise<any>;
  isRegistering: boolean;
  isRegisteringFacility: boolean;
  isRegisteringPharmacy: boolean;
}

const RegisterContext = createContext<RegisterContextType | undefined>(undefined);

export const RegisterProvider = ({ children }: { children: ReactNode }) => {
  const [user, setUser] = useState<Partial<RegisterData>>({});
  const [facility, setFacility] = useState<Partial<FacilityData>>({});
  const [pharmacy, setPharmacy] = useState<Partial<PharmacyData>>({});
  const registerMutation = useRegisterMutation();
  const registerFacilityMutation = useRegisterFacilityMutation();
  const registerPharmacyMutation = useRegisterPharmacyMutation();

  const registerUser = async (userData: RegisterData) => {
    try {
      // userData.role ='Patient';
      const response = await registerMutation.mutateAsync(userData);
      return response;
    } catch (error) {
      throw error;
    }
  };

  const registerFacility = async (facilityData: FacilityData) => {
    try {
      const response = await registerFacilityMutation.mutateAsync(facilityData);
      return response;
    } catch (error) {
      throw error;
    }
  };

  const registerPharmacy = async (pharmacyData: PharmacyData) => {
    try {
      const response = await registerPharmacyMutation.mutateAsync(pharmacyData);
      return response;
    } catch (error) {
      throw error;
    }
  };

  return (
    <RegisterContext.Provider value={{ 
      user, 
      setUser,
      facility,
      setFacility,
      pharmacy,
      setPharmacy, 
      registerUser,
      registerFacility,
      registerPharmacy,
      isRegistering: registerMutation.isPending,
      isRegisteringFacility: registerFacilityMutation.isPending,
      isRegisteringPharmacy: registerPharmacyMutation.isPending
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