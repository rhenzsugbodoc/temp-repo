import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getPatientID } from '@/src/options/tokenHandler';
import { useCarePlan } from '@/src/context/CarePlanContext';

import { useOneTimeRequests, useRoutineRequests } from '@/src/options/carePlanQueryOptions';

export default function RequestList() {
    const router = useRouter();
    const { setRequestID } = useCarePlan();
    const [patientID, setPatientID] = useState<number | null>(null);
    const [selectedType, setSelectedType] = useState<'One-Time Service' | 'Routine Service'>('One-Time Service');
    
    useEffect(() => {
      const fetchPatientID = async () => {
        const id = await getPatientID();
          setPatientID(parseInt(id || '0'));
      };
      fetchPatientID();
    }, []);
    
    const { data: oneTimeData, isLoading: isLoadingOneTimeData, isFetching: isFetchingOneTimeData, refetch: refetchOneTimeData} = useOneTimeRequests(patientID || 0, undefined, !!patientID);
    const { data: routineData, isLoading: isLoadingRoutineData, isFetching: isFetchingRoutineData, refetch: refetchRoutineData } = useRoutineRequests(patientID || 0, undefined, !!patientID);


    const renderServiceTypeButton = (type: 'One-Time Service' | 'Routine Service') => {
        const isSelected = selectedType === type; 
       
        return (
            <Pressable
            style={[styles.serviceTypeButtonNotSeleceted, isSelected && styles.serviceTypeButtonSelected]}
            onPress={() => setSelectedType(type)}
            >
            <Text style={[styles.serviceTypeText, isSelected && styles.serviceTypeTextSelected]}>{type}</Text>
            </Pressable>
        );
    };


    const handleRequestPress = (request: any) => {
        setRequestID(parseInt(request.request_id));
        if (selectedType === 'One-Time Service') {
            router.push('/(Patient_tabs)/care_plan/one-time');
        } else {
            router.push('/(Patient_tabs)/care_plan/routine');
        }
    };


return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>

    {/* categoryLabel */}
    <View style={{ height: 90, backgroundColor: '#4454c3', justifyContent:'center', paddingHorizontal:30}}>
      <Text style={{color: 'white' , fontFamily: 'poppins', fontSize: 25}}>My Plans</Text>
    </View>

    <View style={{flexDirection: 'row', marginBottom: 10}}>
        {renderServiceTypeButton('One-Time Service')}
        {renderServiceTypeButton('Routine Service')}
    </View>
    <ScrollView
      refreshControl={
        <RefreshControl
          refreshing={selectedType === 'One-Time Service' ? isFetchingOneTimeData : isFetchingRoutineData}
          onRefresh={() => selectedType === 'One-Time Service' ? refetchOneTimeData() : refetchRoutineData()}
          colors={['#4454c3']}
          tintColor="#4454c3"
        />
      } >
      {/* OneTime Tab*/}
      {selectedType === 'One-Time Service' && oneTimeData?.map((service) => (
          <Pressable key={service.request_id} onPress={() => handleRequestPress(service)} style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}>
              <View style={styles.card}>
                  <View style={{flexDirection: 'row', flex: 1}}>
                      <View style={{ flex: 4}}>
                          <Image source={require('@/assets/images/MisterMatres.png')} resizeMode="contain" 
                          style={{  width: '100%', height: 120 , borderRadius: 30 }} />
                      </View>
                      <View style={{ flex: 5, gap:5,  justifyContent: 'center'}}>
                        
                          <Text style={{ fontWeight: 'bold', fontSize: 14, marginBottom: 2, color: '#7d71bf', fontFamily: 'poppins' }}>{service.service_name}</Text>
                          {/* Date */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="calendar-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>{service.preferred_date}</Text>
                          </View>

                          {/* Caregiver */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="person-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>
                              {service.assigned_caregiver_first_name && service.assigned_caregiver_last_name 
                                ? `${service.assigned_caregiver_first_name} ${service.assigned_caregiver_last_name}`
                                : 'Not Assigned'}
                            </Text>
                          </View>

                          {/* Status */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="checkmark-circle-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>{service.status}</Text>
                          </View>
                        
                      </View>
                  </View>
              </View>
          </Pressable>
      ))}
      {/* RoutineTab */}
      {selectedType === 'Routine Service' && (
        <View>
          <Text style={{fontFamily: 'poppins', color: '#434e79', fontSize: 18, fontWeight: 'bold', marginBottom: 10, marginLeft: 20}}>Routine Service Requests</Text>
          {routineData?.map(request => (
            <Pressable key={request.request_id} onPress={() => handleRequestPress(request)} style={({ pressed }) => [styles.card,{opacity: pressed ? 0.8 : 1}]}>
              <View style={[styles.card, {paddingHorizontal: 20, alignItems: 'center', borderWidth: 1, borderColor: '#b1b1b1'}]}>
                <Text style={{textAlign: 'center', fontFamily: 'poppins', color: '#434e79', fontWeight: 'bold'}}>{request.service_name}</Text>
                <Text style={{textAlign: 'center', fontFamily: 'poppins', color: '#7066ac', fontSize: 12}}>
                  Episode: {request.episode_name || 'No Episode'}
                </Text>
                <Text style={{textAlign: 'center', fontFamily: 'poppins', color: '#7066ac', fontSize: 11}}>
                  Status: {request.status}
                </Text>
              </View>
            </Pressable>
          ))}
        </View>
      )}

     
    </ScrollView>
  </SafeAreaView>;
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


  serviceTypeButtonNotSeleceted: {
    flex: 1,
    padding: 15,
    alignItems: 'center',
    borderBottomWidth: 0,
    borderBottomColor: 'transparent',
  },
  serviceTypeButtonSelected: {
    borderBottomWidth: 2,
    borderBottomColor: '#53346a',
  },
  serviceTypeText: {
    color: '#c7c7c7',
  },
  serviceTypeTextSelected: {
    color: '#5a3d70',
  },
  serviceDetails: {
  color: '#7066ac',
  fontSize: 10,
  fontFamily: 'poppins'
},

});