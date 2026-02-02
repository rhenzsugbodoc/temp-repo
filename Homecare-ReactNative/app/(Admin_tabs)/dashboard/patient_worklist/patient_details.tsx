import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { patientDetailStyles } from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';
import { useAdminPatients } from '@/src/context/Admin-PatientsContext';
import { useCarePlansByPatient } from '@/src/options/Admin_carePlanQueryOptions';


export default function RequestList() {
  const router = useRouter();
  const { selectedPatient } = useAdminPatients();
  const [detailType, setDetailType] = useState<'clinical-details' | 'care-plan' | 'patient-details' | ''>('');

  // Fetch care plans for the selected patient
  const { data: carePlanList, isLoading: loadingCarePlanList, refetch: refetchCarePlanList } = useCarePlansByPatient(
    selectedPatient?.patient_id || 0,
    !!selectedPatient?.patient_id
  );

  
  const getAge = (dateOfBirth: string | undefined) => {
    if (!dateOfBirth) return '';
    const today = new Date();
    const birthDate = new Date(dateOfBirth);
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }
    return `${age} Years Old`;
  };

  // useEffect(() => {
  //   // Fetch company list or any other data if needed
  // }, []);

    const standaloneDetails = [
    { id: 1, label: 'Phone Number', value: '012312' },
    { id: 2, label: 'Email Address', value: 'rrjre@gmail' },
    { id: 3, label: 'Care Plans', value: '2' },
    { id: 4, label: 'Assigned Caregivers', value: ['mike tyson', 'jerome'].join(', ') }
    ];


  const [selectedValue, setSelectedValue] = useState('EOC');
  const [selectedSort, setSelectedSort] = useState('Sort By: Name');

  const handleCompanyPress = (company: any) => {
    // router.push(`/request_service/${company.id}`);
  };
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>


    <View style={styles.headerContainer}>
        <Pressable onPress={() => router.back()}>
          <Ionicons name="arrow-back" size={20} color="white" />
        </Pressable>
        <View>
          <Text style={styles.label}>{selectedPatient?.first_name} {selectedPatient?.last_name}</Text>
          <Text style={[{fontSize: 15, color: 'white'}]}>{getAge(selectedPatient?.date_of_birth)}</Text>
        </View>
    </View>
    <ScrollView contentContainerStyle={{  backgroundColor: 'transparent',}}>

        <View style={[styles.card, {borderRadius: 0}]}>


            
            
                <View style={patientDetailStyles.scheduleTypeContainer}> 
                    <Pressable onPress={() => setDetailType('clinical-details')} style={[patientDetailStyles.scheduleTypeButton, {backgroundColor: detailType==='clinical-details'?'#4454c3':'transparent', borderRadius: 20, borderBottomWidth: 0}]}>
                        <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'center', gap: 8}}>
                          <Ionicons name="medical-outline" size={18} color={detailType==='clinical-details'?'white':'black'} />
                          <Text style={{textAlign:'center', color: detailType==='clinical-details'?'white':'black'}}>Clinical Details</Text>
                        </View>
                    </Pressable>
                    <Pressable onPress={() => setDetailType('care-plan')} style={[patientDetailStyles.scheduleTypeButton, {backgroundColor: detailType==='care-plan'?'#4454c3':'transparent', borderRadius: 20, borderBottomWidth: 0}]}>
                        <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'center', gap: 8}}>
                          <Ionicons name="clipboard-outline" size={18} color={detailType==='care-plan'?'white':'black'} />
                          <Text style={{textAlign:'center', color: detailType==='care-plan'?'white':'black'}}>Care Plan</Text>
                        </View>
                    </Pressable>
                    <Pressable onPress={() => setDetailType('patient-details')} style={[patientDetailStyles.scheduleTypeButton, {backgroundColor: detailType==='patient-details'?'#4454c3':'transparent', borderRadius: 20, borderBottomWidth: 0}]}>
                        <View style={{flexDirection: 'row', alignItems: 'center', justifyContent: 'center', gap: 8}}>
                          <Ionicons name="person-outline" size={18} color={detailType==='patient-details'?'white':'black'} />
                          <Text style={{textAlign:'center', color: detailType==='patient-details'?'white':'black'}}>Patient Details</Text>
                        </View>
                    </Pressable>
                </View>
       
        </View>
            {detailType==='care-plan' && carePlanList?.map(carePlan => (
                <View key={carePlan.care_plan_id} style={[styles.card, {marginHorizontal: 10}]}> 
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
            ))}
            
            {detailType==='patient-details' && 
            <View style={{paddingHorizontal: 10}}>
                <Text style={styles.sectionTitle}>Personal Information</Text>
                
                <View style={styles.detailCard}>
                  <View style={styles.detailRow}>
                    <Ionicons name="person-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Full Name</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.first_name} {selectedPatient?.last_name}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="mail-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Email Address</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.email_address}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="call-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Phone Number</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.phone_number || 'Not provided'}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="calendar-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Date of Birth</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.date_of_birth || 'Not provided'}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="male-female-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Gender</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.gender || 'Not provided'}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="home-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Home Address</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.home_address || 'Not provided'}</Text>
                    </View>
                  </View>
                </View>

                <Text style={styles.sectionTitle}>Medical Information</Text>
                
                <View style={styles.detailCard}>
                  <View style={styles.detailRow}>
                    <Ionicons name="medical-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Medical Record Number</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.medical_record_number || 'Not provided'}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="water-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Blood Type</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.blood_type || 'Not provided'}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="warning-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Allergies</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.allergies || 'None'}</Text>
                    </View>
                  </View>

                  <View style={styles.detailRow}>
                    <Ionicons name="fitness-outline" size={20} color="#4F46E5" />
                    <View style={styles.detailContent}>
                      <Text style={styles.detailLabel}>Chronic Conditions</Text>
                      <Text style={styles.detailValue}>{selectedPatient?.chronic_conditions || 'None'}</Text>
                    </View>
                  </View>
                </View>

                <View style={{ flexDirection: 'row', justifyContent: 'space-between', alignItems: 'center', marginTop: 20, marginBottom: 20 }}>
                  <Pressable style={{ flex: 1, backgroundColor: '#ffffff', borderWidth: 1, borderRadius: 20, borderColor: '#08a52f', padding: 10, marginHorizontal: 5, alignItems: 'center' }}>
                    <Text style={{ color: '#08a52f' }}>Edit Patient</Text>
                  </Pressable>

                  <Pressable style={{ flex: 1, backgroundColor: '#ffffff', borderWidth: 1, borderRadius: 20, borderColor: '#f60b0b', padding: 10, marginHorizontal: 5, alignItems: 'center' }}>
                    <Text style={{ color: '#f60b0b' }}>Delete Patient</Text>
                  </Pressable>
                </View>
            </View>
            }
  
     
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

  headerContainer: {
    backgroundColor: '#4750c0',
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'flex-start',
    gap: 15,
    padding: 25,
    paddingVertical: 10,

  },

