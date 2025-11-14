import { View, Image, Pressable, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useState } from 'react';
//import AsyncStorage from '@react-native-async-storage/async-storage';
import { useAuth } from '@/context/AuthContext';

export default function Login() {
    const { loginUser } = useAuth();
    const router = useRouter();
    const [username, setUsername]= useState('');
    const [email, setEmail]= useState('');
    const [password, setPassword]= useState('');

    const handleSubmit = async () => {
        if (!username || !password) {
        alert('Please enter username and password');
        return;
        }
        loginUser(email, password)
        router.replace('/(Patient_tabs)'); 
    };


    return(
    <SafeAreaView style={{ flex: 1, backgroundColor: '#ffffff'}} edges={['top']} >
      
        <View style={styles.topContent}>
            <Text style={styles.logoTitle}>Hello Again!</Text>
            <Text style={{ fontSize: 20, fontFamily:'poppins' }}>Welcome Back</Text>
        </View>

      
      
        <View style={styles.loginInput}>
            <TextInput
                placeholder="Username"
                placeholderTextColor="#888"
                value={username}
                onChangeText={setUsername}
                style={styles.input}
            />
            <TextInput
                placeholder="Email"
                placeholderTextColor="#888"
                secureTextEntry
                value={email}
                onChangeText={setEmail}
                style={styles.input}
            />
            <TextInput
                placeholder="Password"
                placeholderTextColor="#888"
                secureTextEntry
                value={password}
                onChangeText={setPassword}
                style={styles.input}
            />
            <TouchableOpacity style={styles.loginButton} onPress={handleSubmit}>
            <Text style={styles.loginButtonText}>Login</Text>
            </TouchableOpacity>
        </View>

        <View style={styles.altLogin}>
            <Text style={styles.altText}>Or Sign in With</Text>
            <View style={styles.socialRow}>
            <TouchableOpacity style={styles.socialButton}>
                <Text style={styles.socialText}>f</Text>
            </TouchableOpacity>
            <TouchableOpacity style={styles.socialButton}>
                <Text style={styles.socialText}>G</Text>
            </TouchableOpacity>
            </View>
            <Text style={styles.signupText}>
            Don’t have an account?{' '}
            <Text style={styles.signupLink} onPress={() => router.push('/register/register')}>
                Sign Up
            </Text>
            </Text>
        </View>
        
        <View style={{marginTop:80, alignItems:'center'}}>
          <Text style={{color: '#838383'}}>Are you a Doctor or Facility?</Text>
          <Pressable><Text style={{color: '#b2d5f7'}}>Register your clinic now!</Text></Pressable>
        </View>
    </SafeAreaView>

    );

    
}


const styles = StyleSheet.create({
  topContent: {
    alignItems: 'flex-start',
    marginTop: 60,
    paddingLeft:50
  },
  logoImage: {
    width: 80,
    height: 80,
    marginBottom: 10,
    resizeMode: 'contain',
  },
  logoTitle: {
    color: '#333333',
    fontSize: 28,
    fontWeight: 'bold',
    fontFamily: 'poppins',
  },

  loginInput: {
    marginTop: 60,
    paddingHorizontal: 24,
  },
  input: {
    borderColor: '#f0f0f0',
    marginHorizontal:15,
    borderRadius: 25,
    borderWidth: 1.5,
    paddingHorizontal: 16,
    paddingVertical: 14,
    marginBottom: 16,
    color: 'black',
    fontFamily: 'poppins',
    fontSize: 16,
  },
  loginButton: {
    backgroundColor: '#4454c3',
    borderRadius: 25,
    paddingVertical: 14,
    marginHorizontal: 15,
    alignItems: 'center',
    marginTop: 8,
  },
  loginButtonText: {
    color: 'white',
    fontWeight: 'bold',
    fontFamily: 'poppins',
    fontSize: 16,
  },

  altLogin: {
    marginTop: 40,
    alignItems: 'center',
  },
  altText: {
    color: '#aaa',
    marginBottom: 12,
    fontFamily: 'poppins',
  },
  socialRow: {
    flexDirection: 'row',
    gap: 20,
    marginBottom: 20,
  },
  socialButton: {
    width: 40,
    height: 40,
    borderRadius: 25,
    backgroundColor: '#039be5',
    alignItems: 'center',
    justifyContent: 'center',
  },
  socialText: {
    color: 'white',
    fontSize: 18,
    fontWeight: 'bold',
    fontFamily: 'poppins',
  },
  signupText: {
    color: '#a6a6a6',
    marginTop: 8,
  },
  signupLink: {
    color: '#a7cff6',
    fontWeight: 'bold',
    fontFamily: 'poppins',
  },
});

