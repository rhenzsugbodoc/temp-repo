


import { View, Image, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useRegister } from '../../context/RegisterPatientContext';


export default function Register() {
  const {user ,setUser} = useRegister();


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
      <View style={styles.topContent}>
        <Text style={styles.logoTitle}>Patient Registration</Text>
        <Text style={{color: 'white', fontSize: 24}}>Basic Information</Text>
      </View>

      <View style={styles.form}>     
          <TextInput
              placeholder="First Name"
              placeholderTextColor="#888"
              value={user.firstName || ''}
              onChangeText={value => handleChange('firstName', value)}
              style={styles.input}
          />
          <TextInput
              placeholder="Middle Name"
              placeholderTextColor="#888"
              value={user.middleName || ''}
              onChangeText={value => handleChange('middleName', value)}
              style={styles.input}
          />
          <TextInput
              placeholder="Last Name"
              placeholderTextColor="#888"
              secureTextEntry
              value={user.lastName || ''}
              onChangeText={value => handleChange('lastName', value)}
              style={styles.input}
          />
          <TextInput
              placeholder="Phone Number"
              placeholderTextColor="#888"
              secureTextEntry
              value={user.phoneNumber || ''}
              onChangeText={value => handleChange('phoneNumber', value)}
              style={styles.input}
          />
          <TextInput
              placeholder="Password"
              placeholderTextColor="#888"
              secureTextEntry
              value={user.password || ''}
              onChangeText={value => handleChange('password', value)}
              style={styles.input}
          />
          <TextInput
              placeholder="Confirm Password"
              placeholderTextColor="#888"
              secureTextEntry
              value={user.confirmPassword || ''}
              onChangeText={value => handleChange('confirmPassword', value)}
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
    alignItems: 'center',
    marginTop: 40,
  },
  logoImage: {
    width: 80,
    height: 80,
    marginBottom: 10,
    resizeMode: 'contain',
  },
  logoTitle: {
    color: 'white',
    fontSize: 28,
    fontWeight: 'bold',
  },

  form: {
    marginTop: 40,
    paddingHorizontal: 24,
  },
  input: {
    backgroundColor: '#ffffff',
    borderRadius: 8,
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
    color: 'white',
    marginTop: 8,
  },
  loginLink: {
    color: '#0575e6',
    fontWeight: 'bold',
  },
});