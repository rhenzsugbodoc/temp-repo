import api from './api';

// Medicine Interface
export interface Medicine {
  medicine_id: string;
  name: string;
  medication_type: 'otc' | 'prescription';
  description: string;
}

// Inventory Item Interface
export interface InventoryItem {
  pharmacy_id: string;
  medicine_id: string;
  stock_quantity: string;
  price: string;
  created_at: string;
  updated_at: string;
  medicine_name: string;
  medication_type: 'otc' | 'prescription';
  description: string;
  pharmacy_name: string;
}

// Request Interfaces
export interface CreateInventoryRequest {
  medicine_id: number;
  stock_quantity: number;
  price: number;
  low_inventory: number
}

export interface UpdateInventoryRequest {
  stock_quantity?: number | string;
  price?: number | string;
}

// Response Interfaces
export interface MedicinesResponse {
  success: boolean;
  count: number;
  data: Medicine[];
}

export interface InventoryResponse {
  success: boolean;
  count: number;
  data: InventoryItem[];
}

export interface CreateInventoryResponse {
  success: boolean;
  message: string;
  data: {
    pharmacy_id: number;
    medicine_id: number;
  };
}

export interface UpdateInventoryResponse {
  success: boolean;
  message: string;
}

class PrescriptionService {
  // Get all available medicines
  async getMedicines(): Promise<MedicinesResponse> {
    try {
      const response = await api.get('/api/medicines');
      return response.data;
    } catch (error: any) {
      console.error('Get medicines error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  // Get pharmacy inventory for logged-in user
  async getInventory(): Promise<InventoryResponse> {
    try {
      const response = await api.get('/api/pharmacies/inventory');
      return response.data;
    } catch (error: any) {
      console.error('Get inventory error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  // Create inventory entry
  async createInventory(inventoryData: CreateInventoryRequest): Promise<CreateInventoryResponse> {
    try {
      const response = await api.post('/api/pharmacies/inventory', inventoryData);
      return response.data;
    } catch (error: any) {
      console.error('Create inventory error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  // Update inventory entry
  async updateInventory(medicineId: string | number, updateData: UpdateInventoryRequest): Promise<UpdateInventoryResponse> {
    try {
      const response = await api.put(`/api/pharmacies/inventory/${medicineId}`, updateData);
      return response.data;
    } catch (error: any) {
      console.error('Update inventory error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }
}

export default new PrescriptionService();