import React from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, ActivityIndicator, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import { useAuth } from '@/src/context/AuthContext';
import { usePatientDashboard, useTodaySchedule, useCareTeam } from '@/src/options/dashboardQueryOptions';
import { useLogoutMutation } from '@/src/options/authenticationQueryOptions';
import {getUserData} from '@/src/options/tokenHandler';
import { User} from '@/src/context/AuthContext';
import { useState, useEffect } from 'react';
import {useGetMedicines, useGetInventory, useUpdateInventoryMutation, useCreateInventoryMutation} from '@/src/options/PrescriptionQueryOptions';
export default function PharmacyDashboard() {
  const router = useRouter();

  const { data: medicinesData, isLoading: medicinesLoading, isRefetching: medicinesRefreshing } = useGetMedicines();
  const { data: inventoryData, isLoading: inventoryLoading, isRefetching: inventoryRefreshing } = useGetInventory();

  const createInventoryMutation = useCreateInventoryMutation();
  const updateInventoryMutation = useUpdateInventoryMutation();
  const logoutMutation = useLogoutMutation();

  const handleLogout = async () => {
    try {
      await logoutMutation.mutateAsync();
      router.replace('/login');
    } catch (error) {
      console.error('Logout failed:', error);
      // Still navigate to login even if API call fails
      router.replace('/login');
    }
  };

  const handleCreateInventory = async (medicineId: string) => {
    try {
      await createInventoryMutation.mutateAsync({
        medicine_id: medicineId,
        stock_quantity: 0,
        low_inventory: 10,
        price: 100
      });
    } catch (error) {
      console.error('Failed to create inventory:', error);
    }
  };

  const handleUpdateInventory = async (medicineId: string) => {
    try {
      await updateInventoryMutation.mutateAsync({
        medicineId,
        updateData: {
          stock_quantity: 0,
          low_inventory: 10,
          price: 100
        },
      });
    } catch (error) {
      console.error('Failed to update inventory:', error);
    }
  };

  

  return (
    <SafeAreaView style={styles.container} edges={['top']}>
      <ScrollView>
        {medicinesLoading ? (
          <ActivityIndicator size="large" color="#007AFF" style={{ marginTop: 20 }} />
        ) : (
          medicinesData?.data?.map(medicine => {
            const existsInInventory = inventoryData?.data?.some(
              (item) => item.medicine_id === medicine.medicine_id
            );

            return (
              <View key={medicine.medicine_id} style={styles.card}>
                <Text style={{ fontSize: 16, fontWeight: 'bold' }}>{medicine.name}</Text>
                <Text style={{ marginTop: 5 }}>Description: {medicine.description}</Text>
                <Text style={{ marginTop: 5 }}>Type: {medicine.medication_type}</Text>
                
                {existsInInventory ? (
                  <Pressable
                    style={styles.button}
                    onPress={() => handleUpdateInventory(medicine.medicine_id)}
                    disabled={updateInventoryMutation.isPending}
                  >
                    <Text style={styles.buttonText}>
                      {updateInventoryMutation.isPending ? 'Updating...' : 'Update Inventory Details'}
                    </Text>
                  </Pressable>
                ) : (
                  <Pressable
                    style={[styles.button, styles.createButton]}
                    onPress={() => handleCreateInventory(medicine.medicine_id)}
                    disabled={createInventoryMutation.isPending}
                  >
                    <Text style={styles.buttonText}>
                      {createInventoryMutation.isPending ? 'Creating...' : 'Create Inventory Item'}
                    </Text>
                  </Pressable>
                )}
              </View>
            );
          })
        )}
      </ScrollView>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f5f7fa',
  },

  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    padding: 20,
    marginHorizontal: 15,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },
  header: {
    height: 60,
    alignItems: 'center',
    flexDirection: 'row',
    marginVertical: 10,
    gap: 10,
  },
  button: {
    backgroundColor: '#007AFF',
    borderRadius: 8,
    padding: 12,
    marginTop: 15,
    alignItems: 'center',
  },
  createButton: {
    backgroundColor: '#34C759',
  },
  buttonText: {
    color: 'white',
    fontSize: 14,
    fontWeight: '600',
  },
});