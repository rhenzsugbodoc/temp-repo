// src/options/dashboardQueryOptions.tsx
import { useQuery } from '@tanstack/react-query';
import DashboardService from '../services/dashboardService';

export const usePatientDashboard = () => {
  return useQuery({
    queryKey: ['patientDashboard'],
    queryFn: () => DashboardService.getPatientDashboard(),
    staleTime: 5 * 60 * 1000, // 5 minutes
  });
};

export const useDoctorDashboard = () => {
  return useQuery({
    queryKey: ['doctorDashboard'],
    queryFn: () => DashboardService.getDoctorDashboard(),
    staleTime: 5 * 60 * 1000, // 5 minutes
  });
};

export const useCaregiverDashboard = () => {
  return useQuery({
    queryKey: ['caregiverDashboard'],
    queryFn: () => DashboardService.getCaregiverDashboard(),
    staleTime: 5 * 60 * 1000, // 5 minutes
  });
};

export const useTodaySchedule = () => {
  return useQuery({
    queryKey: ['todaySchedule'],
    queryFn: () => DashboardService.getTodaySchedule(),
    staleTime: 2 * 60 * 1000, // 2 minutes
  });
};

export const useCareTeam = () => {
  return useQuery({
    queryKey: ['careTeam'],
    queryFn: () => DashboardService.getCareTeam(),
    staleTime: 10 * 60 * 1000, // 10 minutes
  });
};
