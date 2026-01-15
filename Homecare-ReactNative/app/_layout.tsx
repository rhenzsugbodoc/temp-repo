import React, { useEffect } from 'react';
import { DarkTheme, DefaultTheme, ThemeProvider } from '@react-navigation/native';
import { Stack } from 'expo-router';
import * as SplashScreen from 'expo-splash-screen';
import { StatusBar } from 'expo-status-bar';
import 'react-native-reanimated';
import { AuthProvider } from '@/src/context/AuthContext';

import { useColorScheme } from '../hooks/use-color-scheme';
import { QueryClient, QueryClientProvider } from '@tanstack/react-query';
import { GluestackUIProvider } from '@/components/ui/gluestack-ui-provider';
import '@/global.css';

// Configure QueryClient with better defaults
const queryClient = new QueryClient({
  defaultOptions: {
    queries: {
      retry: 2, // Retry failed requests twice
      staleTime: 5 * 60 * 1000, // Data stays fresh for 5 minutes
      gcTime: 10 * 60 * 1000, // Cache persists for 10 minutes
      refetchOnWindowFocus: false, // Don't refetch on app focus (mobile)
    },
    mutations: {
      retry: 1, // Retry failed mutations once
    },
  },
});

export default function RootLayout() {
  const colorScheme = useColorScheme();
  
  useEffect(() => {
    async function hideSplash() {
      await SplashScreen.hideAsync(); 
    }
    hideSplash();
  }, []);

  return (
    <GluestackUIProvider mode="light">
      <QueryClientProvider client={queryClient}>
        <AuthProvider>
          <Stack initialRouteName="login" screenOptions={{ headerShown: false }}/>
          <StatusBar style="auto" />
        </AuthProvider>
      </QueryClientProvider>
    </GluestackUIProvider>
  );
}
