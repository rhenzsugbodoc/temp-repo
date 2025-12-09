// TestConnectionScreen.tsx
import React, { useState } from 'react';
import { View, Text, TouchableOpacity, ScrollView, StyleSheet, Alert } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import api from '../src/services/api';
import authService from '../src/services/authService';

export default function TestConnectionScreen() {
  const [results, setResults] = useState<string[]>([]);
  const [loading, setLoading] = useState(false);

  const addResult = (message: string) => {
    setResults(prev => [...prev, `[${new Date().toLocaleTimeString()}] ${message}`]);
  };

  const clearResults = () => {
    setResults([]);
  };

  // Test 1: Basic connectivity
  const testBasicConnection = async () => {
    addResult('🔄 Testing basic connection...');
    try {
      const response = await api.get('/auth/get_user');
      addResult('❌ Unexpected success (should be 401)');
    } catch (error: any) {
      if (error.response?.status === 401) {
        addResult('✅ Backend is accessible! (401 expected without token)');
      } else if (error.message === 'Network Error') {
        addResult('❌ Network Error - Check BASE_URL and server');
      } else {
        addResult(`❌ Error: ${error.message}`);
      }
    }
  };

  // Test 2: Test registration
  const testRegistration = async () => {
    addResult('🔄 Testing registration...');
    
    const testUser = {
      first_name: 'Test',
      middle_name: 'User',
      last_name: 'Account',
      email_address: `test${Date.now()}@example.com`, // Unique email
      password: 'password123',
      phone_number: '09123456789',
      date_of_birth: '1990-01-01',
      gender: 'Male',
      home_address: '123 Test St',
      role: 'Patient',
      medical_conditions: 'None',
      allergies: 'None',
      current_medications: 'None',
    };

    try {
      const response = await authService.register(testUser);
      
      if (response.success) {
        addResult('✅ Registration successful!');
        addResult(`📧 Email: ${testUser.email_address}`);
        addResult(`🔑 Token received: ${response.data?.token ? 'Yes' : 'No'}`);
        addResult('💾 Check database for new user');
      } else {
        addResult(`❌ Registration failed: ${response.message}`);
      }
    } catch (error: any) {
      addResult(`❌ Registration error: ${error.message || 'Unknown error'}`);
      if (error.errors) {
        Object.entries(error.errors).forEach(([field, msg]) => {
          addResult(`   • ${field}: ${msg}`);
        });
      }
    }
  };

  // Test 3: Test login with known credentials
  const testLogin = async () => {
    addResult('🔄 Testing login...');
    
    // Prompt for credentials
    Alert.prompt(
      'Test Login',
      'Enter email address:',
      async (email) => {
        Alert.prompt(
          'Test Login',
          'Enter password:',
          async (password) => {
            try {
              const response = await authService.login({
                email_address: email || '',
                password: password || '',
              });
              
              if (response.success) {
                addResult('✅ Login successful!');
                addResult(`👤 User: ${response.data?.user.first_name}`);
                addResult(`🔑 Token stored: Yes`);
              } else {
                addResult(`❌ Login failed: ${response.message}`);
              }
            } catch (error: any) {
              addResult(`❌ Login error: ${error.message || 'Invalid credentials'}`);
            }
          },
          'plain-text'
        );
      },
      'plain-text'
    );
  };

  // Test 4: Test authenticated request
  const testAuthenticatedRequest = async () => {
    addResult('🔄 Testing authenticated request...');
    
    try {
      const token = await authService.getStoredToken();
      
      if (!token) {
        addResult('❌ No token found. Please login first.');
        return;
      }
      
      addResult('🔑 Token found in storage');
      
      const response = await authService.getCurrentUser();
      
      if (response.success) {
        addResult('✅ Authenticated request successful!');
        addResult(`👤 Current user: ${response.data.first_name} ${response.data.last_name}`);
        addResult(`📧 Email: ${response.data.email_address}`);
        addResult(`👥 Role: ${response.data.role}`);
      }
    } catch (error: any) {
      addResult(`❌ Auth request failed: ${error.message || 'Unknown error'}`);
    }
  };

  // Test 5: Run all tests
  const runAllTests = async () => {
    clearResults();
    addResult('🚀 Running all tests...\n');
    
    await testBasicConnection();
    addResult('\n---\n');
    
    await new Promise(resolve => setTimeout(resolve, 1000));
    await testRegistration();
    addResult('\n---\n');
    
    await new Promise(resolve => setTimeout(resolve, 1000));
    await testAuthenticatedRequest();
    
    addResult('\n✨ All tests completed!');
  };

  return (
    <SafeAreaView style={styles.container} edges={['top']}>
      <View style={styles.header}>
        <Text style={styles.title}>API Connection Tests</Text>
        <Text style={styles.subtitle}>Verify backend integration</Text>
      </View>

      <View style={styles.buttonContainer}>
        <TouchableOpacity style={styles.button} onPress={testBasicConnection}>
          <Text style={styles.buttonText}>1. Test Connection</Text>
        </TouchableOpacity>

        <TouchableOpacity style={styles.button} onPress={testRegistration}>
          <Text style={styles.buttonText}>2. Test Registration</Text>
        </TouchableOpacity>

        <TouchableOpacity style={styles.button} onPress={testLogin}>
          <Text style={styles.buttonText}>3. Test Login</Text>
        </TouchableOpacity>

        <TouchableOpacity style={styles.button} onPress={testAuthenticatedRequest}>
          <Text style={styles.buttonText}>4. Test Auth Request</Text>
        </TouchableOpacity>

        <TouchableOpacity style={[styles.button, styles.primaryButton]} onPress={runAllTests}>
          <Text style={styles.buttonText}>🚀 Run All Tests</Text>
        </TouchableOpacity>

        <TouchableOpacity style={[styles.button, styles.clearButton]} onPress={clearResults}>
          <Text style={styles.buttonText}>Clear Results</Text>
        </TouchableOpacity>
      </View>

      <ScrollView style={styles.resultsContainer} contentContainerStyle={styles.resultsContent}>
        {results.length === 0 ? (
          <Text style={styles.emptyText}>No tests run yet. Click a button above to start testing.</Text>
        ) : (
          results.map((result, index) => (
            <Text key={index} style={styles.resultText}>
              {result}
            </Text>
          ))
        )}
      </ScrollView>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f5f5f5',
  },
  header: {
    padding: 20,
    backgroundColor: '#fff',
    borderBottomWidth: 1,
    borderBottomColor: '#e0e0e0',
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    color: '#333',
  },
  subtitle: {
    fontSize: 14,
    color: '#666',
    marginTop: 4,
  },
  buttonContainer: {
    padding: 15,
    backgroundColor: '#fff',
    marginVertical: 10,
    gap: 10,
  },
  button: {
    backgroundColor: '#007AFF',
    padding: 15,
    borderRadius: 8,
    alignItems: 'center',
  },
  primaryButton: {
    backgroundColor: '#34C759',
  },
  clearButton: {
    backgroundColor: '#FF3B30',
  },
  buttonText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: '600',
  },
  resultsContainer: {
    flex: 1,
    backgroundColor: '#1e1e1e',
    margin: 15,
    borderRadius: 8,
  },
  resultsContent: {
    padding: 15,
  },
  resultText: {
    color: '#fff',
    fontFamily: 'monospace',
    fontSize: 12,
    lineHeight: 20,
    marginBottom: 4,
  },
  emptyText: {
    color: '#888',
    textAlign: 'center',
    marginTop: 40,
    fontSize: 14,
  },
});