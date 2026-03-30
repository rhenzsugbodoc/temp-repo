import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import AdminCarePlanService, { FacilityDetails } from '../services/Admin_facilityService';


/**
 * Hook to get care plans for the facility
 */
export const usePatientsByFacility = (enabled: boolean = true) => {
  return useQuery({
    queryKey: ['patients', 'facility'],
    queryFn: () => AdminCarePlanService.getPatientsByFacility(),
    enabled,
  });
};

export const useCurrentFacility = (enabled: boolean = true) => {
  return useQuery({
    queryKey: ['currentFacility'],
    queryFn: () => AdminCarePlanService.getCurrentFacility(),
    enabled,
  });
}

export const useEditFacilityMutation = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: AdminCarePlanService.editCurrentFacility,
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['currentFacility'] });
    }
  });
}

export const useAvailableServices = (enabled: boolean = true) => {
  return useQuery({
    queryKey: ['services'],
    queryFn: () => AdminCarePlanService.getAvailableServices(),
    enabled,
  });
};

export const useServiceToFacilityMutation = () => {
  const queryClient = useQueryClient(); 
  return useMutation({
    mutationFn: AdminCarePlanService.addServiceToFacility,
    onSuccess: () => {
      queryClient.invalidateQueries({queryKey: ["services"]});
    }
  })
}



