import React, { createContext, useContext, useState, ReactNode } from 'react';

interface FacilityContextType {
  facilityID: number | null;
  setFacilityID: React.Dispatch<React.SetStateAction<number | null>>;
  facilityServices: any[];
  setFacilityServices: React.Dispatch<React.SetStateAction<any[]>>;
}

const FacilityContext = createContext<FacilityContextType | undefined>(undefined);

export const FacilityProvider = ({ children }: { children: ReactNode }) => {
  const [facilityID, setFacilityID] = useState<number | null>(null);
  const [facilityServices, setFacilityServices] = useState<any[]>([]);
  return (
    <FacilityContext.Provider
      value={{
        facilityID,
        setFacilityID,
        facilityServices,
        setFacilityServices,
      }}
    >
      {children}
    </FacilityContext.Provider>
  );
};

export const useFacility = () => {
  const context = useContext(FacilityContext);
  if (!context) {
    throw new Error('useFacility must be used within FacilityProvider');
  }
  return context;
};