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
  low_inventory: string;
  medication_type: 'otc' | 'prescription';
  description: string;
  pharmacy_name: string;
}

// Request Interfaces
export interface CreateInventoryRequest {
  medicine_id: string ;
  stock_quantity: string ;
  price: string ;
  low_inventory: string ;
}

export interface UpdateInventoryRequest {
  stock_quantity?: string ;
  price?: string ;
  low_inventory?: string ;
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

// export interface CreateInventoryResponse {
//   success: boolean;
//   message: string;
//   data: {
//     pharmacy_id: number | string;
//     medicine_id: number | string;
//   };
// }

// export interface UpdateInventoryResponse {
//   success: boolean;
//   message: string;
// }

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
  async createInventory(inventoryData: CreateInventoryRequest): Promise<any> {
    try {
      const response = await api.post('/api/pharmacies/inventory', inventoryData);
      return response.data;
    } catch (error: any) {
      console.error('Create inventory error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }

  // Update inventory entry
  async updateInventory(medicineId: string , updateData: UpdateInventoryRequest): Promise<any> {
    try {
      const response = await api.put(`/api/pharmacies/inventory/${medicineId}`, updateData);
      return response.data;
    } catch (error: any) {
      console.error('Update inventory error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }


  async get_available_orders(): Promise<any> {
    try {
      const response = await api.get('/api/drivers/available-orders');
      return response.data
    } catch (error: any) {
      console.error('Get available orders error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }
  async get_my_orders(): Promise<any> {
    try {
      const response = await api.get('/api/drivers/my-orders');
      return response.data
    } catch (error: any) {
      console.error('Get my orders error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Network error' };
    }
  }
}


export default new PrescriptionService();