headerTitle: {
    color: 'white',
    fontSize: 30,
    fontWeight: 'bold',
    fontFamily: 'poppins'
  },

headerIcons: {
    //position: 'absolute',
    // right: 20,
    // top: 20,
    flexDirection: 'row',
    gap: 15,
  },
  iconCircle: {
    borderRadius: 25,
    borderWidth: 1,
    borderColor: '#53346a',
    padding: 10,
    backgroundColor: '#eef2ff',
  },
  label: {
    fontSize: 15,
    color: 'white',
    textAlign: 'center',
    fontWeight: 'bold',
    marginTop: 6,
  },

  sectionTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#333',
    marginTop: 20,
    marginBottom: 12,
  },

  detailCard: {
    backgroundColor: '#ffffff',
    borderRadius: 12,
    padding: 16,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    marginBottom: 16,
  },

  detailRow: {
    flexDirection: 'row',
    alignItems: 'center',
    paddingVertical: 12,
    borderBottomWidth: 1,
    borderBottomColor: '#f0f0f0',
  },

  detailContent: {
    marginLeft: 12,
    flex: 1,
  },

  detailLabel: {
    fontSize: 12,
    color: '#666',
    marginBottom: 4,
  },

  detailValue: {
    fontSize: 15,
    color: '#333',
    fontWeight: '500',
  },


});