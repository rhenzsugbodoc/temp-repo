import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getPatientID } from '@/src/options/tokenHandler';
import { useCarePlan } from '@/src/context/CarePlanContext';
import { useCarePlan as useAdminCarePlan } from '@/src/context/Admin-CarePlanContext';
import { patientDetailStyles } from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';

import { useOneTimeRequests, useRoutineRequests } from '@/src/options/carePlanQueryOptions';
import { useCarePlansByCurrentUser } from '@/src/options/Admin_carePlanQueryOptions';

export default function RequestList() {
    const router = useRouter();
    const { setRequestID } = useCarePlan();
    const { setCarePlanID } = useAdminCarePlan();
    const [patientID, setPatientID] = useState<number | null>(null);
    const [selectedType, setSelectedType] = useState<'One-Time' | 'Routine' | 'Care Plans'>('One-Time');
    
    useEffect(() => {
      const fetchPatientID = async () => {
        const id = await getPatientID();
          setPatientID(parseInt(id || '0'));
      };
      fetchPatientID();
    }, []);
    
    const { data: oneTimeData, isLoading: isLoadingOneTimeData, isFetching: isFetchingOneTimeData, refetch: refetchOneTimeData} = useOneTimeRequests(patientID || 0, undefined, !!patientID);
    const { data: routineData, isLoading: isLoadingRoutineData, isFetching: isFetchingRoutineData, refetch: refetchRoutineData } = useRoutineRequests(patientID || 0, undefined, !!patientID);
    const { data: carePlansData, isLoading: isLoadingCarePlans, isFetching: isFetchingCarePlans, refetch: refetchCarePlans, error: carePlansError } = useCarePlansByCurrentUser();

    console.log('=== Care Plans Debug ===');
    console.log('carePlansData:', carePlansData);
    console.log('isLoadingCarePlans:', isLoadingCarePlans);
    console.log('carePlansError:', carePlansError);

    // console.log('routineData:', routineData);


    const renderServiceTypeButton = (type: 'One-Time' | 'Routine' | 'Care Plans') => {
        const isSelected = selectedType === type;
        
        const getIcon = () => {
            if (type === 'One-Time') return 'time-outline';
            if (type === 'Routine') return 'repeat-outline';
            return 'clipboard-outline';
        };
       
        return (
            <Pressable
                onPress={() => setSelectedType(type)}
                style={[patientDetailStyles.scheduleTypeButton, {backgroundColor: isSelected ? '#4454c3' : 'transparent', borderRadius: 20, borderBottomWidth: 0}]}
            >
                <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'center', gap: 8}}>
                    <Ionicons name={getIcon()} size={18} color={isSelected ? 'white' : 'black'} />
                    <Text style={{textAlign:'center', color: isSelected ? 'white' : 'black'}}>{type}</Text>
                </View>
            </Pressable>
        );
    };


    const handleRequestPress = (request: any) => {
        setRequestID(parseInt(request.request_id));
        if (selectedType === 'One-Time' || selectedType === 'Routine') {
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

    <View style={[styles.card, {borderRadius: 0}]}>
        <View style={patientDetailStyles.scheduleTypeContainer}> 
            {renderServiceTypeButton('One-Time')}
            {renderServiceTypeButton('Routine')}
            {renderServiceTypeButton('Care Plans')}
        </View>
    </View>
    <ScrollView
      refreshControl={
        <RefreshControl
          refreshing={selectedType === 'One-Time' ? isFetchingOneTimeData : selectedType === 'Routine' ? isFetchingRoutineData : isFetchingCarePlans}
          onRefresh={() => selectedType === 'One-Time' ? refetchOneTimeData() : selectedType === 'Routine' ? refetchRoutineData() : refetchCarePlans()}
          colors={['#4454c3']}
          tintColor="#4454c3"
        />
      } >
      {/* OneTime Tab*/}
      {selectedType === 'One-Time' && oneTimeData?.map((service) => (
          <Pressable key={service.request_id} onPress={() => handleRequestPress(service)} style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}>
              <View style={styles.serviceCard}>
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

                          {/* Facility */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="business-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>
                              {service.facility_name || 'No Facility'}
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
      {selectedType === 'Routine' && (
        <View>
          {routineData?.map(service => (
          <Pressable key={service.request_id} onPress={() => handleRequestPress(service)} style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}>
              <View style={styles.serviceCard}>
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

                          {/* Facility */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="business-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>
                              {service.facility_name || 'No Facility'}
                            </Text>
                          </View>

                          {/* Status */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="checkmark-circle-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>{service.status}</Text>
                          </View>
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="help-circle-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>
                              {service.care_plan || 'No Assigned care Plan'}
                            </Text>
                          </View>
                      </View>
                  </View>
              </View>
          </Pressable>
          ))}
        </View>
      )}

      {/* Care Plans Tab */}
      {selectedType === 'Care Plans' && (
        <View style={{paddingHorizontal: 10}}>
          {carePlansData?.map(carePlan => (
            <Pressable 
              key={carePlan.care_plan_id} 
              onPress={() => {
                setCarePlanID?.(parseInt(carePlan.care_plan_id));
                router.push('/(Patient_tabs)/care_plan/routine');
              }}
              style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}
            >
              <View style={[styles.carePlanCard, {marginHorizontal: 10}]}> 
                <View style={styles.cardRow}>
                  <Text style={styles.cardTitle}>{carePlan.plan_name}</Text>
                  <View style={styles.statusContainer}>
                    <Text style={styles.statusText}>{carePlan.status}</Text>
                  </View>
                </View>
                <View style={styles.cardRow}>
                  <Text style={styles.planTypeText}>{carePlan.plan_type}</Text>
                  <Ionicons name="chevron-forward" size={20} color="#6b86b5" />
                </View>
                <View style={[styles.cardRow, {justifyContent: 'flex-start'}]}>
                  <Ionicons name="calendar-outline" size={16} color="#6b86b5" />
                  <Text style={styles.startDateText}>Started: {carePlan.start_date}</Text>
                </View>
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
    paddingHorizontal: 10,
    paddingVertical: 10,
    alignItems: 'flex-start',
    justifyContent: 'center',
    borderRadius: 8,
    backgroundColor: 'white',
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 1,
  },

  serviceCard: {
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

  serviceDetails: {
  color: '#7066ac',
  fontSize: 10,
  fontFamily: 'poppins'
},

  carePlanCard: {
    paddingHorizontal: 10,
    paddingVertical: 10,
    alignItems: 'flex-start',
    justifyContent: 'center',
    borderRadius: 8,
    backgroundColor: 'white',
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 1,
  },

  cardRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    width: '100%',
    paddingBottom: 5,
    paddingTop: 3
  },

  cardTitle: {
    fontSize: 16,
    color: 'black',
  },

  statusContainer: {
    borderRadius: 25,
    paddingHorizontal: 10,
    paddingVertical: 5,
    borderWidth: 0.1,
    borderColor: 'forestgreen',
    backgroundColor: '#bbf7d0',
  },

  statusText: {
    fontSize: 12,
    color: 'forestgreen',
    fontWeight: '600',
  },

  planTypeText: {
    fontSize: 14,
    color: '#6b86b5',
  },

  startDateText: {
    fontSize: 12,
    color: '#6b86b5',
    marginLeft: 5,
  },

});