// src/options/carePlanQueryOptions.tsx
import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import CarePlanService, {
  ServiceRequest,
  RoutineServiceRequest,
  ServiceRequestDetails
} from '../services/care_planService';

// ===== Query Hooks =====

export const useOneTimeRequests = (patient_id: number, status?: string, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['service-requests', 'one-time', patient_id, status],
    queryFn: () => CarePlanService.getOneTimeRequests(patient_id, status),
    staleTime: 5 * 60 * 1000,
    enabled: enabled && !!patient_id,
  });
};

export const useRoutineRequests = (patient_id: number, status?: string, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['service-requests', 'routine', patient_id, status],
    queryFn: () => CarePlanService.getRoutineRequests(patient_id, status),
    staleTime: 5 * 60 * 1000,
    enabled: enabled && !!patient_id,
  });
};

export const useRequestDetails = (request_id: number,  enabled: boolean = true) => {
  return useQuery({
    queryKey: ['service-request', 'details', request_id],
    queryFn: () => CarePlanService.getRequestDetails(request_id),
    staleTime: 5 * 60 * 1000,
    enabled: enabled && !!request_id,
  });
};

// ===== Mutation Hooks =====

export const useCancelRequest = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ request_id, patient_id }: { request_id: number; patient_id: number }) => 
      CarePlanService.cancelRequest(request_id, patient_id),
    onSuccess: (data, variables) => {
      // Invalidate all service request queries for this patient
      queryClient.invalidateQueries({ queryKey: ['service-requests', 'one-time', variables.patient_id] });
      queryClient.invalidateQueries({ queryKey: ['service-requests', 'routine', variables.patient_id] });
      queryClient.invalidateQueries({ queryKey: ['service-request', 'details', variables.request_id] });
      queryClient.invalidateQueries({ queryKey: ['patientDashboard'] });
    },
  });
};