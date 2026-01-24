import React, { createContext, useContext, useState, ReactNode } from 'react';
import { SubmitRequestData } from '@/src/services/service_requestService';   



interface RequestServiceContextType {
  form: SubmitRequestData;
  setForm: React.Dispatch<React.SetStateAction<SubmitRequestData>>;
  // Add other context values here if needed
}

const RequestServiceContext = createContext<RequestServiceContextType | undefined>(undefined);

export const RequestServiceProvider = ({ children }: { children: ReactNode }) => {
  const [form, setForm] = useState<SubmitRequestData>({
    patient_id: null,
    service_id: null,
    // service_category: null,
    service_description: '',
    preferred_date: null,
    preferred_time: null,
    preferred_caregiver_id: null,
    service_type: null,
    facility_id: null,
    notes: null,
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