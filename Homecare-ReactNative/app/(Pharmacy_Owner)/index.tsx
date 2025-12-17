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
export default function PharmacyDashboard() {
  const router = useRouter();


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

  const items = [
    { id: 1, name: 'heart-outline', label: 'Health Records', route: 'health_records' },
    { id: 2, name: 'time-outline', label: 'Visit History', route: 'visit_history' },
    { id: 3, name: 'people-outline', label: 'Care Providers', route: 'care_team' },
    { id: 4, name: 'document-text-outline', label: 'Clinical Notes', route: 'clinical_notes' },
    { id: 5, name: 'home-outline', label: 'Services', route: 'services' },
    { id: 6, name: 'calendar-outline', label: 'Calendar', route: 'calendar' },
    { id: 7, name: 'folder-outline', label: 'Files', route: 'files' },
    { id: 8, name: 'card-outline', label: 'Bills', route: 'bills' },
  ];


  return (
    <SafeAreaView style={styles.container} edges={['top']}>
      <View style={styles.header}>
        <Image
          source={require('@/assets/images/Homecare_Logo.png')}
          style={{ width: 50, height: 40, marginLeft: 15 }}
          resizeMode="contain"
        />

        <Text style={styles.greetingText}>
          Hello {patientInfo?.first_name || 'User'}!
        </Text>

        <Pressable style={styles.iconCircle} onPress={handleLogout}>
          <Ionicons name="log-out-outline" size={24} color="#4454c3" />
        </Pressable>
      </View>

      <ScrollView>
        
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