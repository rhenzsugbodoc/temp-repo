import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import {usePatientsByFacility} from '@/src/options/Admin_patientsQueryOptions';
import {useFacilityCaregivers, useFacilityDoctors, useFacilityData} from '@/src/options/serviceRequestOptions'

export default function RequestList() {
  const router = useRouter();
  const [staffType, setStaffType] = useState<'caregivers' | 'doctors'>('caregivers');
  
  // Get facility data to extract facility_id
  const {data: facilityData} = useFacilityData();
  const facilityId = facilityData?.[0]?.facility_id;

  // Fetch caregivers and doctors
//   const {data: caregiverList, isLoading: loadingCaregivers, isFetching: isFetchingCaregivers, refetch: refetchCaregivers} = useFacilityCaregivers(facilityId || 0, !!facilityId);
  const {data: doctorList, isLoading: loadingDoctors, isFetching: isFetchingDoctors, refetch: refetchDoctors} = useFacilityDoctors(facilityId || 0, !!facilityId);

    const { data: caregiverList, isLoading: loadingCaregivers, isFetching: isFetchingCaregivers, refetch: refetchCaregivers } = useFacilityCaregivers(facilityId, {
    enabled: !!facilityId,
    });

  const [selectedValue, setSelectedValue] = useState('EOC');
  const [selectedSort, setSelectedSort] = useState('Sort By: Name');
  
  const handleRefresh = () => {
    if (staffType === 'caregivers') {
      refetchCaregivers();
      console.log('Caregiver List:', caregiverList);
    } else {
      refetchDoctors();
    }
  };

  const getAge = (dateOfBirth: string | undefined) => {
    if (!dateOfBirth) return '';
    const today = new Date();
    const birthDate = new Date(dateOfBirth);
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }
    return `${age}`;
  };

  const formatDate = (dateString: string | undefined) => {
    if (!dateString) return '';
    const date = new Date(dateString);
    const day = date.getDate();
    const month = date.toLocaleString('en-US', { month: 'short' });
    const year = date.getFullYear();
    return ` ${month} ${day}, ${year}`;
  };

  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView
      refreshControl={
        <RefreshControl
          refreshing={staffType === 'caregivers' ? isFetchingCaregivers : isFetchingDoctors}
          onRefresh={handleRefresh}
          colors={['#4454c3']}
          tintColor="#4454c3"
        />
      }
    >
        <View style={styles.headerContainer}>
          <View style={{flexDirection: 'row', alignItems: 'center', gap: 15}}>
            <Pressable onPress={() => router.back()} style={({ pressed }) => [{  opacity: pressed ? 0.8 : 1 }]}>
              <Ionicons name="chevron-back" size={22} color="white" />
            </Pressable>
            <Text style={styles.headerTitle}>Staff</Text>
          </View>
          <View style={styles.headerIcons}>
            <Pressable onPress={() => router.push(`/(Admin_tabs)/dashboard/patient_worklist/add_patient`)} style={({ pressed }) => [{  opacity: pressed ? 0.8 : 1 }]}>
              <Ionicons name="person-add-outline" size={22} color="white" />
            </Pressable>

          </View>
        </View>

        {/* <View style={styles.searchWrapper}>
          <View style={styles.searchContainer}>
            <TextInput
              placeholder="Search"
              style={styles.searchInput}
            />
            <Ionicons name="search" size={20} color="#999" />
          </View>
        </View> */}

  
        <View style={[styles.card, {borderRadius: 0}]}>
          <View style={styles.toggleContainer}> 
            <Pressable 
              onPress={() => setStaffType('caregivers')} 
              style={[styles.toggleButton, {backgroundColor: staffType==='caregivers'?'#4454c3':'transparent', borderRadius: 20}]}
            >
              <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'center', gap: 8}}>
                <Ionicons name="people-outline" size={18} color={staffType==='caregivers'?'white':'black'} />
                <Text style={{textAlign:'center', color: staffType==='caregivers'?'white':'black'}}>Caregivers</Text>
              </View>
            </Pressable>
            <Pressable 
              onPress={() => setStaffType('doctors')} 
              style={[styles.toggleButton, {backgroundColor: staffType==='doctors'?'#4454c3':'transparent', borderRadius: 20}]}
            >
              <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'center', gap: 8}}>
                <Ionicons name="medical-outline" size={18} color={staffType==='doctors'?'white':'black'} />
                <Text style={{textAlign:'center', color: staffType==='doctors'?'white':'black'}}>Doctors</Text>
              </View>
            </Pressable>
          </View>
        </View>

     

      {/* staff list */}
      <View style={[styles.grid, {margin: 20}]}>
        {staffType === 'caregivers' && caregiverList?.map(member => (
            <View key={member.caregiver_id} style={[styles.card]}>
            <Pressable onPress={() => {
              // Handle caregiver selection if needed
            }} style={({ pressed }) => [{  opacity: pressed ? 0.8 : 1 }]}>
                <View style={{alignItems: 'center',  flexDirection: 'row', justifyContent: 'space-between', gap: 15, width: '100%'}}>
                  <View style={{flexDirection: 'row', gap: 15, alignItems: 'center'}}>
                  <View style={[styles.iconCircle, { width: 40, height: 40, borderRadius: 25, alignItems: 'center', justifyContent: 'center' }]}>
                      <Ionicons name='medkit-outline' size={20} color="#6366f1" />
                  </View>
                  <View style={{alignItems: 'flex-start'}}>
                    <Text style={styles.cardTitle}>{member.professional_display_name}</Text>
                    <Text style={styles.label}>{member.caregiver_type}</Text>
                    <Text style={styles.label}>{member.phone_number || 'No phone'}</Text>
                  </View>
                  </View>
                  <Ionicons name="chevron-forward" size={20} color="#6b86b5" />
                </View>
            </Pressable>
            </View>
        ))}

        {staffType === 'doctors' && doctorList?.map(member => (
            <View key={member.doctor_id} style={[styles.card]}>
            <Pressable onPress={() => {
              // Handle doctor selection if needed
            }} style={({ pressed }) => [{  opacity: pressed ? 0.8 : 1 }]}>
                <View style={{alignItems: 'center',  flexDirection: 'row', justifyContent: 'space-between', gap: 15, width: '100%'}}>
                  <View style={{flexDirection: 'row', gap: 15, alignItems: 'center'}}>
                  <View style={[styles.iconCircle, { width: 40, height: 40, borderRadius: 25, alignItems: 'center', justifyContent: 'center' }]}>
                      <Ionicons name='medical-outline' size={20} color="#6366f1" />
                  </View>
                  <View style={{alignItems: 'flex-start'}}>
                    <Text style={styles.cardTitle}>{member.professional_display_name}</Text>
                    <Text style={styles.label}>{member.specialization || 'General'}</Text>
                    <Text style={styles.label}>{member.phone_number || 'No phone'}</Text>
                  </View>
                  </View>
                  <Ionicons name="chevron-forward" size={20} color="#6b86b5" />
                </View>
            </Pressable>
            </View>
        ))}
      </View>


    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    flexGrow: 1,
    backgroundColor: '#ffffff',
    borderRadius: 8,
    padding: 15,
    // marginHorizontal: 5,
    // marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'flex-start',
  },

    headerContainer: {
    backgroundColor: '#4F46E5',
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    padding: 20,
    paddingVertical: 20,
    // borderBottomLeftRadius: 25,
    // borderBottomRightRadius: 25,
  },

  headerTitle: {
    color: 'white',
    fontSize: 30,
    fontWeight: 'bold',
    fontFamily: 'poppins'
  },

  headerIcons: {
    // position: 'absolute',
    // right: 20,
    // top: 20,
    flexDirection: 'row',
    gap: 15,
  },

