import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import CaregiverAssignmentService, { CreateAssignmentData, UpdateAssignmentData } from '../services/caregiverAssignmentService';


export const useAssignmentsByCarePlan = (carePlanId: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['caregiverAssignments', 'carePlan', carePlanId],
    queryFn: () => CaregiverAssignmentService.getAssignmentsByCarePlan(carePlanId),
    enabled: enabled && !!carePlanId,
  });
};


export const useAssignmentsByPatient = (patientId: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['caregiverAssignments', 'patient', patientId],
    queryFn: () => CaregiverAssignmentService.getAssignmentsByPatient(patientId),
    enabled: enabled && !!patientId,
  });
};


export const useCreateAssignment = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateAssignmentData) => CaregiverAssignmentService.createAssignment(data),
    onSuccess: (data, variables) => {
      // Invalidate related queries to refetch updated data
      queryClient.invalidateQueries({ queryKey: ['caregiverAssignments'] });
      queryClient.invalidateQueries({ queryKey: ['caregiverAssignments', 'carePlan', variables.care_plan_id] });
      queryClient.invalidateQueries({ queryKey: ['caregiverAssignments', 'patient', variables.patient_id] });
    },
    onError: (error) => {
      console.error('Create assignment mutation error:', error);
    },
  });
};


export const useUpdateAssignment = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: UpdateAssignmentData) => CaregiverAssignmentService.updateAssignment(data),
    onSuccess: () => {
      // Invalidate all caregiver assignment queries
      queryClient.invalidateQueries({ queryKey: ['caregiverAssignments'] });
    },
    onError: (error) => {
      console.error('Update assignment mutation error:', error);
    },
  });
};
