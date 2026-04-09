


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity, FlatList, Animated, Alert, useWindowDimensions, Pressable } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useState, useEffect, useRef } from 'react';
import DateTimePicker from '@react-native-community/datetimepicker';
import * as ImagePicker from 'expo-image-picker';
import { Ionicons } from '@expo/vector-icons';
import { useRegister } from '../../src/context/RegisterContext';
import { registerCommonStyles } from '../../assets/styles/patient/auth/registerStyles';
import {addPatientStyles} from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';

export default function Register() {
  const {user ,setUser} = useRegister();
  const { width: screenWidth } = useWindowDimensions();
  const formWidth = screenWidth * 0.85;
  const uploadBoxMaxSize = screenWidth * 0.15;
  const [showDatePicker, setShowDatePicker] = useState(false);
  const [imageUri, setImageUri] = useState<string | null>(null);
  const router = useRouter();

  const formFields = [
    { id: '1', type: 'date', key: 'date_of_birth', label: 'Date of Birth' },
    { id: '2', type: 'gender', key: 'gender', label: 'Gender' },
    { id: '3', type: 'text', key: 'home_address', label: 'Home Address' },
    { id: '4', type: 'text', key: 'emergency_contact', label: 'Emergency Contact' },
    { id: '5', type: 'image', key: 'user_image_blob', label: 'Profile Image' },
  ];

  const animatedValues = useRef(
    formFields.map(() => new Animated.Value(0))
  ).current;

  const maleScale = useRef(new Animated.Value(1)).current;
  const femaleScale = useRef(new Animated.Value(1)).current;

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

  useEffect(() => {
    Animated.parallel([
      Animated.spring(maleScale, {
        toValue: user.gender === 'Male' ? 1.10 : 0.95,
        useNativeDriver: true,
        friction: 20,
      }),
      Animated.spring(femaleScale, {
        toValue: user.gender === 'Female' ? 1.10 : 0.95,
        useNativeDriver: true,
        friction: 20,
      }),
    ]).start();
  }, [user.gender]);
  
  const handleRegister = () => {
    
    router.replace('/register/register3'); //automatically moves to tabs logic change in index prolly
  };

  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,

    }))
  }

  const pickImage = async () => {
    const { status } = await ImagePicker.requestMediaLibraryPermissionsAsync();
    
    if (status !== 'granted') {
      Alert.alert('Permission Denied', 'Sorry, we need camera roll permissions to upload images.');
      return;
    }
    const result = await ImagePicker.launchImageLibraryAsync({
      mediaTypes: ['images'],
      allowsEditing: true,
      aspect: [1, 1],
      quality: 0.7,
      base64: true,
    });

    if (!result.canceled && result.assets[0]) {
      const uri = result.assets[0].uri;
      const base64 = result.assets[0].base64;
      
      setImageUri(uri);
      
      if (base64) {
        handleChange('user_image_blob', base64);
      } else {
        Alert.alert('Error', 'Failed to process image - no base64 data');
      }
    }
  };
  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
     
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>{user.role} Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Basic Information</Text>
      </View>

      <View style={[registerCommonStyles.form, { flex: 1, width: formWidth, alignSelf: 'center' }]}>     
        <FlatList
          data={formFields}
          scrollEnabled={true}
          style={{ flex: 1 }}
          contentContainerStyle={{ paddingBottom: 16 }}
          ListFooterComponent={
            <>
        <TouchableOpacity style={[registerCommonStyles.signupButton, {marginHorizontal: 0, width: formWidth, alignSelf: 'center'}]} onPress={handleRegister}>
          <Text style={registerCommonStyles.signupButtonText}>Next</Text>
        </TouchableOpacity>

              <View style={registerCommonStyles.altLogin}>
                <Text style={registerCommonStyles.loginText}>
                  Already have an account?{' '}
                  <Text style={registerCommonStyles.loginLink} onPress={() => router.push('/login')}>
                    Sign In
                  </Text>
                </Text>
              </View>
            </>
          }
          keyExtractor={(item) => item.id}
          renderItem={({ item, index }) => {
            const opacity = animatedValues[index];
            const translateY = animatedValues[index].interpolate({
              inputRange: [0, 1],
              outputRange: [20, 0],
            });

            if (item.type === 'date') {
              return (
                <Animated.View 
                  style={[
                    addPatientStyles.descriptionContainer,
                    { opacity, transform: [{ translateY }] }
                  ]}
                >
                  <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                  <TouchableOpacity
                    style={[addPatientStyles.descriptionInput, { height: 45, justifyContent: 'center', width: '100%', alignSelf: 'center' }]}
                    onPress={() => setShowDatePicker(true)}
                  >
                    <Text style={{ paddingHorizontal: 10, color: user.date_of_birth ? '#000' : '#888' }}>
                      {user.date_of_birth ? user.date_of_birth : ''}
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
                          const formattedDate = selectedDate.toISOString().split('T')[0];
                          handleChange('date_of_birth', formattedDate);
                        }
                      }}
                      maximumDate={new Date()}
                    />
                  )}
                </Animated.View>
              );
            }

            if (item.type === 'gender') {
              return (
                <Animated.View 
                  style={[
                    addPatientStyles.descriptionContainer,
                    { opacity, transform: [{ translateY }] }
                  ]}
                >
                  <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                  <View style={registerCommonStyles.genderRow}>
                    <Animated.View style={{ flex: 1, transform: [{ scale: maleScale }] }}>
                      <TouchableOpacity
                        style={[registerCommonStyles.genderButton, user.gender === 'Male' && registerCommonStyles.genderSelected]}
                        onPress={() => setUser(prev => ({ ...prev, gender: 'Male' }))}
                      >
                        <Text style={registerCommonStyles.genderText}>Male</Text>
                      </TouchableOpacity>
                    </Animated.View>
                    <Animated.View style={{ flex: 1, transform: [{ scale: femaleScale }] }}>
                      <TouchableOpacity
                        style={[registerCommonStyles.genderButton, user.gender === 'Female' && registerCommonStyles.genderSelected]}
                        onPress={() => setUser(prev => ({ ...prev, gender: 'Female' }))}
                      >
                        <Text style={registerCommonStyles.genderText}>Female</Text>
                      </TouchableOpacity>
                    </Animated.View>
                  </View>
                </Animated.View>
              );
            }

            if (item.type === 'image') {
              return (
                <Animated.View 
                  style={[
                    addPatientStyles.descriptionContainer,
                    { opacity, transform: [{ translateY }] }
                  ]}
                >
                  <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                  <TouchableOpacity
                    onPress={pickImage}
                    style={[
                      registerCommonStyles.signupButton,
                      {
                        marginVertical: 10,
                        width: '100%',
                        aspectRatio: 1,
                        maxWidth: uploadBoxMaxSize,
                        maxHeight: uploadBoxMaxSize,
                        alignSelf: 'center',
                        backgroundColor: 'transparent',
                        borderWidth: 0,
                        borderRadius: 20,
                        borderColor: '#4b5cbe',
                        justifyContent: 'center',
                        alignItems: 'center',
                        paddingVertical: 0,
                        paddingHorizontal: 0,
                      },
                    ]}
                  >
                    <Text style={{ color: '#000', textAlign: 'center', marginBottom: 8 }}>Upload Image</Text>
                    <Ionicons name="cloud-upload-outline" size={48} color="#4b5cbe" />
                  </TouchableOpacity>
                  {imageUri && (
                    <Image 
                      source={{ uri: imageUri }} 
                      style={{ width: 150, height: 150, borderRadius: 5, alignSelf: 'center', marginTop: 10 }} 
                      resizeMode="cover"
                    />
                  )}
                </Animated.View>
              );
            }

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
                  value={user[item.key as keyof typeof user] as string || ''}
                  onChangeText={value => handleChange(item.key as keyof typeof user, value)}
                  style={[addPatientStyles.descriptionInput, {paddingHorizontal: 10,  width: '100%' , alignSelf: 'center'}]}
                />
              </Animated.View>
            );
          }}
        />
      </View>
    </SafeAreaView>
  );
}

