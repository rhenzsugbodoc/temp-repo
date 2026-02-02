import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity, ScrollView } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext';
import {FacilityData} from '../../src/services/registerService';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';
import {Picker} from '@react-native-picker/picker';
import {addPatientStyles} from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';
import {countries} from '@/assets/lists/country_list'
export default function RegisterFacility() {
  const { facility, setFacility, registerFacility } = useRegister();
  const facilityTypes = ['Hospital', 'Clinic', 'Nursing Home', 'Rehabilitation Center'];
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

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Facility Type</Text>
              <View style={addPatientStyles.serviceToggleItem}>
                  <Picker style={{height: 50}} selectedValue={facility.facility_type} onValueChange={(facilityType) => handleChange('facility_type', facilityType)}>
                      {facilityTypes.map((type) => (
                          <Picker.Item key={type} label={type} value={type} />
                      ))}
                  </Picker>
              </View>
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Facility Name</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.facility_name || ''}
                  onChangeText={value => handleChange('facility_name', value)}
                  style={[addPatientStyles.descriptionInput, {height: 40}]}
              />
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Facility Address</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.facility_address || ''}
                  onChangeText={value => handleChange('facility_address', value)}
                  style={[addPatientStyles.descriptionInput, {height: 50}]}
              />
          </View>
          
          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Country</Text>
              <View style={addPatientStyles.serviceToggleItem}>
                  <Picker style={{height: 50}} selectedValue={facility.country} onValueChange={(itemValue) => handleChange('country', itemValue)}>
                      {countries.map((country, index) => (
                      <Picker.Item key={index} label={country} value={country} />
                      ))}
                  </Picker>
              </View>
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>City</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.city || ''}
                  onChangeText={value => handleChange('city', value)}
                  style={[addPatientStyles.descriptionInput, {height: 40}]}
              />
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Province</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.province || ''}
                  onChangeText={value => handleChange('province', value)}
                  style={[addPatientStyles.descriptionInput, {height: 40}]}
              />
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Postal Code</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.postal_code || ''}
                  onChangeText={value => handleChange('postal_code', value)}
                  style={[addPatientStyles.descriptionInput, {height: 40}]}
              />
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Facility Phone</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.facility_phone || ''}
                  onChangeText={value => handleChange('facility_phone', value)}
                  style={[addPatientStyles.descriptionInput, {height: 40}]}
              />
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Email Address</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.facility_email || ''}
                  onChangeText={value => handleChange('facility_email', value)}
                  style={[addPatientStyles.descriptionInput, {height: 40}]}
              />
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Website</Text>
              <TextInput
                  placeholderTextColor="#888"
                  value={facility.facility_website || ''}
                  onChangeText={value => handleChange('facility_website', value)}
                  style={[addPatientStyles.descriptionInput, {height: 40}]}
              />
          </View>

          <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Facility Description</Text>
              <TextInput
                  placeholderTextColor="#888"
                  multiline
                  numberOfLines={4}
                  value={facility.facility_description || ''}
                  onChangeText={value => handleChange('facility_description', value)}
                  style={[addPatientStyles.descriptionInput, { height: 50, textAlignVertical: 'top' }]}
              />
          </View>

       
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
