import React, { createContext, useContext, useState, ReactNode } from 'react';
import { PatientList } from '../services/Admin_patientsService';

interface AdminPatientsContextType {
  selectedPatient: PatientList | null;
  setSelectedPatient: (patient: PatientList | null) => void;
}

const AdminPatientsContext = createContext<AdminPatientsContextType | undefined>(undefined);

export const AdminPatientsProvider = ({ children }: { children: ReactNode }) => {
  const [selectedPatient, setSelectedPatient] = useState<PatientList | null>(null);

  return (
    <AdminPatientsContext.Provider value={{ selectedPatient, setSelectedPatient }}>
      {children}
    </AdminPatientsContext.Provider>
  );
};

export const useAdminPatients = () => {
  const context = useContext(AdminPatientsContext);
  if (!context) {
    throw new Error('useAdminPatients must be used within AdminPatientsProvider');
  }
  return context;
};