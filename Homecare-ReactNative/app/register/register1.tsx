


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';

export default function Register() {
  const {user ,setUser} = useRegister();


  const router = useRouter();
  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,
    }))
  }
  const handleRegister = () => {    
    router.push('/register/register2'); //automatically moves to tabs logic change in index prolly
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Patient Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Basic Information</Text>

      </View>

      <View style={registerCommonStyles.form}>     
          <TextInput
              placeholder="First Name"
              placeholderTextColor="#888"
              value={user.first_name || ''}
              onChangeText={value => handleChange('first_name', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Middle Name"
              placeholderTextColor="#888"
              value={user.middle_name || ''}
              onChangeText={value => handleChange('middle_name', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Last Name"
              placeholderTextColor="#888"
              value={user.last_name || ''}
              onChangeText={value => handleChange('last_name', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Email Address"
              placeholderTextColor="#888"
              value={user.email_address || ''}
              onChangeText={value => handleChange('email_address', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Phone Number"
              placeholderTextColor="#888"
              value={user.phone_number || ''}
              onChangeText={value => handleChange('phone_number', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Password"
              placeholderTextColor="#888"
              secureTextEntry
              value={user.password || ''}
              onChangeText={value => handleChange('password', value)}
              style={registerCommonStyles.formTextInput}
          />
          {/* <TextInput
              placeholder="Confirm Password"
              placeholderTextColor="#888"
              secureTextEntry
              value={user.confirm_password || ''}
              onChangeText={value => handleChange('confirm_password', value)}
              style={registerCommonStyles.formTextInput}
          /> */}

       
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

