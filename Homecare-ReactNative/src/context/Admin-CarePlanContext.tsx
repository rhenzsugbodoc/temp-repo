import React, { createContext, useContext, useState, ReactNode } from 'react';

interface CarePlanContextType {
  requestID: number | null;
  setRequestID: React.Dispatch<React.SetStateAction<number | null>>;
  patientID?: number | null;
  setPatientID?: React.Dispatch<React.SetStateAction<number | null>>;
  facilityID?: number | null;
  setFacilityID?: React.Dispatch<React.SetStateAction<number | null>>;
  carePlanID?: number | null;
  setCarePlanID?: React.Dispatch<React.SetStateAction<number | null>>;
}

const CarePlanContext = createContext<CarePlanContextType | undefined>(undefined);

export const CarePlanProvider = ({ children }: { children: ReactNode }) => {
  const [requestID, setRequestID] = useState<number | null>(null);
  const [patientID, setPatientID] = useState<number | null>(null);
  const [facilityID, setFacilityID] = useState<number | null>(null);
  const [carePlanID, setCarePlanID] = useState<number | null>(null);
  return (
    <CarePlanContext.Provider
      value={{
        requestID,
        setRequestID,
        patientID,
        setPatientID,
        facilityID,
        setFacilityID,
        carePlanID,
        setCarePlanID,
      }}
    >
      {children}
    </CarePlanContext.Provider>
  );
};

export const useCarePlan = () => {
  const context = useContext(CarePlanContext);
  if (!context) {
    throw new Error('useCarePlan must be used within CarePlanProvider');
  }
  return context;
};