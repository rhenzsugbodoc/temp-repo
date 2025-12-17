import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import {FacilityData, PharmacyData, registerService} from '../services/registerService';

export const useRegisterFacilityMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: async (facilityData: FacilityData) => {
      const response = await registerService.register_facility(facilityData);
      return response;
    },
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['facilities'] });
    },
  });
};

export const useRegisterPharmacyMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: async (pharmacyData: PharmacyData) => {
      const response = await registerService.register_pharmacy(pharmacyData);
      return response;
    },
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['pharmacies'] });
    },
  });
};