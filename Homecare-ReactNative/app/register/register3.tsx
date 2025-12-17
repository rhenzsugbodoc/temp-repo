import { View, Text, TextInput, TouchableOpacity, Alert, ActivityIndicator } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext
import { registerCommonStyles } from '../../assets/styles/patient/auth/registerStyles';

export default function Register() {
  const { user, setUser, registerUser, isRegistering } = useRegister();
  const router = useRouter();

  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,
    }));
  };
  
  const handleRegister = async () => {
    // Validation
    if (!user.email_address || !user.first_name || !user.last_name || !user.password) {
      Alert.alert('Validation Error', 'Please fill out all required fields (First Name, Last Name, Email, Password)');
      return;
    }

    if (!user.date_of_birth) {
      Alert.alert('Validation Error', 'Please select your date of birth');
      return;
    }

    if (!user.gender) {
      Alert.alert('Validation Error', 'Please select your gender');
      return;
    }

    // Register user
    try {
      const response = await registerUser(user as any);
      console.log('Registration successful:', response);
      
      // Determine next route based on user role
      let nextRoute = '/login';
      let successMessage = 'Registration successful! Please log in.';
      
      if (user.role === 'Admin') {
        nextRoute = '/register_facility/register1';
        successMessage = 'User registered! Now register your facility.';
      } else if (user.role === 'Pharmacy_Owner') {
        nextRoute = '/register_pharmacy/register1';
        successMessage = 'User registered! Now register your pharmacy.';
      }
      
      Alert.alert(
        'Success',
        successMessage,
        [
          {
            text: 'OK',
            onPress: () => router.replace(nextRoute),
          },
        ]
      );
    } catch (error: any) {
      console.error('Registration failed:', error);
      
      let errorMessage = 'Registration failed. Please try again.';
      
      if (error.message) {
        errorMessage = error.message;
      }
      
      if (error.errors) {
        // Handle validation errors from backend
        const errorFields = Object.values(error.errors).join('\n');
        errorMessage = `Validation errors:\n${errorFields}`;
      }
      
      Alert.alert('Registration Failed', errorMessage, [
        {
          text: 'OK',
          onPress: () => router.replace('/register/register1'),
        },
      ]);
    }
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Patient Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Medical Information</Text>
      </View>

      <View style={registerCommonStyles.form}>     
        <TextInput
          placeholder="Medical Conditions (comma-separated)"
          placeholderTextColor="#888"
          value={user.medical_conditions ? user.medical_conditions.join(', ') : ''}
          onChangeText={value => handleChange('medical_conditions', value.split(',').map(s => s.trim()).filter(Boolean))}
          style={registerCommonStyles.formTextInput}
          multiline
        />
        <TextInput
          placeholder="Allergies (comma-separated)"
          placeholderTextColor="#888"
          value={user.allergies ? user.allergies.join(', ') : ''}
          onChangeText={value => handleChange('allergies', value.split(',').map(s => s.trim()).filter(Boolean))}
          style={registerCommonStyles.formTextInput}
          multiline
        />
        <TextInput
          placeholder="Current Medications (comma-separated)"
          placeholderTextColor="#888"
          value={user.current_medications ? user.current_medications.join(', ') : ''}
          onChangeText={value => handleChange('current_medications', value.split(',').map(s => s.trim()).filter(Boolean))}
          style={registerCommonStyles.formTextInput}
          multiline
        />

        <TouchableOpacity 
          style={[registerCommonStyles.signupButton, isRegistering && { opacity: 0.7 }]} 
          onPress={handleRegister}
          disabled={isRegistering}
        >
          {isRegistering ? (
            <ActivityIndicator color="#fff" />
          ) : (
            <Text style={registerCommonStyles.signupButtonText}>Sign Up</Text>
          )}
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