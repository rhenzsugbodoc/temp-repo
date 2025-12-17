


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useState } from 'react';
import DateTimePicker from '@react-native-community/datetimepicker';
import { useRegister } from '../../src/context/RegisterContext';
import { registerCommonStyles } from '../../assets/styles/patient/auth/registerStyles';

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
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Patient Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Basic Information</Text>
      </View>

      <View style={registerCommonStyles.form}>     
  
        <TouchableOpacity
          style={[registerCommonStyles.formTextInput, { justifyContent: 'center' }]}
          onPress={() => setShowDatePicker(true)}
        >
          <Text style={{ color: user.date_of_birth ? 'white' : '#888' }}>
            {user.date_of_birth ? user.date_of_birth : 'Select Date of Birth'}
          </Text>
        </TouchableOpacity>
        {showDatePicker && (
          <DateTimePicker
            value={user.date_of_birth ? new Date(user.date_of_birth) : new Date(2000, 0, 1)}
            mode="date"
            display="default"
            onChange={(_, selectedDate) => {
              setShowDatePicker(false);
              if (selectedDate) {
                // Format as YYYY-MM-DD for the API
                const formattedDate = selectedDate.toISOString().split('T')[0];
                handleChange('date_of_birth', formattedDate);
              }
            }}
            maximumDate={new Date()}
          />
        )}

        
        <View style={registerCommonStyles.genderRow}>
          <TouchableOpacity
            style={[registerCommonStyles.genderButton, user.gender === 'Male' && registerCommonStyles.genderSelected]}
            onPress={() => setUser(prev => ({
              ...prev,
              gender: 'Male'
            }))}
          >
            <Text style={registerCommonStyles.genderText}>Male</Text>
          </TouchableOpacity>
          <TouchableOpacity
            style={[registerCommonStyles.genderButton, user.gender === 'Female' && registerCommonStyles.genderSelected]}
            onPress={() => setUser(prev => ({
              ...prev,
              gender: 'Female'
            }))}
          >
            <Text style={registerCommonStyles.genderText}>Female</Text>
          </TouchableOpacity>
        </View>

         
        <TextInput
            placeholder="Home Address"
            placeholderTextColor="#888"
            value={user.home_address || ''}
            onChangeText={value => handleChange('home_address', value)}
            style={registerCommonStyles.formTextInput}
        />
        <TextInput
            placeholder="Emergency Contact"
            placeholderTextColor="#888"
            value={user.emergency_contact || ''}
            onChangeText={value => handleChange('emergency_contact', value)}
            style={registerCommonStyles.formTextInput}
        />
       
        <TouchableOpacity style={registerCommonStyles.signupButton} onPress={handleRegister}>
          <Text style={registerCommonStyles.signupButtonText}>Next</Text>
        </TouchableOpacity>
      </View>

     
      <View style={registerCommonStyles.altLogin}>
        <Text style={registerCommonStyles.loginText}>
          Already have an account?{' '}
          <Text style={registerCommonStyles.loginLink} onPress={() => router.push('/login')}>
            Sign In
          </Text>
        </Text>
      </View>
    </SafeAreaView>
  );
}

