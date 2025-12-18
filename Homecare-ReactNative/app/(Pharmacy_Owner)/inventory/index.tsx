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
import {useGetInventory} from '@/src/options/PrescriptionQueryOptions';
export default function PharmacyDashboard() {
  const router = useRouter();

  const { data: inventoryData, isLoading: inventoryLoading, isRefetching: inventoryRefreshing } = useGetInventory();
  
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

  

  return (
    <SafeAreaView style={styles.container} edges={['top']}>
      <ScrollView>
        <Pressable></Pressable>
        {inventoryLoading ? (
          <ActivityIndicator size="large" color="#007AFF" style={{ marginTop: 20 }} />
        ) : (
          inventoryData?.data?.map(inventory => (
            <View key={inventory.medicine_id} style={styles.card}>
              <Text style={{ fontSize: 16, fontWeight: 'bold' }}>{inventory.medicine_name}</Text>
              <Text style={{ marginTop: 5 }}>Description: {inventory.description}</Text>
              <Text style={{ marginTop: 5 }}>Type: {inventory.medication_type}</Text>
              <Text style={{ marginTop: 5 }}>Price: {inventory.price}</Text>
              
            </View>
          ))
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
});