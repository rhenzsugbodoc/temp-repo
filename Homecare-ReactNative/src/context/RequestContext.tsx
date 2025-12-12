import React, { createContext, useContext, useState, ReactNode } from 'react';
import { OneTimeData } from '@/src/services/service_requestService';   



interface RequestServiceContextType {
  form: OneTimeData;
  setForm: React.Dispatch<React.SetStateAction<OneTimeData>>;
  // Add other context values here if needed
}

const RequestServiceContext = createContext<RequestServiceContextType | undefined>(undefined);

export const RequestServiceProvider = ({ children }: { children: ReactNode }) => {
  const [form, setForm] = useState<OneTimeData>({
    patient_id: null,
    service_id: null,
    service_category: '',
    service_description: '',
    preferred_date: '',
    preferred_time: '',
    preffered_caregiver_id: null,
    facility_id: null,
    notes: '',
  });

  return (
    <RequestServiceContext.Provider value={{ form, setForm }}>
      {children}
    </RequestServiceContext.Provider>
  );
};

export const useRequestService = () => {
  const context = useContext(RequestServiceContext);
  if (!context) {
    throw new Error('useRequestService must be used within RequestServiceProvider');
  }
  return context;
};