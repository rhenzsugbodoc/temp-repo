


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity, FlatList, Animated, useWindowDimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';
import {addPatientStyles} from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';
import { useEffect, useRef } from 'react';

export default function Register() {
  const {user ,setUser} = useRegister();
  const { width: screenWidth } = useWindowDimensions();
  const formWidth = screenWidth * 0.85;

  const formFields = [
    { id: '1', key: 'first_name', label: 'First Name', secure: false },
    { id: '2', key: 'middle_name', label: 'Middle Name', secure: false },
    { id: '3', key: 'last_name', label: 'Last Name', secure: false },
    { id: '4', key: 'password', label: 'Password', secure: true },
    { id: '5', key: 'phone_number', label: 'Phone Number', secure: false },
    { id: '6', key: 'email_address', label: 'Email Address', secure: false },
   
  ];

  const animatedValues = useRef(
    formFields.map(() => new Animated.Value(0))
  ).current;

  useEffect(() => {
    const animations = animatedValues.map((anim, index) =>
      Animated.timing(anim, {
        toValue: 1,
        duration: 400,
        delay: index * (300 / formFields.length), // Stagger over 1 second
        useNativeDriver: true,
      })
    );
    Animated.stagger(100, animations).start();
  }, []);


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
        <Text style={registerCommonStyles.headerText1}>{user.role} Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Basic Information</Text>

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
                  {
                    opacity,
                    transform: [{ translateY }],
                    
                  }
                ]}
              >
                <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                <TextInput
                  placeholderTextColor="#888"
                  value={user[item.key as keyof typeof user] as string || ''}
                  onChangeText={value => handleChange(item.key as keyof typeof user, value)}
                  style={[addPatientStyles.descriptionInput, {height: 40, width: '100%',alignSelf: 'center'}]}
                  secureTextEntry={item.secure}
                />
              </Animated.View>
            );
          }}
        />

        <TouchableOpacity style={[registerCommonStyles.signupButton, {marginHorizontal: 0, width: formWidth, alignSelf: 'center'}]} onPress={handleRegister}>
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

