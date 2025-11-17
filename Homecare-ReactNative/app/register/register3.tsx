


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../context/RegisterPatientContext';
import { useAuth, User } from '../../context/AuthContext';
import { registerCommonStyles } from '../../assets/styles/patient/auth/registerStyles';

export default function Register() {
  const {user ,setUser} = useRegister();
  const {addUser} = useAuth();


  const router = useRouter();
  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,
    }))
  }
  const handleRegister = () => {
    if (!user.email_address || !user.first_name || !user.middle_name || 
        !user.last_name || !user.password || !user.dob || !user.gender) {
      alert('Please fill out all required fields');
      return;
    }

    addUser(user as User) //add  validation if all required forms are filled
    router.push('/login'); //automatically moves to tabs logic change in index prolly
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Patient Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Basic Information</Text>
      </View>

      <View style={registerCommonStyles.form}>     
        <TextInput
        placeholder="Medical Conditions"
        placeholderTextColor="#888"
        value={user.medical_conditions ? user.medical_conditions.join(', ') : ''}
        onChangeText={value => handleChange('medical_conditions', value.split(',').map(s => s.trim()).filter(Boolean))}
        style={registerCommonStyles.formTextInput}
        />
        <TextInput
        placeholder="Allergies"
        placeholderTextColor="#888"
        value={user.allergies ? user.allergies.join(', ') : ''}
        onChangeText={value => handleChange('allergies', value.split(',').map(s => s.trim()).filter(Boolean))}
        style={registerCommonStyles.formTextInput}
        />
        <TextInput
        placeholder="Current Medications"
        placeholderTextColor="#888"
        value={user.current_medications ? user.current_medications.join(', ') : ''}
        onChangeText={value => handleChange('current_medications', value.split(',').map(s => s.trim()).filter(Boolean))}
        style={registerCommonStyles.formTextInput}
        />
       

       
        <TouchableOpacity style={registerCommonStyles.signupButton} onPress={handleRegister}>
          <Text style={registerCommonStyles.signupButtonText}>Sign Up</Text>
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

