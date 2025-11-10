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
        router.replace('/(Patient_tabs)/'); 
    };


    return(
    <SafeAreaView style={{ flex: 1, backgroundColor: '#121212'}} edges={['top']} >
      
        <View style={styles.topContent}>
            <Image
                source={require('@/assets/images/icon.png')}
                style={styles.logoImage}
            />
            <Text style={styles.logoTitle}>Homecare</Text>
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
            <Text style={styles.loginButtonText}>Sign In</Text>
            </TouchableOpacity>
        </View>

        <View style={styles.altLogin}>
            <Text style={styles.altText}>Be Connect With</Text>
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
        

    </SafeAreaView>

    );

    
}


const styles = StyleSheet.create({
  topContent: {
    alignItems: 'center',
    marginTop: 60,
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

  loginInput: {
    marginTop: 60,
    paddingHorizontal: 24,
  },
  input: {
    backgroundColor: '#1e1e1e',
    borderRadius: 8,
    paddingHorizontal: 16,
    paddingVertical: 14,
    marginBottom: 16,
    color: 'white',
    fontSize: 16,
  },
  loginButton: {
    backgroundColor: '#1DB954',
    borderRadius: 25,
    paddingVertical: 14,
    alignItems: 'center',
    marginTop: 8,
  },
  loginButtonText: {
    color: 'black',
    fontWeight: 'bold',
    fontSize: 16,
  },

  altLogin: {
    marginTop: 40,
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
  signupText: {
    color: 'white',
    marginTop: 8,
  },
  signupLink: {
    color: '#1DB954',
    fontWeight: 'bold',
  },
});

