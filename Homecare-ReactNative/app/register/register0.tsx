


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity, Pressable, ScrollView } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../src/context/RegisterContext';
import { registerCommonStyles, register1Styles } from '../../assets/styles/patient/auth/registerStyles';

export default function Register() {
  const {user ,setUser} = useRegister();

  const roles = ['Patient', 'Caregiver', 'Pharmacy_Owner', 'Driver', 'Admin'];

  const router = useRouter();
  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,
    }))
  }
  
  const handleRoleSelect = (role: string) => {
    handleChange('role', role);
  }
  
  const handleRegister = () => {    
    router.push('/register/register1'); 
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={registerCommonStyles.topContent}>
        <Text style={registerCommonStyles.headerText1}>Registration</Text>
        <Text style={registerCommonStyles.headerText2}>Basic Information</Text>
      </View>

      <View style={registerCommonStyles.form}>
        <ScrollView showsVerticalScrollIndicator={false}>
          <View>
            <Text style={{fontFamily: 'poppins', color: '#434e79', fontSize: 18, fontWeight: 'bold', marginBottom: 10, marginLeft: 20}}>Select Role</Text>
            {roles.map(role => (
              <Pressable 
                key={role} 
                onPress={() => handleRoleSelect(role)} 
                style={({ pressed }) => [
                  styles.card,
                  {opacity: pressed ? 0.8 : 1},
                  user.role === role && styles.selectedCard
                ]}>
                <View style={[styles.card, {paddingHorizontal: 20, alignItems: 'center', borderWidth: 1, borderColor: user.role === role ? '#4454c3' : '#b1b1b1'}]}>
                  <Text style={{textAlign: 'center', fontFamily: 'poppins', color: user.role === role ? '#4454c3' : '#434e79', fontWeight: 'bold'}}>
                    {role.replace('_', ' ')}
                  </Text>
                </View>
              </Pressable>
            ))}
          </View>
        </ScrollView>
        
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

const styles = StyleSheet.create({
  card: {
    backgroundColor: '#ffffff',
    borderRadius: 15,
    padding: 15,
    marginHorizontal: 30,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'center',
  },
  selectedCard: {
    backgroundColor: '#f0f2ff',
  },
});

