import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import prescriptionService, {
  CreateInventoryRequest,
  UpdateInventoryRequest,
} from '../services/prescriptionService';

/**
 * Get all available medicines
 */
export const useGetMedicines = () => {
  return useQuery({
    queryKey: ['medicines'],
    queryFn: () => prescriptionService.getMedicines(),
  });
};

/**
 * Get pharmacy inventory for logged-in user
 */
export const useGetInventory = () => {
  return useQuery({
    queryKey: ['pharmacy-inventory'],
    queryFn: () => prescriptionService.getInventory(),
  });
};

/**
 * Create inventory entry mutation
 */
export const useCreateInventoryMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (inventoryData: CreateInventoryRequest) => {
      return prescriptionService.createInventory(inventoryData);
    },
    onSuccess: () => {
      // Invalidate and refetch inventory
      queryClient.invalidateQueries({ queryKey: ['pharmacy-inventory'] });
    },
  });
};

/**
 * Update inventory entry mutation
 */
export const useUpdateInventoryMutation = () => {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ medicineId, updateData }: { medicineId: string | number; updateData: UpdateInventoryRequest }) => {
      return prescriptionService.updateInventory(medicineId, updateData);
    },
    onSuccess: () => {
      // Invalidate and refetch inventory
      queryClient.invalidateQueries({ queryKey: ['pharmacy-inventory'] });
    },
  });
};
