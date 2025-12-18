import { Tabs } from 'expo-router';
import React from 'react';

import { HapticTab } from '@/components/haptic-tab';
import { Colors } from '@/constants/theme';
import { useColorScheme } from '@/hooks/use-color-scheme';
import { Ionicons } from '@expo/vector-icons';

export default function PharmacyTabLayout() {
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
          title: 'Medicines',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="home-outline" size={size} color="#8e98db" />
          ),
        }}
      />
    

    <Tabs.Screen
        name="inventory/index"
        options={{
          title: 'Inventory',
          tabBarIcon: ({ color, size = 28 }) => (
            <Ionicons name="home-outline" size={size} color="#8e98db" />
          ),
        }}
      />
    </Tabs>
  );
}
