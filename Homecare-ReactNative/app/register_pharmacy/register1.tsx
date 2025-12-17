import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity, ScrollView } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext';
import {PharmacyData} from '../../src/services/registerService';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';

export default function RegisterPharmacy() {
  const { pharmacy, setPharmacy, registerPharmacy } = useRegister();

  const router = useRouter();
  const handleChange = (key: keyof PharmacyData, value: any) => {
    setPharmacy(prev => ({
      ...prev,
      [key]: value,
    }))
  }
  const handleRegister = async () => {    
    try {
      await registerPharmacy(pharmacy);
      router.push('/login');
    } catch (error) {
      console.error('Error registering pharmacy:', error);
    }
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Pharmacy Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Pharmacy Information</Text>
      </View>

      <ScrollView style={registerCommonStyles.form}>     
          <TextInput
              placeholder="Pharmacy Name"
              placeholderTextColor="#888"
              value={pharmacy.pharmacy_name || ''}
              onChangeText={value => handleChange('pharmacy_name', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Pharmacy Address"
              placeholderTextColor="#888"
              value={pharmacy.pharmacy_address || ''}
              onChangeText={value => handleChange('pharmacy_address', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Pharmacy Phone"
              placeholderTextColor="#888"
              value={pharmacy.pharmacy_phone || ''}
              onChangeText={value => handleChange('pharmacy_phone', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Pharmacy Email"
              placeholderTextColor="#888"
              value={pharmacy.pharmacy_email || ''}
              onChangeText={value => handleChange('pharmacy_email', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Country"
              placeholderTextColor="#888"
              value={pharmacy.country || ''}
              onChangeText={value => handleChange('country', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Province"
              placeholderTextColor="#888"
              value={pharmacy.province || ''}
              onChangeText={value => handleChange('province', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="City"
              placeholderTextColor="#888"
              value={pharmacy.city || ''}
              onChangeText={value => handleChange('city', value)}
              style={registerCommonStyles.formTextInput}
          />
          <TextInput
              placeholder="Postal Code"
              placeholderTextColor="#888"
              value={pharmacy.postal_code || ''}
              onChangeText={value => handleChange('postal_code', value)}
              style={registerCommonStyles.formTextInput}
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
