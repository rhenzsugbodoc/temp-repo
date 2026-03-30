import { Tabs } from 'expo-router';
import React from 'react';

import { HapticTab } from '@/components/haptic-tab';
import { Colors } from '@/constants/theme';
import { useColorScheme } from '@/hooks/use-color-scheme';
import { Ionicons } from '@expo/vector-icons';

export default function PatientTabLayout() {
  const colorScheme = useColorScheme();

  return (
    <Tabs
      screenOptions={{
        tabBarActiveTintColor: Colors[colorScheme ?? 'light'].tint,
        headerShown: false,
        tabBarButton: HapticTab,
      }}>
    <Tabs.Screen
        name="dashboard/index"
        options={{
          title: 'Home',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="home-outline" size={size} color="#8e98db" />
          ),
        }}
      />
      <Tabs.Screen
        name="service_requests"
        options={{
          title: 'Service Requests',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="hand-left-outline" size={size} color="#8e98db" />
          ),
        }}
      />


      {/* <Tabs.Screen name="service_requests/facilityDetails" options={{ href: null }} />
      <Tabs.Screen name="request_service/payment" options={{ href: null }} /> */}

      <Tabs.Screen name="dashboard/patient_worklist" options={{ href: null }} />
      <Tabs.Screen name="dashboard/profile/index" options={{ href: null }} />
      <Tabs.Screen name="dashboard/profile/facility_settings" options={{ href: null }} /> 
      <Tabs.Screen name="dashboard/profile/profile_page" options={{ href: null }} />
      <Tabs.Screen name="dashboard/services/index" options={{ href: null }} />
      <Tabs.Screen name="notifications" options={{ href: null }} />

      <Tabs.Screen name="dashboard/staff_list" options={{ href: null }} />
      <Tabs.Screen name="(Notifications)" options={{ href: null }} />
      {/* <Tabs.Screen name="dashboard/profile/index" options={{ href: null }} /> */}

    </Tabs>
  );
}
