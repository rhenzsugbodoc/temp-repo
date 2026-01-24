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
    </Tabs>
  );
}
