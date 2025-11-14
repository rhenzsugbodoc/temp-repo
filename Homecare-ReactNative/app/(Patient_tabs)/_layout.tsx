import { Tabs } from 'expo-router';
import React from 'react';

import { HapticTab } from '@/components/haptic-tab';
import { IconSymbol } from '@/components/ui/icon-symbol';
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
        name="index"
        options={{
          title: 'Home',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="home" size={size} color="#8e98db" />
          ),
        }}
      />
      <Tabs.Screen
        name="care_plan"
        options={{
          title: 'Care Plan',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="hand-left-outline" size={size} color="#8e98db" />
          ),
        }}
      />
      <Tabs.Screen
        name="request_service"
        options={{
          title: 'Request',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="add-circle-outline" size={size} color="#8e98db" />
          ),
        }}
      />
      <Tabs.Screen
        name="prescription"
        options={{
          title: 'Prescription',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="cart-outline" size={size} color="#8e98db" />
          ),
        }}
      />
    </Tabs>
  );
}
