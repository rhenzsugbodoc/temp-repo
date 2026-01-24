import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';

import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { Ionicons } from '@expo/vector-icons';
import {useFacilityOneTimeRequests, useFacilityRoutineRequests, useEditServiceRequest } from '@/src/options/serviceRequestOptions';

export default function RequestList() {
  const router = useRouter();
  const {data: oneTimeRequests, isLoading: loadingOneTime, isFetching: isFetchingOneTime, refetch: refetchOneTime} = useFacilityOneTimeRequests();
  const {data: routineRequests, isLoading: loadingRoutine, isFetching: isFetchingRoutine, refetch: refetchRoutine} = useFacilityRoutineRequests();
  const editServiceRequestMutation = useEditServiceRequest();
  const [selectedCategory, setSelectedCategory] = useState<'One-Time' | 'Routine' >('One-Time');
  const serviceCategory: { [key: number]: string } = {5: 'Assisted Living', 6: 'Nursing Care', 9: 'Companionship', 11: 'Therapy'};
  const handleAccept = (requestId: string) => {
    editServiceRequestMutation.mutate({
      request_id: requestId,
      status: 'Confirmed'
    });
  }
  const handleReject = (requestId: string) => {
    editServiceRequestMutation.mutate({
      request_id: requestId,
      status: 'Cancelled'
    });
  }
  const handleEdit = (requestId: string) => {
    // Implement accept logic here
    console.log('Request Edited');

  }
  const showEditPopup= (requestId:string) => {

  }
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    padding: 15
    
  }} edges={['top']}>



    <ScrollView
      refreshControl={
        <RefreshControl
          refreshing={selectedCategory === 'One-Time' ? isFetchingOneTime : isFetchingRoutine}
          onRefresh={() => selectedCategory === 'One-Time' ? refetchOneTime() : refetchRoutine()}
          colors={['#4454c3']}
          tintColor="#4454c3"
        />
      }
    >
      <View style={[styles.row, {backgroundColor: '#f3f4f6'}]}>
        {/* <Pressable onPress={() => setSelectedCategory('All')} style={selectedCategory === 'All' ? styles.selectedTypeBox : styles.unselectedTypeBox}>
          <Text style={selectedCategory === 'All' ? styles.selectedTypeButtonText : styles.unselectedTypeButtonText}>All</Text>
        </Pressable> */}
        <Pressable onPress={() => setSelectedCategory('One-Time')} style={selectedCategory === 'One-Time' ? styles.selectedTypeBox : styles.unselectedTypeBox}>
          <View style={{flexDirection: 'row', alignItems: 'center', gap: 5}}>
            <Ionicons name="flash-outline" size={16} />
            <Text style={selectedCategory === 'One-Time' ? styles.selectedTypeButtonText : styles.unselectedTypeButtonText}>One-Time</Text>
          </View>
        </Pressable>
        <Pressable onPress={() => setSelectedCategory('Routine')} style={selectedCategory === 'Routine' ? styles.selectedTypeBox : styles.unselectedTypeBox}>
          <View style={{flexDirection: 'row', alignItems: 'center', gap: 5}}>
            <Ionicons name="repeat-outline" size={16} />
            <Text style={selectedCategory === 'Routine' ? styles.selectedTypeButtonText : styles.unselectedTypeButtonText}>Routine</Text>
          </View>
        </Pressable>
      </View>
      
      {(selectedCategory === 'One-Time' ? oneTimeRequests : routineRequests)?.map((request) => (
        <View style={styles.itemCard} key={request.request_id}>
          <View style={styles.row}>
            <View style={[styles.serviceTypeBubble]}>
              <View style={{flexDirection: 'row', alignItems: 'center', gap: 5}}>
                <Ionicons name={selectedCategory === 'One-Time' ? "flash-outline" : "repeat-outline"} size={14} color="#ffffff" />
                <Text style={styles.serviceTypeBubbleText}>{selectedCategory}</Text>
              </View>
            </View>
            <Text style={styles.requestIDText}>REQ-NO: {request.request_id}</Text>
          </View>

          <Text style={styles.serviceTitleText}>{request.service_name}</Text>

          <Text style={styles.serviceCategoryText}>{serviceCategory[request.service_category]}</Text>
        
          {/* Patient Name*/}
          <View style={styles.serviceDetailRow}> 
            <Ionicons name="person-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={[styles.serviceDetailText, {color: 'black'}]}>{request.patient_first_name} {request.patient_last_name}</Text>
          </View>
          {/* Date */}
          <View style={styles.serviceDetailRow}>
            <Ionicons name="calendar-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.preferred_date}</Text>
          </View>
          {/* Time */}
          {/* <View style={styles.serviceDetailRow}>
            <Ionicons name="time-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.preferred_time}</Text>
          </View> */}
          {/* Preferred Caregiver */}
          {/* <View style={styles.serviceDetailRow}>
            <Ionicons name="medkit-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.preferred_caregiver_first_name} {request.preferred_caregiver_last_name}</Text>
          </View> */}
          {/* Status */}
          <View style={styles.serviceDetailRow}>
            <Ionicons name="checkmark-circle-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.status}</Text>
          </View>

          <View style={styles.buttonRow}>
            {request.status === 'Pending' && (
              <>
                <Pressable 
                  onPress={() => handleAccept(request.request_id)} 
                  style={styles.acceptButton}
                >
                  <Text style={styles.acceptButtonText}>Accept</Text>
                </Pressable>
                <Pressable 
                  onPress={() => handleReject(request.request_id)} 
                  style={styles.rejectButton}
                >
                  <Text style={styles.rejectButtonText}>Reject</Text>
                </Pressable>
              </>
            )}
            {(request.status === 'Pending' || request.status === 'Confirmed') && (
            <Pressable 
              onPress={() => showEditPopup(request.request_id)} 
              style={styles.rejectButton}
            >
              <Text style={styles.rejectButtonText}>Edit</Text>
            </Pressable>
            )}
          </View>
           
        </View>
      ))}
      


    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({
  selectedTypeBox: {
    backgroundColor: '#f3f4f6',
    borderRadius: 8,
    paddingHorizontal: 12,
    paddingVertical: 8,
    flexGrow: 1,
    alignItems: 'center',
    shadowColor: '#000',
    shadowOpacity: 0.5,
    shadowOffset: { width: 0, height: 0 },
    shadowRadius: 0,
    elevation: 2,
   
  },
  unselectedTypeBox: {
    backgroundColor: '#f3f4f6',
    borderRadius: 8,
    paddingHorizontal: 12,
    paddingVertical: 8,
    flexGrow: 1,
    alignItems: 'center',

  },
  selectedTypeButtonText: {
    fontSize: 14,
    color: 'black',
  },
  unselectedTypeButtonText: {
    fontSize: 14,
    color: '#6b7280',
  },
  itemCard: {
    padding: 15,
    alignItems: 'flex-start',
    backgroundColor: '#ffffff',
    borderRadius: 10,
    marginBottom: 15,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 1, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },
  row: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    marginBottom: 10,
    gap: 10,
  },
  serviceTypeBubble: {
    paddingVertical: 6,
    paddingHorizontal: 12,
    borderRadius: 20,
    backgroundColor: '#4b5cbe',
  },
  serviceTypeBubbleText: {
    color: '#ffffff',
    fontSize: 14,
  },
  serviceCategoryText: {
    fontSize: 14,
    color: '#727986',
    marginBottom: 5,
  },
  requestIDText: {
    fontSize: 14,
    color: '#6b7280',
  },
  serviceTitleText: {
    fontSize: 18,
    fontWeight: '600',
    color: '#182031',
  },
  serviceDetailRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',

    gap:10,
    paddingVertical: 4,
  },
  serviceDetailIcon: {
    color: '#6b7280'
  },
  serviceDetailText: {
    color: '#6b7280',
    fontSize: 14,
  },

  buttonRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    gap: 10,
    marginTop: 10,
  },
  acceptButton: {
    flex: 1,
    backgroundColor: '#4b5cbe',
    paddingVertical: 8,
    
    borderRadius: 8,
    alignItems: 'center',
  },
  acceptButtonText: {
    color: '#ffffff',
    fontSize: 13,
    fontWeight: '600',
  },
  rejectButton: {
    flex: 1,
    backgroundColor: '#f4f7fa',
    paddingVertical: 8,
    borderRadius: 8,
    alignItems: 'center',
  },
  rejectButtonText: {
    color: '#000000',
    fontSize: 13,
    fontWeight: '600',
  },
});