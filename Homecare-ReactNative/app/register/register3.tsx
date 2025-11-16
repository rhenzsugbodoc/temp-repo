


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../context/RegisterPatientContext';
import { useAuth, User } from '../../context/AuthContext';


export default function Register() {
  const {user ,setUser} = useRegister();
  const {addUser} = useAuth();


  const router = useRouter();
  const handleChange = (key: keyof typeof user, value: any) => {
    setUser(prev => ({
      ...prev,
      [key]: value,
    }))
  }
  const handleRegister = () => {
    if (!user.email_address || !user.first_name || !user.middle_name || 
        !user.last_name || !user.password || !user.dob || !user.gender) {
      alert('Please fill out all required fields');
      return;
    }

    addUser(user as User) //add  validation if all required forms are filled
    router.push('/login'); //automatically moves to tabs logic change in index prolly
  };

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff' }} edges={['top']}>
      <View style={styles.topContent}>
        <Text style={styles.logoTitle}>Patient Registration</Text>
        <Text style={{color: 'black', fontSize: 24}}>Basic Information</Text>
      </View>

      <View style={styles.form}>     
        <TextInput
        placeholder="Medical Conditions"
        placeholderTextColor="#888"
        value={user.medical_conditions ? user.medical_conditions.join(', ') : ''}
        onChangeText={value => handleChange('medical_conditions', value.split(',').map(s => s.trim()).filter(Boolean))}
        style={styles.input}
        />
        <TextInput
        placeholder="Allergies"
        placeholderTextColor="#888"
        value={user.allergies ? user.allergies.join(', ') : ''}
        onChangeText={value => handleChange('allergies', value.split(',').map(s => s.trim()).filter(Boolean))}
        style={styles.input}
        />
        <TextInput
        placeholder="Current Medications"
        placeholderTextColor="#888"
        value={user.current_medications ? user.current_medications.join(', ') : ''}
        onChangeText={value => handleChange('current_medications', value.split(',').map(s => s.trim()).filter(Boolean))}
        style={styles.input}
        />
       

       
        <TouchableOpacity style={styles.signupButton} onPress={handleRegister}>
          <Text style={styles.signupButtonText}>Sign Up</Text>
        </TouchableOpacity>
      </View>

     
      <View style={styles.altLogin}>
        {/* <Text style={styles.altText}>Sign Up With</Text>
        <View style={styles.socialRow}>
          <TouchableOpacity style={styles.socialButton}>
            <Text style={styles.socialText}>f</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.socialButton}>
            <Text style={styles.socialText}>G</Text>
          </TouchableOpacity>
        </View> */}
        <Text style={styles.loginText}>
          Already have an account?{' '}
          <Text style={styles.loginLink} onPress={() => router.push('/login')}>
            Sign In
          </Text>
        </Text>
      </View>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  topContent: {
    alignItems: 'flex-start',
    marginTop: 40,
    paddingHorizontal: 24,
  },
  logoImage: {
    width: 80,
    height: 80,
    marginBottom: 10,
    resizeMode: 'contain',
  },
  logoTitle: {
    color: 'black',
    fontSize: 28,
    fontWeight: 'bold',
  },

  form: {
    marginTop: 40,
    paddingHorizontal: 40,
  },
  input: {
    backgroundColor: '#ffffff',
    borderWidth: 1,
    borderColor: '#ccc',
    borderRadius: 25,
    paddingHorizontal: 16,
    paddingVertical: 14,
    marginBottom: 16,
    color: '#c2c2c2',
    fontSize: 16,
  },
  label: {
    color: '#c2c2c2',
    marginBottom: 8,
    fontSize: 14,
  },
  dobRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
  },
  dobInput: {
    flex: 1,
    marginRight: 8,
  },
  genderRow: {
    flexDirection: 'row',
    justifyContent: 'center',
    marginVertical: 16,
  },
  genderButton: {
    flex: 1,
    paddingVertical: 12,
    marginHorizontal: 8,
    borderRadius: 8,
    backgroundColor: '#1e1e1e',
    alignItems: 'center',
  },
  genderSelected: {
    backgroundColor: '#0575e6',
  },
  genderText: {
    color: 'black',
    fontWeight: 'bold',
  },

  signupButton: {
    backgroundColor: '#0575e6',
    borderRadius: 25,
    paddingVertical: 14,
    alignItems: 'center',
    marginTop: 8,
  },
  signupButtonText: {
    color: 'black',
    fontWeight: 'bold',
    fontSize: 16,
  },

  altLogin: {
    marginTop: 30,
    alignItems: 'center',
  },
  altText: {
    color: '#aaa',
    marginBottom: 12,
  },
  socialRow: {
    flexDirection: 'row',
    gap: 20,
    marginBottom: 20,
  },
  socialButton: {
    width: 40,
    height: 40,
    borderRadius: 20,
    backgroundColor: '#333',
    alignItems: 'center',
    justifyContent: 'center',
  },
  socialText: {
    color: 'white',
    fontSize: 18,
    fontWeight: 'bold',
  },
  loginText: {
    color: '#717171',
    marginTop: 8,
  },
  loginLink: {
    color: '#0575e6',
    fontWeight: 'bold',
  },
});