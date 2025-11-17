import { View, Image, Pressable, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useState } from 'react';
//import AsyncStorage from '@react-native-async-storage/async-storage';
import { useAuth } from '@/context/AuthContext';
import { loginStyles } from '../assets/styles/patient/auth/loginStyles';
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
      
        <View style={loginStyles.topContent}>
            <Text style={loginStyles.logoTitle}>Hello Again!</Text>
            <Text style={{ fontSize: 20, fontFamily:'poppins' }}>Welcome Back</Text>
        </View>

      
      
        <View style={loginStyles.loginInput}>
            <TextInput
                placeholder="Username"
                placeholderTextColor="#888"
                value={username}
                onChangeText={setUsername}
                style={loginStyles.input}
            />
            <TextInput
                placeholder="Email"
                placeholderTextColor="#888"
                secureTextEntry
                value={email}
                onChangeText={setEmail}
                style={loginStyles.input}
            />
            <TextInput
                placeholder="Password"
                placeholderTextColor="#888"
                secureTextEntry
                value={password}
                onChangeText={setPassword}
                style={loginStyles.input}
            />
            <TouchableOpacity style={loginStyles.loginButton} onPress={handleSubmit}>
            <Text style={loginStyles.loginButtonText}>Login</Text>
            </TouchableOpacity>
        </View>

        <View style={loginStyles.altLogin}>
            <Text style={loginStyles.altText}>Or Sign in With</Text>
            <View style={loginStyles.socialRow}>
            <TouchableOpacity style={loginStyles.socialButton}>
                <Text style={loginStyles.socialText}>f</Text>
            </TouchableOpacity>
            <TouchableOpacity style={loginStyles.socialButton}>
                <Text style={loginStyles.socialText}>G</Text>
            </TouchableOpacity>
            </View>
            <Text style={loginStyles.signupText}>
            Don’t have an account?{' '}
            <Text style={loginStyles.signupLink} onPress={() => router.push('/register/register')}>
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