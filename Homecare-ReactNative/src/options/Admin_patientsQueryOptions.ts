import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import AdminCarePlanService from '../services/Admin_patientsService';


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


