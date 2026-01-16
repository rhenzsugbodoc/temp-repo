import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import {useFacilityOneTimeRequests, useFacilityRoutineRequests } from '@/src/options/serviceRequestOptions';

export default function RequestList() {
  const router = useRouter();
  const {data: oneTimeRequests, isLoading: loadingOneTime} = useFacilityOneTimeRequests();
  const {data: routineRequests, isLoading: loadingRoutine} = useFacilityRoutineRequests();
  const [selectedCategory, setSelectedCategory] = useState<'One-Time' | 'Routine'>('One-Time');
  const handleAccept = () => {
    // Implement accept logic here
    console.log('Request accepted');

  }
  const handleReject = () => {
    // Implement accept logic here
    console.log('Request Rejected');

  }
  const handleEdit = () => {
    // Implement accept logic here
    console.log('Request Edited');

  }
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView >
      <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', gap: 5}}>
        <View>
          <Pressable onPress={() => setSelectedCategory('One-Time')}><Text>One-Time</Text></Pressable>
        </View>
        <View>
          <Pressable onPress={() => setSelectedCategory('Routine')}><Text>Routine</Text></Pressable>
        </View>
      </View>

      
      <View>
        {oneTimeRequests?.map((request) => (
          <View key={request.request_id}>
            <Text>{request.service_name} for {request.patient_first_name} {request.patient_last_name}</Text>
            <Text>Preferred Date{request.preferred_date}</Text>
            <Text>Request Type: {request.service_type}</Text>
            <Text>Preferred Caregiver: {request.preferred_caregiver_first_name === null ? 'Not assigned' : request.preferred_caregiver_last_name}</Text>
            <Text>Assigned Caregiver: {request.assigned_caregiver_first_name === null ? 'Not assigned' : request.assigned_caregiver_last_name}</Text>
            <Text>Status: {request.status}</Text>
       
          </View>
        ))}

      </View> 
            <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', gap: 5}}>
        <View>
          <Pressable onPress= {()=>handleAccept()}><Text>Accept</Text></Pressable>
        </View>
        <View>
          <Pressable onPress= {()=>handleReject()}><Text>Reject</Text></Pressable>
        </View>
      </View>

    </ScrollView>
  </SafeAreaView>;
}