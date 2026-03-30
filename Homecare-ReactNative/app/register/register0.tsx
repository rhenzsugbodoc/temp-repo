


import {Animated, View, Image, StyleSheet, Text, TextInput, TouchableOpacity, Pressable, ScrollView, FlatList, useWindowDimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';
import { Ionicons } from '@expo/vector-icons';

export default function Register() {
  const {user ,setUser} = useRegister();
  const { width: screenWidth, height: screenHeight } = useWindowDimensions();
  const cardWidth = screenWidth * 0.7;
  const cardHeight = screenHeight * 0.7;

  const roles = [
    { name: 'Patient', description: 'Register as a patient receiving care' },
    { name: 'Caregiver', description: 'Healthcare professional providing care services' },
    { name: 'Pharmacy_Owner', description: 'Owner or manager of a pharmacy' },
    { name: 'Driver', description: 'Transportation provider for patients' },
    { name: 'Admin', description: 'System administrator with full access' },
    { name: 'Doctor', description: 'Medical professional providing consultations' },
  ];

  const router = useRouter();
  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,
    }))
  }
 
  const handleRegister = (role: string) => {    
    handleChange('role', role);
    router.push('/register/register1'); 
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Select User Type</Text>
      </View>

      <View style={styles.carouselContainer}>
        <FlatList
          data={roles}
          horizontal
          pagingEnabled
          showsHorizontalScrollIndicator={false}
          snapToInterval={cardWidth + 30}
          decelerationRate="normal"
          contentContainerStyle={[
            styles.flatListContent,
            { paddingHorizontal: (screenWidth - cardWidth) / 2 },
          ]}
          renderItem={({ item }) => (
            <View style={[styles.cardWrapper, { width: cardWidth + 30 }]}>
              <View style={[styles.card, { width: cardWidth, height: cardHeight }]}>
                <Ionicons name="person-circle-outline" size={80} color="#4b5cbe" />
                <Text style={styles.roleName}>{item.name}</Text>
                <Text style={styles.roleDescription}>{item.description}</Text>
                
                <Pressable 
                  style={styles.selectButton} 
                  onPress={() => handleRegister(item.name)}
                >
                  <Text style={registerCommonStyles.signupButtonText}>Select</Text>
                </Pressable>
              </View>
            </View>
          )}
          keyExtractor={(item) => item.name}
        />
      </View>

     
      <View style={[registerCommonStyles.altLogin, {marginBottom: 30, marginTop: 0}]}>
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

const styles = StyleSheet.create({
  carouselContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  flatListContent: {
    alignItems: 'center',
  },
  cardWrapper: {
    justifyContent: 'center',
    alignItems: 'center',
  },
  card: {
    backgroundColor: '#ffffff',
    borderRadius: 20,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 4 },
    shadowRadius: 8,
    elevation: 5,
    alignItems: 'center',
    justifyContent: 'space-evenly',
    padding: 20,
    borderWidth: 2,
    borderColor: '#4b5cbe',
  },
  roleName: {
    fontSize: 24,
    fontWeight: '700',
    color: '#333',
    textAlign: 'center',
  },
  roleDescription: {
    fontSize: 14,
    color: '#666',
    textAlign: 'center',
    paddingHorizontal: 20,
    lineHeight: 20,
  },
  selectButton: {
    backgroundColor: '#4b5cbe',
    borderRadius: 25,
    paddingVertical: 15,
    paddingHorizontal: 40,
    width: '80%',
    alignItems: 'center',
    shadowColor: '#4b5cbe',
    shadowOpacity: 0.3,
    shadowOffset: { width: 0, height: 4 },
    shadowRadius: 8,
    elevation: 5,
  },
});

