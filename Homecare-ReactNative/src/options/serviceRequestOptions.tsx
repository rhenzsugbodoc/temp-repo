// src/options/serviceRequestOptions.tsx
import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import ServiceRequestService, { 
  FacilityData, 
  DoctorDetails, 
  CaregiverDetails, 
  OneTimeData, 
  RoutineServiceData, 
  FacilityDetails ,
  FacilityOneTimeRequest,
  FacilityRoutineRequest,
} from '../services/service_requestService';



export const useFacilityData = () => {
  return useQuery({
    queryKey: ['facilities'],
    queryFn: () => ServiceRequestService.getFacilityData(),
    staleTime: 10 * 60 * 1000, 
  });
};

export const useFacilityById = (facility_id: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facility', facility_id],
    queryFn: () => ServiceRequestService.getFacilityById(facility_id),
    staleTime: 10 * 60 * 1000, 
    enabled: enabled && !!facility_id,
  });
};

export const useFacilitiesByService = (service_id: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facilities', 'by-service', service_id],
    queryFn: () => ServiceRequestService.getFacilitiesByService(service_id),
    staleTime: 5 * 60 * 1000, 
    enabled: enabled && !!service_id,
  });
};

export const useSearchFacilities = (query: string, limit: number = 50, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facilities', 'search', query, limit],
    queryFn: () => ServiceRequestService.searchFacilities(query, limit),
    staleTime: 2 * 60 * 1000, 
    enabled: enabled && query.length > 0,
  });
};

export const useFacilitiesByCategory = (category_id: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facilities', 'by-category', category_id],
    queryFn: () => ServiceRequestService.getFacilitiesByCategory(category_id),
    staleTime: 10 * 60 * 1000, 
    enabled: enabled && !!category_id,
  });
};

export const useFacilityServices = (facility_id: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facility', facility_id, 'services'],
    queryFn: () => ServiceRequestService.getFacilityServices(facility_id),
    staleTime: 5 * 60 * 1000, 
    enabled: enabled && !!facility_id,
  });
};

export const useFacilityDoctors = (facility_id: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facility', facility_id, 'doctors'],
    queryFn: () => ServiceRequestService.getFacilityDoctors(facility_id),
    staleTime: 10 * 60 * 1000,
    enabled: enabled && !!facility_id,
  });
};

export const useFacilityCaregivers = (facility_id: number, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facility', facility_id, 'caregivers'],
    queryFn: () => ServiceRequestService.getFacilityCaregivers(facility_id),
    staleTime: 10 * 60 * 1000,
    enabled: enabled && !!facility_id,
  });
};

// ===== Facility Admin Queries =====

export const useFacilityOneTimeRequests = (status?: string, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facility', 'admin', 'one-time-requests', status],
    queryFn: () => ServiceRequestService.getFacilityOneTimeRequests(),
    staleTime: 2 * 60 * 1000, // 2 minutes - shorter cache for admin data
    enabled: enabled,
  });
};

export const useFacilityRoutineRequests = (status?: string, enabled: boolean = true) => {
  return useQuery({
    queryKey: ['facility', 'admin', 'routine-requests', status],
    queryFn: () => ServiceRequestService.getFacilityRoutineRequests(),
    staleTime: 2 * 60 * 1000, // 2 minutes - shorter cache for admin data
    enabled: enabled,
  });
};

// ===== Service Request Mutations =====

export const useCreateRoutineServiceRequest = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (requestData: RoutineServiceData) => 
      ServiceRequestService.create_routine(requestData),
    onSuccess: () => {
      // Invalidate relevant queries after creating a service request
      queryClient.invalidateQueries({ queryKey: ['patientDashboard'] });
      queryClient.invalidateQueries({ queryKey: ['todaySchedule'] });
    },
  });
};

export const useCreateOneTimeServiceRequest = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (requestData: OneTimeData) => 
      ServiceRequestService.create_oneTime(requestData),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['patientDashboard'] });
      queryClient.invalidateQueries({ queryKey: ['todaySchedule'] });
    },
  });
};