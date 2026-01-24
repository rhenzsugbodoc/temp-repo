// app/login.tsx
import { View, Text, TextInput, TouchableOpacity, Alert, ActivityIndicator, StyleSheet } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useState, useEffect } from 'react';
import { useAuth } from '../src/context/AuthContext';
import { useLoginMutation } from '../src/options/authenticationQueryOptions';
import { getUserData } from '../src/options/tokenHandler';
import { User } from '../src/context/AuthContext';

export default function Login() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const router = useRouter();
  const loginMutation = useLoginMutation();

//   useEffect(() => {
//     const checkExistingUser = async () => {
//       const userData = await getUserData<User>();

//       if (userData) {
//         let dashboardRoute: string;

//         if (userData.role === 'Admin') {
//           dashboardRoute = '/(Admin_tabs)/dashboard';
//         } else if (userData.role === 'Pharmacy_Owner') {
//           dashboardRoute = '/(Pharmacy_Owner)/index';
//         } else if (userData.role === 'Patient') {
//           dashboardRoute = '/(Patient_tabs)/dashboard';
//         }

//         router.replace(dashboardRoute);
//       }
//     };

//   checkExistingUser();
// }, []);

  const handleLogin = async () => {
    // Basic validation
    if (!email || !password) {
      Alert.alert('Validation Error', 'Please enter both email and password');
      return;
    }

    // Simple email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      Alert.alert('Validation Error', 'Please enter a valid email address');
      return;
    }

    
    try {
      console.log('Login mutation started');
      const response = await loginMutation.mutateAsync({  //saves token and user data in secure store
        email_address: email.trim(), 
        password 
      });
      
      console.log('Login mutation response:', response);
      
      if (response.success && response.data) {
        console.log('Login successful, getting user data');
        
        const userData = await getUserData<User>();
        console.log('User data retrieved:', userData);

        let dashboardRoute: string = '/(Patient_tabs)/dashboard'; // Default route

        if (userData?.role === 'Pharmacy_Owner') {
          dashboardRoute = '/(Pharmacy_Owner)/index';
        } else if (userData?.role === 'Admin'){
          dashboardRoute = '/(Admin_tabs)/dashboard';
        } else if (userData?.role === 'Patient'){
          dashboardRoute = '/(Patient_tabs)/dashboard';
        }
         else if (userData?.role === 'Driver'){
          dashboardRoute = '/(Driver_tabs)/index';
        }
        
        console.log('Navigating to:', dashboardRoute);

        Alert.alert(
          'Success',
          'Login successful!',
          [
            {
              text: 'OK',
              onPress: () => {
                router.replace(dashboardRoute);
              },
            },
          ]
        );
      } else {
        throw new Error(response.message || 'Login failed');
      }
    } catch (error: any) {
      console.error('Login failed:', error);
      
      let errorMessage = 'Login failed. Please try again.';
      
      if (error.message) {
        errorMessage = error.message;
      }
      
      Alert.alert('Login Failed', errorMessage);
    }
  };

  return (
    <SafeAreaView style={styles.container} edges={['top']}>
      <View style={styles.content}>
        <View style={styles.header}>
          <Text style={styles.title}>Welcome Back</Text>
          <Text style={styles.subtitle}>Sign in to continue</Text>
        </View>

        <View style={styles.form}>
          <TextInput
            placeholder="Email Address"
            placeholderTextColor="#888"
            value={email}
            onChangeText={setEmail}
            keyboardType="email-address"
            autoCapitalize="none"
            autoComplete="email"
            editable={!loginMutation.isPending}
            style={styles.input}
          />
          
          <TextInput
            placeholder="Password"
            placeholderTextColor="#888"
            secureTextEntry
            value={password}
            onChangeText={setPassword}
            autoCapitalize="none"
            editable={!loginMutation.isPending}
            style={styles.input}
          />

          <TouchableOpacity 
            style={[styles.loginButton, loginMutation.isPending && styles.buttonDisabled]} 
            onPress={handleLogin}
            disabled={loginMutation.isPending}
          >
            {loginMutation.isPending ? (
              <ActivityIndicator color="#fff" />
            ) : (
              <Text style={styles.loginButtonText}>Sign In</Text>
            )}
          </TouchableOpacity>

          <TouchableOpacity style={styles.forgotPassword}>
            <Text style={styles.forgotPasswordText}>Forgot Password?</Text>
          </TouchableOpacity>
        </View>

        <View style={styles.footer}>
          <Text style={styles.signupText}>
            Don't have an account?{' '}
            <Text 
              style={styles.signupLink} 
              onPress={() => !loginMutation.isPending && router.push('/register')}
            >
              Sign Up
            </Text>
          </Text>
          <Text style={styles.signupText}>
            Want to register your facility?{' '}
            <Text 
              style={styles.signupLink} 
              onPress={() => !loginMutation.isPending && router.push('/register_facility/register1')}
            >
              Register Facility
            </Text>
          </Text>
        </View>
      </View>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#ffffff',
  },
  content: {
    flex: 1,
    justifyContent: 'center',
    paddingHorizontal: 30,
  },
  header: {
    marginBottom: 40,
    alignItems: 'center',
  },
  title: {
    fontSize: 32,
    fontWeight: 'bold',
    color: '#333',
    marginBottom: 8,
  },
  subtitle: {
    fontSize: 16,
    color: '#666',
  },
  form: {
    marginBottom: 30,
  },
  input: {
    backgroundColor: '#f5f5f5',
    borderRadius: 12,
    padding: 16,
    fontSize: 16,
    marginBottom: 16,
    borderWidth: 1,
    borderColor: '#e0e0e0',
    color: '#333',
  },
  loginButton: {
    backgroundColor: '#007AFF',
    borderRadius: 12,
    padding: 16,
    alignItems: 'center',
    marginTop: 8,
  },
  buttonDisabled: {
    opacity: 0.7,
  },
  loginButtonText: {
    color: '#fff',
    fontSize: 18,
    fontWeight: '600',
  },
  forgotPassword: {
    alignItems: 'center',
    marginTop: 16,
  },
  forgotPasswordText: {
    color: '#007AFF',
    fontSize: 14,
  },
  footer: {
    alignItems: 'center',
  },
  signupText: {
    fontSize: 14,
    color: '#666',
  },
  signupLink: {
    color: '#007AFF',
    fontWeight: '600',
  },
  testButton: {
    position: 'absolute',
    bottom: 20,
    right: 20,
    backgroundColor: '#34C759',
    paddingHorizontal: 16,
    paddingVertical: 8,
    borderRadius: 20,
  },
  testButtonText: {
    color: '#fff',
    fontSize: 12,
    fontWeight: '600',
  },
});