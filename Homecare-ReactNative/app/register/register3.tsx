import { View, Text, TextInput, TouchableOpacity, Alert, ActivityIndicator, FlatList, Animated, useWindowDimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useEffect, useRef } from 'react';
import { useRegister } from '../../src/context/RegisterContext';
import { registerCommonStyles } from '../../assets/styles/patient/auth/registerStyles';
import {addPatientStyles} from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';

export default function Register() {
  const { user, setUser, registerUser, isRegistering } = useRegister();
  const { width: screenWidth } = useWindowDimensions();
  const formWidth = screenWidth * 0.7;
  const router = useRouter();

  const formFields = [
    { id: '1', key: 'medical_conditions', label: 'Medical Conditions (comma-separated)' },
    { id: '2', key: 'allergies', label: 'Allergies (comma-separated)' },
    { id: '3', key: 'current_medications', label: 'Current Medications (comma-separated)' },
  ];

  const animatedValues = useRef(
    formFields.map(() => new Animated.Value(0))
  ).current;

  useEffect(() => {
    const animations = animatedValues.map((anim, index) =>
      Animated.timing(anim, {
        toValue: 1,
        duration: 400,
        delay: index * (300 / formFields.length),
        useNativeDriver: true,
      })
    );
    Animated.stagger(100, animations).start();
  }, []);

  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,
    }));
  };
  
  useEffect(() => {
    if (user.role && user.role !== 'Patient') {
      handleRegister();
    }
  }, []);
  
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

    // Prepare user data - convert arrays to strings
    const userData = {
      ...user,
      medical_conditions: Array.isArray(user.medical_conditions) 
        ? user.medical_conditions.join(', ') 
        : user.medical_conditions || '',
      allergies: Array.isArray(user.allergies) 
        ? user.allergies.join(', ') 
        : user.allergies || '',
      current_medications: Array.isArray(user.current_medications) 
        ? user.current_medications.join(', ') 
        : user.current_medications || '',
    };

    // Register user
    try {
      const response = await registerUser(userData as any);
      console.log('Registration successful:', response);
      
      // Determine next route based on user role
      let nextRoute = '/login';
      
      if (user.role === 'Admin') {
        nextRoute = '/register_facility/register1';
      } else if (user.role === 'Pharmacy_Owner') {
        nextRoute = '/register_pharmacy/register1';
      }
      
      router.replace(nextRoute);
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
        <Text style={registerCommonStyles.headerText1}>{user.role} Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Medical Information</Text>
      </View>

      <View style={[registerCommonStyles.form, { width: formWidth, alignSelf: 'center' }]}>     
        <FlatList
          data={formFields}
          scrollEnabled={false}
          keyExtractor={(item) => item.id}
          renderItem={({ item, index }) => {
            const opacity = animatedValues[index];
            const translateY = animatedValues[index].interpolate({
              inputRange: [0, 1],
              outputRange: [20, 0],
            });

            return (
              <Animated.View 
                style={[
                  addPatientStyles.descriptionContainer,
                  { opacity, transform: [{ translateY }] }
                ]}
              >
                <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                <TextInput
                  placeholderTextColor="#888"
                  value={user[item.key as keyof typeof user] ? (user[item.key as keyof typeof user] as string[]).join(', ') : ''}
                  onChangeText={value => handleChange(item.key as keyof typeof user, value.split(',').map(s => s.trim()).filter(Boolean))}
                  style={[addPatientStyles.descriptionInput, {height: 60, width: formWidth, alignSelf: 'center'}]}
                  multiline
                />
              </Animated.View>
            );
          }}
        />

        <TouchableOpacity 
          style={[registerCommonStyles.signupButton, { width: formWidth, alignSelf: 'center' }, isRegistering && { opacity: 0.7 }]} 
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