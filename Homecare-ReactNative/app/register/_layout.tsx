import { DarkTheme, DefaultTheme, ThemeProvider } from '@react-navigation/native';
import { Stack } from 'expo-router';
import * as SplashScreen from 'expo-splash-screen';
import { StatusBar } from 'expo-status-bar';
import 'react-native-reanimated';

import { useColorScheme } from '../../hooks/use-color-scheme';
import { RegisterProvider } from '../../src/context/RegisterPatientContext';
SplashScreen.preventAutoHideAsync();

export default function RegisterLayout() {
  const colorScheme = useColorScheme();


  return (
    <ThemeProvider value={colorScheme === 'dark' ? DarkTheme : DefaultTheme}>
      <RegisterProvider>
        <Stack
          initialRouteName="register1" 
          screenOptions={{
            headerShown: false,
          }}
        >
          <Stack.Screen name="register1" />
          <Stack.Screen name="register2" />
          <Stack.Screen name="register3" />
        </Stack>
        {/* native auto handles route pages within directory */}
        <StatusBar style="auto" />
      </RegisterProvider>
    </ThemeProvider>
  );
}