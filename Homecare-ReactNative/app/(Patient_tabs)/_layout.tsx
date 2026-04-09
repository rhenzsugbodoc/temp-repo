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
        tabBarActiveTintColor: Colors[colorScheme ?? 'dark'].tint,
        headerShown: false,
        tabBarButton: HapticTab,
      }}>
    <Tabs.Screen
        name="dashboard/index"
        options={{
          title: 'Home',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="home-outline" size={size} color="#4454c3" />
          ),
        }}
      />
      <Tabs.Screen
        name="care_plan"
        options={{
          title: 'Care Plan',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="hand-left-outline" size={size} color="#4454c3" />
          ),
        }}
      />
      <Tabs.Screen
        name="request_service"
        options={{
          title: 'Request',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="add-circle-outline" size={size} color="#4454c3" />
          ),
        }}
      />
      <Tabs.Screen
        name="prescription"
        options={{
          title: 'Prescription',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="cart-outline" size={size} color="#4454c3" />
          ),
        }}
      />
      <Tabs.Screen
        name="profile/index"
        options={{
          href: null, // Hide from tab bar
        }}
      />
      {/* Hide nested request_service routes */}
      <Tabs.Screen name="request_service/facilityDetails" options={{ href: null }} />
      <Tabs.Screen name="request_service/payment" options={{ href: null }} />
      <Tabs.Screen name="request_service/confirm" options={{ href: null }} />
      <Tabs.Screen name="request_service/requesting_service" options={{ href: null }} />
      <Tabs.Screen name="request_service/_layout" options={{ href: null }} />
      {/* Hide nested care_plan routes */}
      <Tabs.Screen name="care_plan/interventions" options={{ href: null }} />
      <Tabs.Screen name="care_plan/one-time" options={{ href: null }} />
      <Tabs.Screen name="care_plan/routine" options={{ href: null }} />
      <Tabs.Screen name="care_plan/_layout" options={{ href: null }} />

      <Tabs.Screen name="dashboard/calendar/index" options={{ href: null }} />
      <Tabs.Screen name="dashboard/calendar/calendarMonth" options={{ href: null }} />
      <Tabs.Screen name="dashboard/care_team/index" options={{ href: null }} />
      <Tabs.Screen name="dashboard/care_team/care_member" options={{ href: null }} />

      <Tabs.Screen name="notifications/index" options={{ href: null }} />
      {/* <Tabs.Screen name="dashboard/care_team" options={{ href: null }} /> */}
    </Tabs>
  );
}
