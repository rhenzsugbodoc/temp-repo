import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, RefreshControl, FlatList, useWindowDimensions } from 'react-native';
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

export default function PatientRequestList() {
    const router = useRouter();
  const { width, height } = useWindowDimensions();
    const { setRequestID } = useCarePlan();
    const { setCarePlanID } = useAdminCarePlan();
    const [patientID, setPatientID] = useState<number | null>(null);
    const [selectedType, setSelectedType] = useState<'One-Time' | 'Routine' | 'Care Plans'>('One-Time');
  const isTablet = width >= 768;
  const isLandscape = width > height;
  const requestListColumns = isTablet ? (isLandscape ? 3 : 2) : 1;

  const getRequestCardWrapperStyle = () => {
    if (requestListColumns === 1) {
      return { flex: 1, maxWidth: '100%' as const };
    }

    if (requestListColumns === 2) {
      return { flex: 1, maxWidth: '48%' as const };
    }

    return { flex: 1, maxWidth: '31%' as const };
  };
    
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

    const handleCarePlanPress = (carePlan: any) => {
      setCarePlanID?.(parseInt(carePlan.care_plan_id));
      router.push('/(Patient_tabs)/care_plan/routine');
    };

    const getStatusStyle = (status: string) => {
        const statusLower = status.toLowerCase();
        
        if (statusLower.includes('pending')) {
            return {
                backgroundColor: '#e4e6f6',
                borderColor: '#4454c3',
                color: '#293376',
            };
        } else if (statusLower.includes('confirmed')) {
            return {
                backgroundColor: '#bbf7d0',
                borderColor: 'forestgreen',
                color: 'forestgreen',
            };
        } else if (statusLower.includes('Active')) {
            return {
                backgroundColor: '#bbf7d0',
                borderColor: 'forestgreen',
                color: 'forestgreen',
            };
        } else if (statusLower.includes('completed')) {
            return {
                backgroundColor: '#f4d5d8',
                borderColor: '#97122e',
                color: '#97122e',
            };
        } else if (statusLower.includes('cancel')) {
            return {
                backgroundColor: '#e9d5ff',
                borderColor: '#7c3aed',
                color: '#7c3aed',
            };
        } else if (statusLower.includes('cancel')) {
            return {
                backgroundColor: '#e9d5ff',
                borderColor: '#7c3aed',
                color: '#7c3aed',
            };
        }
        return {
            backgroundColor: '#e5e7eb',
            borderColor: '#6b7280',
            color: '#374151',
        };
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
      {selectedType === 'One-Time' && (
        <FlatList
          key={`one-time-${requestListColumns}`}
          data={oneTimeData || []}
          scrollEnabled={false}
          numColumns={requestListColumns}
          columnWrapperStyle={requestListColumns > 1 ? { justifyContent: 'space-around', paddingHorizontal: 10 } : undefined}
          contentContainerStyle={requestListColumns === 1 ? { paddingHorizontal: 10 } : undefined}
          keyExtractor={(item) => item.request_id.toString()}
          renderItem={({ item: service }) => {
            const statusStyle = getStatusStyle(service.status);

            return (
              <View style={getRequestCardWrapperStyle()}>
                <View style={styles.serviceCard}>
                    <View style={{flexDirection: 'row', flex: 1, gap: 10}}>
                        {/* <View style={{ flex: 4, justifyContent: 'center'}}>
                            <Image source={require('@/assets/images/MisterMatres.png')} resizeMode="cover" 
                            style={{  width: '100%', height: 120 , borderRadius: 5 }} />
                        </View> */}
                        <View style={{ flex: 5, gap:5,  justifyContent: 'center'}}>
                          
                            <View style={{ flexDirection: 'row', alignItems: 'center', gap: 6, flexWrap: 'wrap' }}>
                              <Text style={{ fontWeight: 'bold', fontSize: 14, color: '#4454c3', fontFamily: 'poppins', flex: 1 }} numberOfLines={2}>{service.service_name}</Text>
                              <View style={[styles.statusPill, { backgroundColor: statusStyle.backgroundColor, borderColor: statusStyle.borderColor }]}>
                                <Text style={[styles.statusPillText, { color: statusStyle.color }]}>{service.status}</Text>
                              </View>
                            </View>

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
                              <Text style={styles.serviceDetails} numberOfLines={1}>
                                {service.facility_name || 'No Facility'}
                              </Text>
                            </View>

                    <View style={styles.viewDetailsButtonContainer}>
                      <Pressable onPress={() => handleRequestPress(service)} style={styles.viewDetailsButton}>
                        <Text style={styles.viewDetailsButtonText}>View Details</Text>
                      </Pressable>
                    </View>
                        </View>
                    </View>


 
                </View>
              </View>
            );
          }}
        />
      )}
      {/* RoutineTab */}
      {selectedType === 'Routine' && (
        <FlatList
          key={`routine-${requestListColumns}`}
          data={routineData || []}
          scrollEnabled={false}
          numColumns={requestListColumns}
          columnWrapperStyle={requestListColumns > 1 ? { justifyContent: 'space-around', paddingHorizontal: 10 } : undefined}
          contentContainerStyle={requestListColumns === 1 ? { paddingHorizontal: 10 } : undefined}
          keyExtractor={(item) => item.request_id.toString()}
          renderItem={({ item: service }) => {
            const statusStyle = getStatusStyle(service.status);
            const routineCarePlan = (service as any)?.care_plan;

            return (
              <View style={getRequestCardWrapperStyle()}>
                <View style={styles.serviceCard}>
                    <View style={{flexDirection: 'row', flex: 1, gap: 10}}>
                        {/* <View style={{ flex: 4, justifyContent: 'center'}}>
                            <Image source={require('@/assets/images/MisterMatres.png')} resizeMode="cover" 
                            style={{  width: '100%', height: 120 , borderRadius: 5 }} />
                        </View> */}
                        <View style={{ flex: 5, gap:5,  justifyContent: 'center'}}>
                          
                            <View style={{ flexDirection: 'row', alignItems: 'center', gap: 6, flexWrap: 'wrap' }}>
                              <Text style={{ fontWeight: 'bold', fontSize: 14, color: '#4454c3', fontFamily: 'poppins', flex: 1 }} numberOfLines={2}>{service.service_name}</Text>
                              <View style={[styles.statusPill, { backgroundColor: statusStyle.backgroundColor, borderColor: statusStyle.borderColor }]}>
                                <Text style={[styles.statusPillText, { color: statusStyle.color }]}>{service.status}</Text>
                              </View>
                            </View>

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
                              <Text style={styles.serviceDetails} numberOfLines={1}>
                                {service.facility_name || 'No Facility'}
                              </Text>
                            </View>
                            
                            {/* Care Plan */}
                            <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                              <Ionicons name="help-circle-outline" size={12} color="#7066ac" />
                              <Text style={styles.serviceDetails} numberOfLines={1}>
                                {routineCarePlan || 'No Assigned care Plan'}
                              </Text>
                            </View>


                        <View style={styles.viewDetailsButtonContainer}>
                          <Pressable onPress={() => handleRequestPress(service)} style={styles.viewDetailsButton}>
                            <Text style={styles.viewDetailsButtonText}>View Details</Text>
                          </Pressable>
                        </View>
                                               
         
                   
                        </View>
                    </View>

 
                </View>
              </View>
            );
          }}
        />
      )}

      {/* Care Plans Tab */}
      {selectedType === 'Care Plans' && (
        <FlatList
          data={carePlansData || []}
          scrollEnabled={false}
          key={`care-plans-${requestListColumns}`}
          numColumns={requestListColumns}
          columnWrapperStyle={requestListColumns > 1 ? { justifyContent: 'space-around', paddingHorizontal: 10 } : undefined}
          keyExtractor={(item) => item.care_plan_id.toString()}
          contentContainerStyle={requestListColumns === 1 ? { paddingHorizontal: 10 } : undefined}
          renderItem={({ item: carePlan }) => {
            return (
              <View style={getRequestCardWrapperStyle()}>
                <View 
                
                  
                >
                  <View style={styles.carePlanCard}> 
                    <View style={styles.cardRow}>
                      <Text style={{ fontSize: 14, color: '#4454c3', fontFamily: 'poppins', fontWeight: 'bold' }} numberOfLines={1}>{carePlan.plan_name}</Text>
                      <View style={[styles.statusPill, { backgroundColor: getStatusStyle(carePlan.status).backgroundColor, borderColor: getStatusStyle(carePlan.status).borderColor }]}>
                        <Text style={[styles.statusPillText, { color: getStatusStyle(carePlan.status).color }]}>{carePlan.status}</Text>
                      </View>
                    </View>
                    <View style={styles.cardRow}>
                      <Text style={{ fontSize: 14, color: '#6b86b5' }}>{carePlan.plan_type}</Text>
                      <Ionicons name="chevron-forward" size={20} color="#6b86b5" />
                    </View>
                    <View style={[styles.cardRow, {justifyContent: 'flex-start'}]}>
                      <Ionicons name="calendar-outline" size={16} color="#6b86b5" />
                      <Text style={{ fontSize: 12, color: '#6b86b5', marginLeft: 5 }} numberOfLines={1}>Started: {carePlan.start_date}</Text>
                    </View>

                <View style={styles.viewDetailsButtonContainer}>
                  <Pressable onPress={() => handleCarePlanPress(carePlan)} style={styles.viewDetailsButton}>
                    <Text style={styles.viewDetailsButtonText}>View Details</Text>
                  </Pressable>
                </View>
                  </View>
        
                </View>

              </View>
            );
          }}
        />
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
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'center',
    maxWidth: 600,
    width: '100%',
  },

  viewDetailsButtonContainer: {
    width: '100%',
    alignItems: 'flex-end',
    marginTop: 10,
  },

  viewDetailsButton: {
    width: '100%',
    backgroundColor: '#4454c3',
    borderRadius: 8,
    paddingVertical: 8,
    alignItems: 'center',
    justifyContent: 'center',
  },

  viewDetailsButtonText: {
    color: 'white',
    fontSize: 12,
    fontWeight: '600',
  },

  statusPill: {
    borderRadius: 25,
    paddingHorizontal: 8,
    paddingVertical: 3,
    borderWidth: 1,
  },

  statusPillText: {
    fontSize: 10,
    fontWeight: '600',
  },

  serviceDetails: {
  color: '#4454c3',
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
    maxWidth: 600,
    width: '100%',
  },

  cardRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    flexWrap: 'wrap',
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