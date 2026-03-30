import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity, FlatList, Alert, Animated } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useState, useEffect, useRef } from 'react';
import * as ImagePicker from 'expo-image-picker';
import { useRegister } from '../../src/context/RegisterContext';
import {FacilityData} from '../../src/services/registerService';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';
import {Picker} from '@react-native-picker/picker';
import {addPatientStyles} from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';
import {countries} from '@/assets/lists/country_list'
export default function RegisterFacility() {
  const { facility, setFacility, registerFacility } = useRegister();
  const [imageUri, setImageUri] = useState<string | null>(null);
  const [selectedCountry, setSelectedCountry] = useState<string>('');
  const [selectedProvince, setSelectedProvince] = useState<string>('');
  const facilityTypes = ['Hospital', 'Clinic', 'Nursing Home', 'Rehabilitation Center'];
  const router = useRouter();

  // Get provinces for selected country
  const getProvinces = () => {
    const country = countries.find(c => c.name === selectedCountry);
    return country ? country.provinces.map(p => p.name) : [];
  };

  // Get cities for selected province
  const getCities = () => {
    const country = countries.find(c => c.name === selectedCountry);
    if (!country) return [];
    const province = country.provinces.find(p => p.name === selectedProvince);
    return province ? province.cities : [];
  };

  const formFields = [
    { id: '1', type: 'picker', key: 'facility_type', label: 'Facility Type' },
    { id: '2', type: 'image', key: 'facility_image_blob', label: 'Facility Image' },
    { id: '3', type: 'text', key: 'facility_name', label: 'Facility Name' },
    { id: '4', type: 'text', key: 'facility_address', label: 'Facility Address', height: 50 },
    { id: '5', type: 'country-picker', key: 'country', label: 'Country' },
    { id: '6', type: 'province-picker', key: 'province', label: 'Province' },
    { id: '7', type: 'city-picker', key: 'city', label: 'City' },
    { id: '8', type: 'text', key: 'postal_code', label: 'Postal Code' },
    { id: '9', type: 'text', key: 'facility_phone', label: 'Facility Phone' },
    { id: '10', type: 'text', key: 'facility_email', label: 'Email Address' },
    { id: '11', type: 'text', key: 'facility_website', label: 'Website' },
    { id: '12', type: 'textarea', key: 'facility_description', label: 'Facility Description' },
  ];

  const getOptionsForField = (item: any) => {
    if (item.key === 'facility_type') return facilityTypes;
    if (item.key === 'country') return countries.map(c => c.name);
    if (item.key === 'province') return getProvinces();
    if (item.key === 'city') return getCities();
    return [];
  };

  const animatedValues = useRef(
    formFields.map(() => new Animated.Value(0))
  ).current;

  useEffect(() => {
    const animations = animatedValues.map((anim, index) =>
      Animated.timing(anim, {
        toValue: 1,
        duration: 400,
        delay: index * (2000 / formFields.length),
        useNativeDriver: true,
      })
    );
    Animated.stagger(100, animations).start();
  }, []);

  // Initialize country and province from facility data
  useEffect(() => {
    if (facility.country) {
      setSelectedCountry(facility.country);
    }
    if (facility.province) {
      setSelectedProvince(facility.province);
    }
  }, []);
  const handleChange = (key: keyof FacilityData, value: any) => {
    setFacility(prev => ({
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
      aspect: [4, 3],
      quality: 0.7,
      base64: true,
    });

    if (!result.canceled && result.assets[0]) {
      const uri = result.assets[0].uri;
      const base64 = result.assets[0].base64;
      
      console.log('Image selected:');
      console.log('- URI:', uri);
      console.log('- Has base64:', !!base64);
      console.log('- Base64 length:', base64 ? base64.length : 0);
      console.log('- Base64 preview:', base64 ? base64.substring(0, 100) + '...' : 'null');
      
      setImageUri(uri);
      
      if (base64) {
        handleChange('facility_image_blob', base64);
        console.log('✓ facility_image_blob set in state');
      } else {
        console.error('✗ No base64 data in image picker result');
        Alert.alert('Error', 'Failed to process image - no base64 data');
      }
    }
  };
  
  const handleRegister = async () => {    
    try {

      
      await registerFacility(facility);
      
      console.log('✓ Facility registered successfully');
      router.push('/login');
    } catch (error) {
      console.error('✗ Error registering facility:', error);
    }
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Facility Registration</Text>
      </View>

      <View style={registerCommonStyles.form}>     
        <FlatList
          data={formFields}
          keyExtractor={(item) => item.id}
          extraData={[selectedCountry, selectedProvince, facility]}
          contentContainerStyle={{ paddingBottom: 20 }}
          ListFooterComponent={
            <>
              <TouchableOpacity style={[registerCommonStyles.signupButton, { marginTop: 20 }]} onPress={handleRegister}>
                <Text style={registerCommonStyles.signupButtonText}>Next</Text>
              </TouchableOpacity>
              
              <View style={{ marginTop: 20, marginBottom: 50, alignItems: 'center' }}>
                <Text style={registerCommonStyles.loginText}>
                  Already have an account?{' '}
                  <Text style={registerCommonStyles.loginLink} onPress={() => router.push('/login')}>
                    Sign In
                  </Text>
                </Text>
              </View>
            </>
          }
          renderItem={({ item, index }) => {
            const opacity = animatedValues[index];
            const translateY = animatedValues[index].interpolate({
              inputRange: [0, 1],
              outputRange: [20, 0],
            });

            if (item.type === 'picker') {
              const options = getOptionsForField(item);
              return (
                <Animated.View 
                  style={[
                    addPatientStyles.descriptionContainer,
                    { opacity, transform: [{ translateY }] }
                  ]}
                >
                  <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                  <View style={addPatientStyles.serviceToggleItem}>
                    <Picker 
                      style={{height: 50}} 
                      selectedValue={facility[item.key as keyof FacilityData]} 
                      onValueChange={(value) => handleChange(item.key as keyof FacilityData, value)}
                    >
                      <Picker.Item label={`Select ${item.label}`} value="" />
                      {options.map((option, idx) => (
                        <Picker.Item key={idx} label={option} value={option} />
                      ))}
                    </Picker>
                  </View>
                </Animated.View>
              );
            }

            if (item.type === 'country-picker') {
              const options = getOptionsForField(item);
              return (
                <Animated.View 
                  style={[
                    addPatientStyles.descriptionContainer,
                    { opacity, transform: [{ translateY }] }
                  ]}
                >
                  <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                  <View style={addPatientStyles.serviceToggleItem}>
                    <Picker 
                      style={{height: 50}} 
                      selectedValue={selectedCountry} 
                      onValueChange={(value) => {
                        setSelectedCountry(value);
                        setSelectedProvince('');
                        handleChange('country', value);
                        handleChange('province', '');
                        handleChange('city', '');
                      }}
                    >
                      <Picker.Item label="Select Country" value="" />
                      {options.map((option, idx) => (
                        <Picker.Item key={idx} label={option} value={option} />
                      ))}
                    </Picker>
                  </View>
                </Animated.View>
              );
            }

            if (item.type === 'province-picker') {
              const options = getOptionsForField(item);
              return (
                <Animated.View 
                  style={[
                    addPatientStyles.descriptionContainer,
                    { opacity, transform: [{ translateY }] }
                  ]}
                >
                  <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                  <View style={addPatientStyles.serviceToggleItem}>
                    <Picker 
                      style={{height: 50}} 
                      selectedValue={selectedProvince} 
                      onValueChange={(value) => {
                        setSelectedProvince(value);
                        handleChange('province', value);
                        handleChange('city', '');
                      }}
                      enabled={!!selectedCountry}
                    >
                      <Picker.Item label={selectedCountry ? "Select Province" : "Select Country First"} value="" />
                      {options.map((option, idx) => (
                        <Picker.Item key={idx} label={option} value={option} />
                      ))}
                    </Picker>
                  </View>
                </Animated.View>
              );
            }

            if (item.type === 'city-picker') {
              const options = getOptionsForField(item);
              return (
                <Animated.View 
                  style={[
                    addPatientStyles.descriptionContainer,
                    { opacity, transform: [{ translateY }] }
                  ]}
                >
                  <Text style={addPatientStyles.fieldLabel}>{item.label}</Text>
                  <View style={addPatientStyles.serviceToggleItem}>
                    <Picker 
                      style={{height: 50}} 
                      selectedValue={facility.city} 
                      onValueChange={(value) => handleChange('city', value)}
                      enabled={!!selectedProvince}
                    >
                      <Picker.Item label={selectedProvince ? "Select City" : "Select Province First"} value="" />
                      {options.map((option, idx) => (
                        <Picker.Item key={idx} label={option} value={option} />
                      ))}
                    </Picker>
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
                  <TouchableOpacity onPress={pickImage} style={[registerCommonStyles.signupButton, {marginVertical: 10}]}>
                    <Text style={registerCommonStyles.signupButtonText}>
                      {imageUri ? 'Change Image' : 'Upload Image'}
                    </Text>
                  </TouchableOpacity>
                  {imageUri && (
                    <Image 
                      source={{ uri: imageUri }} 
                      style={{ width: '100%', height: 200, borderRadius: 10, marginTop: 10 }} 
                      resizeMode="cover"
                    />
                  )}
                </Animated.View>
              );
            }

            if (item.type === 'textarea') {
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
                    multiline
                    numberOfLines={4}
                    value={facility[item.key as keyof FacilityData] as string || ''}
                    onChangeText={value => handleChange(item.key as keyof FacilityData, value)}
                    style={[addPatientStyles.descriptionInput, { height: 50, textAlignVertical: 'top' }]}
                  />
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
                  value={facility[item.key as keyof FacilityData] as string || ''}
                  onChangeText={value => handleChange(item.key as keyof FacilityData, value)}
                  style={[addPatientStyles.descriptionInput, {height: item.height || 40}]}
                />
              </Animated.View>
            );
          }}
        />
      </View>
    </SafeAreaView>
  );
}
