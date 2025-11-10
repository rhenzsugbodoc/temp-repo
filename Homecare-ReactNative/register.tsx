import React, { useState } from 'react';
import { View, Text, TextInput, Button } from 'react-native';
import { useAuth } from '@/context/AuthContext';

const Register = () => {
  const [formData, setFormData] = useState({
    firstName: '',
    middleName: '',
    lastName: '',
    phoneNumber: '',
    dateOfBirth: '',
    gender: 'Male',
    homeAddress: '',
    emergencyContact: '',
    role: 'Patient',
    emailAddress: '',
    password: ''
  });

  const { addUser } = useAuth();

  const handleChange = (name, value) => {
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  const handleRegister = () => {
    addUser(formData);
    router.replace('/login');
  };

  return (
    <View>
      <Text>Register</Text>
      <TextInput placeholder="First Name" onChangeText={text => handleChange('firstName', text)} />
      <TextInput placeholder="Middle Name" onChangeText={text => handleChange('middleName', text)} />
      <TextInput placeholder="Last Name" onChangeText={text => handleChange('lastName', text)} />
      <TextInput placeholder="Phone Number" onChangeText={text => handleChange('phoneNumber', text)} />
      <TextInput placeholder="Date of Birth" onChangeText={text => handleChange('dateOfBirth', text)} />
      <TextInput placeholder="Gender" onChangeText={text => handleChange('gender', text)} />
      <TextInput placeholder="Home Address" onChangeText={text => handleChange('homeAddress', text)} />
      <TextInput placeholder="Emergency Contact" onChangeText={text => handleChange('emergencyContact', text)} />
      <TextInput placeholder="Role" onChangeText={text => handleChange('role', text)} />
      <TextInput placeholder="Email Address" onChangeText={text => handleChange('emailAddress', text)} />
      <TextInput placeholder="Password" secureTextEntry onChangeText={text => handleChange('password', text)} />
      <Button title="Register" onPress={handleRegister} />
    </View>
  );
};

export default Register;