//   searchWrapper: {
//     width: '100%',
//     alignItems: 'center',
//     marginTop: -20,
//   },

//   searchContainer: {
//     width: '85%',
//     backgroundColor: 'white',
//     height: 40,
//     borderRadius: 20,
//     paddingHorizontal: 15,
//     paddingVertical: 10,
//     flexDirection: 'row',
//     alignItems: 'center',
//     elevation: 4,

//   },

//   searchInput: {
//     flex: 1,
//     fontSize: 16,
//     height: 45,
//   },
  pickerContainer: {
    
    backgroundColor: '#ffffff',
    flex: 1,
    height: 35,
    justifyContent: 'center',
    borderWidth: 0.1,
    borderRadius: 25,
    borderColor: '#ccc',
    overflow: 'hidden',
  },

  grid: {
    flexDirection: 'row',
    flexWrap: 'wrap',
    justifyContent: 'space-between',
  },
  gridItem: {
    width: '45%', 
    alignItems: 'center',
    marginVertical: 10,
   
  },
  iconCircle: {
    borderRadius: 25,

    padding: 10,
    backgroundColor: '#eef2ff',
  },
  cardTitle:{
    fontSize: 16,
    color: 'black',
    textAlign: 'center',
    marginTop: 6,
  },
  label: {
    fontSize: 12,
    color: '#6b7280',
    textAlign: 'center',
    marginTop: 6,
  },
  toggleContainer: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    gap: 10,
    width: '100%',
  },
  toggleButton: {
    flex: 1,
    paddingVertical: 10,
    paddingHorizontal: 15,
    alignItems: 'center',
    justifyContent: 'center',
  },
});