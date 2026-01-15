import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity, ScrollView } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext';
import {FacilityData} from '../../src/services/registerService';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';

export default function RegisterFacility() {
  const { facility, setFacility, registerFacility } = useRegister();

  const router = useRouter();
  const handleChange = (key: keyof FacilityData, value: any) => {
    setFacility(prev => ({
      ...prev,
      [key]: value,
    }))
  }
  const handleRegister = async () => {    
    try {
      await registerFacility(facility);
      router.push('/login');
    } catch (error) {
      console.error('Error registering facility:', error);
    }
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Facility Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Facility Information</Text>
      </View>

      <ScrollView style={registerCommonStyles.form}>     
          <TextInput
              placeholder="Facility Name"
              placeholderTextColor="#888"
              value={facility.facility_name || ''}
              onChangeText={value => handleChange('facility_name', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Facility Address"
              placeholderTextColor="#888"
              value={facility.facility_address || ''}
              onChangeText={value => handleChange('facility_address', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Country"
              placeholderTextColor="#888"
              value={facility.country || ''}
              onChangeText={value => handleChange('country', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="City"
              placeholderTextColor="#888"
              value={facility.city || ''}
              onChangeText={value => handleChange('city', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Province"
              placeholderTextColor="#888"
              value={facility.province || ''}
              onChangeText={value => handleChange('province', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Postal Code"
              placeholderTextColor="#888"
              value={facility.postal_code || ''}
              onChangeText={value => handleChange('postal_code', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Facility Phone"
              placeholderTextColor="#888"
              value={facility.facility_phone || ''}
              onChangeText={value => handleChange('facility_phone', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Email Address"
              placeholderTextColor="#888"
              value={facility.facility_email || ''}
              onChangeText={value => handleChange('facility_email', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Website"
              placeholderTextColor="#888"
              value={facility.facility_website || ''}
              onChangeText={value => handleChange('facility_website', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Facility Description"
              placeholderTextColor="#888"
              multiline
              numberOfLines={4}
              value={facility.facility_description || ''}
              onChangeText={value => handleChange('facility_description', value)}
              style={[registerCommonStyles.formTextInput, { height: 100, textAlignVertical: 'top' }]}
          />

       
        <TouchableOpacity style={registerCommonStyles.signupButton} onPress={handleRegister}>
          <Text style={registerCommonStyles.signupButtonText}>Next</Text>
        </TouchableOpacity>
      </ScrollView>

     
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
