import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import {usePatientsByFacility} from '@/src/options/Admin_patientsQueryOptions';
import { useAdminPatients } from '@/src/context/Admin-PatientsContext';


export default function RequestList() {
  const router = useRouter();
 const {data: patientList, isLoading: loadingPatientList, isFetching: isFetchingPatientList, refetch: isRefetchingPatientList} = usePatientsByFacility(true);
 const { setSelectedPatient } = useAdminPatients();

  // useEffect(() => {
  //   // Fetch company list or any other data if needed
  // }, []);

  const [selectedValue, setSelectedValue] = useState('EOC');
  const [selectedSort, setSelectedSort] = useState('Sort By: Name');
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



    <ScrollView >
        <View style={styles.headerContainer}>
          <Text style={styles.headerTitle}>Patients</Text>
          <View style={styles.headerIcons}>
            <Pressable onPress={() => router.push(`/(Admin_tabs)/dashboard/patient_worklist/add_patient`)} style={({ pressed }) => [{  opacity: pressed ? 0.8 : 1 }]}>
              <Ionicons name="person-add-outline" size={22} color="white" />
            </Pressable>

          </View>
        </View>

        <View style={styles.searchWrapper}>
          <View style={styles.searchContainer}>
            <TextInput
              placeholder="Search"
              style={styles.searchInput}
            />
            <Ionicons name="search" size={20} color="#999" />
          </View>
        </View>

     

      {/* care team list */}
      <View style={[styles.grid, {margin: 20}]}>
        {patientList?.map(member => (
            <View key={member.patient_id} style={[styles.card]}>
            <Pressable onPress={() => {
              setSelectedPatient(member);
              router.push(`/(Admin_tabs)/dashboard/patient_worklist/patient_details`);
            }} style={({ pressed }) => [{  opacity: pressed ? 0.8 : 1 }]}>
                <View style={{alignItems: 'center',  flexDirection: 'row', justifyContent: 'space-between', gap: 15, width: '100%'}}>
                  <View style={{flexDirection: 'row', gap: 15, alignItems: 'center'}}>
                  <View style={[styles.iconCircle, { width: 40, height: 40, borderRadius: 25, alignItems: 'center', justifyContent: 'center' }]}>
                      <Ionicons name='person-outline' size={20} color="#6366f1" />
                  </View>
                  <View style={{alignItems: 'flex-start'}}>
                    <Text style={styles.cardTitle}>{member.first_name} {member.last_name}</Text>
                    
                    <Text style={styles.label}>{getAge(member.date_of_birth)} years old • {member.gender}</Text>
                    <Text style={styles.label}>{formatDate(member.date_of_birth)}</Text>
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
    padding: 25,
    paddingVertical: 30,
    borderBottomLeftRadius: 25,
    borderBottomRightRadius: 25,
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

  searchWrapper: {
    width: '100%',
    alignItems: 'center',
    marginTop: -20,
  },

  searchContainer: {
    width: '85%',
    backgroundColor: 'white',
    height: 40,
    borderRadius: 20,
    paddingHorizontal: 15,
    paddingVertical: 10,
    flexDirection: 'row',
    alignItems: 'center',
    elevation: 4,

  },

  searchInput: {
    flex: 1,
    fontSize: 16,
    height: 45,
  },
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
});