


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useState } from 'react';
import DateTimePicker from '@react-native-community/datetimepicker';
import { useRegister } from '../../context/RegisterPatientContext';


export default function Register() {
  const {user ,setUser} = useRegister();
  const [showDatePicker, setShowDatePicker] = useState(false);
  const router = useRouter();
  
  const handleRegister = () => {
    
    router.replace('/register/register3'); //automatically moves to tabs logic change in index prolly
  };

  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,

    }))
  }
  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={styles.topContent}>
        <Text style={styles.logoTitle}>Patient Registration</Text>
        <Text style={{color: 'white', fontSize: 24}}>Basic Information</Text>
      </View>

      <View style={styles.form}>     
       <Text style={styles.label}>Date of Birth</Text>
        <TouchableOpacity
          style={[styles.input, { justifyContent: 'center' }]}
          onPress={() => setShowDatePicker(true)}
        >
          <Text style={{ color: user.dob ? 'white' : '#888' }}>
            {user.dob ? user.dob.toLocaleDateString() : 'Select Date of Birth'}
          </Text>
        </TouchableOpacity>
        {showDatePicker && (
          <DateTimePicker
            value={user.dob || new Date(2000, 0, 1)}
            mode="date"
            display="default"
            onChange={(_, selectedDate) => {
              setShowDatePicker(false);
              if (selectedDate) handleChange('dob', selectedDate);
            }}
            maximumDate={new Date()}
          />
        )}

        
        <View style={styles.genderRow}>
          <TouchableOpacity
            style={[styles.genderButton, user.gender === 'Male' && styles.genderSelected]}
            onPress={() => setUser(prev => ({
              ...prev,
              gender: 'Male'
            }))}
          >
            <Text style={styles.genderText}>Male</Text>
          </TouchableOpacity>
          <TouchableOpacity
            style={[styles.genderButton, user.gender === 'Female' && styles.genderSelected]}
            onPress={() => setUser(prev => ({
              ...prev,
              gender: 'Female'
            }))}
          >
            <Text style={styles.genderText}>Female</Text>
          </TouchableOpacity>
        </View>

         
        <TextInput
            placeholder="Home Address"
            placeholderTextColor="#888"
            value={user.homeAddress || ''}
            onChangeText={value => handleChange('homeAddress', value)}
            style={styles.input}
        />
        <TextInput
            placeholder="Emergency Contact"
            placeholderTextColor="#888"
            value={user.emergencyContact || ''}
            onChangeText={value => handleChange('emergencyContact', value)}
            style={styles.input}
        />
       
        <TouchableOpacity style={styles.signupButton} onPress={handleRegister}>
          <Text style={styles.signupButtonText}>Next</Text>
        </TouchableOpacity>
      </View>

     
      <View style={styles.altLogin}>
        {/* <Text style={styles.altText}>Sign Up With</Text>
        <View style={styles.socialRow}>
          <TouchableOpacity style={styles.socialButton}>
            <Text style={styles.socialText}>f</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.socialButton}>
            <Text style={styles.socialText}>G</Text>
          </TouchableOpacity>
        </View> */}
        <Text style={styles.loginText}>
          Already have an account?{' '}
          <Text style={styles.loginLink} onPress={() => router.push('/login')}>
            Sign In
          </Text>
        </Text>
      </View>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  topContent: {
    alignItems: 'center',
    marginTop: 40,
  },
  logoImage: {
    width: 80,
    height: 80,
    marginBottom: 10,
    resizeMode: 'contain',
  },
  logoTitle: {
    color: 'white',
    fontSize: 28,
    fontWeight: 'bold',
  },

  form: {
    marginTop: 40,
    paddingHorizontal: 24,
  },
  input: {
    backgroundColor: '#1e1e1e',
    borderRadius: 8,
    paddingHorizontal: 16,
    paddingVertical: 14,
    marginBottom: 16,
    color: 'white',
    fontSize: 16,
  },
  label: {
    color: 'white',
    marginBottom: 8,
    fontSize: 14,
  },
  dobRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
  },
  dobInput: {
    flex: 1,
    marginRight: 8,
  },
  genderRow: {
    flexDirection: 'row',
    justifyContent: 'center',
    marginVertical: 16,
  },
  genderButton: {
    flex: 1,
    paddingVertical: 12,
    marginHorizontal: 8,
    borderRadius: 8,
    backgroundColor: '#1e1e1e',
    alignItems: 'center',
  },
  genderSelected: {
    backgroundColor: '#1DB954',
  },
  genderText: {
    color: 'white',
    fontWeight: 'bold',
  },

  signupButton: {
    backgroundColor: '#1DB954',
    borderRadius: 25,
    paddingVertical: 14,
    alignItems: 'center',
    marginTop: 8,
  },
  signupButtonText: {
    color: 'black',
    fontWeight: 'bold',
    fontSize: 16,
  },

  altLogin: {
    marginTop: 30,
    alignItems: 'center',
  },
  altText: {
    color: '#aaa',
    marginBottom: 12,
  },
  socialRow: {
    flexDirection: 'row',
    gap: 20,
    marginBottom: 20,
  },
  socialButton: {
    width: 40,
    height: 40,
    borderRadius: 20,
    backgroundColor: '#333',
    alignItems: 'center',
    justifyContent: 'center',
  },
  socialText: {
    color: 'white',
    fontSize: 18,
    fontWeight: 'bold',
  },
  loginText: {
    color: 'white',
    marginTop: 8,
  },
  loginLink: {
    color: '#1DB954',
    fontWeight: 'bold',
  },
});