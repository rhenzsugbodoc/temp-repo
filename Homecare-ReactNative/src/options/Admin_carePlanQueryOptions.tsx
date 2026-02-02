import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import AdminCarePlanService, { CreateCarePlanData, UpdateCarePlanData } from '../services/Admin_careplanService';

/**
 * Hook to get care plans for a specific patient
 */
export const useCarePlansByPatient = (patientId: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['carePlans', 'patient', patientId],
    queryFn: () => AdminCarePlanService.getCarePlansByPatient(patientId),
    enabled: enabled && !!patientId,
  });
};

/**
 * Hook to get care plans for the current user
 */
export const useCarePlansByCurrentUser = (enabled: boolean = true) => {
  return useQuery({
    queryKey: ['carePlans', 'currentUser'],
    queryFn: () => AdminCarePlanService.getCarePlansByCurrentUser(),
    enabled,
  });
};

/**
 * Hook to get care plans for the facility
 */
export const useCarePlansByFacility = (enabled: boolean = true) => {
  return useQuery({
    queryKey: ['carePlans', 'facility'],
    queryFn: () => AdminCarePlanService.getCarePlansByFacility(),
    enabled,
  });
};

/**
 * Hook to get a specific care plan by ID
 */
export const useCarePlanById = (carePlanId: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['carePlans', carePlanId],
    queryFn: () => AdminCarePlanService.getCarePlanById(carePlanId),
    enabled: enabled && !!carePlanId,
  });
};

/**
 * Hook to create a new care plan
 */
export const useCreateCarePlan = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateCarePlanData) => AdminCarePlanService.createCarePlan(data),
    onSuccess: (data, variables) => {
      // Invalidate care plans queries to refetch updated data
      queryClient.invalidateQueries({ queryKey: ['carePlans'] });
      queryClient.invalidateQueries({ queryKey: ['carePlans', 'patient', variables.patient_id] });
      queryClient.invalidateQueries({ queryKey: ['carePlans', 'facility'] });
    },
    onError: (error) => {
      console.error('Create care plan mutation error:', error);
    },
  });
};

/**
 * Hook to update a care plan
 */
export const useUpdateCarePlan = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ carePlanId, data }: { carePlanId: number; data: UpdateCarePlanData }) =>
      AdminCarePlanService.updateCarePlan(carePlanId, data),
    onSuccess: (data, variables) => {
      // Invalidate specific care plan and lists
      queryClient.invalidateQueries({ queryKey: ['carePlans', variables.carePlanId] });
      queryClient.invalidateQueries({ queryKey: ['carePlans'] });
    },
    onError: (error) => {
      console.error('Update care plan mutation error:', error);
    },
  });
};

/**
 * Hook to delete a care plan
 */
export const useDeleteCarePlan = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (carePlanId: number) => AdminCarePlanService.deleteCarePlan(carePlanId),
    onSuccess: () => {
      // Invalidate all care plan queries
      queryClient.invalidateQueries({ queryKey: ['carePlans'] });
    },
    onError: (error) => {
      console.error('Delete care plan mutation error:', error);
    },
  });
};
