import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { patientDetailStyles } from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';


export default function RequestList() {
  const router = useRouter();
  const [detailType, setDetailType] = useState<'clinical-details' | 'care-plan' | 'patient-details' | ''>('');


  // useEffect(() => {
  //   // Fetch company list or any other data if needed
  // }, []);
    const careTeamList = [
    { id: 1, icon: 'person-outline', name: 'Dr. Maria Santos', role: 'Doctor', title: 'MD', episode: 'Chronic Disease Management (Diabetes)' },
    { id: 2, icon: 'person-outline', name: 'Nurse John Cruz', role: 'Nurse', title: 'RN', episode: 'Chronic Disease Management (Diabetes)' },
    { id: 3, icon: 'person-outline', name: 'Caregiver Ana Lopez', role: 'Caregiver', title: '', episode: 'Post-Surgical Therapy (Knee Replacement)' },
    { id: 4, icon: 'person-outline', name: 'Dr. Paolo Reyes', role: 'Doctor', title: 'MD', episode: 'Post-Surgical Therapy (Knee Replacement)' },
    { id: 5, icon: 'person-outline', name: 'Coordinator Liza Tan', role: 'Care Plan Coordinator', title: '', episode: 'Palliative End of Life Care (Terminal Cancer)' },
    { id: 6, icon: 'person-outline', name: 'Nurse Miguel Ramos', role: 'Nurse', title: 'RN', episode: 'Palliative End of Life Care (Terminal Cancer)' },
    { id: 7, icon: 'person-outline', name: 'Caregiver Carla Dela Cruz', role: 'Caregiver', title: '', episode: 'Chronic Disease Management (Diabetes)' },
    { id: 8, icon: 'person-outline', name: 'Dr. Antonio Villanueva', role: 'Doctor', title: 'MD', episode: 'Palliative End of Life Care (Terminal Cancer)' },
    { id: 9, icon: 'person-outline', name: 'Coordinator Sofia Garcia', role: 'Care Plan Coordinator', title: '', episode: 'Post-Surgical Therapy (Knee Replacement)' },
    ];
    const standaloneDetails = [
    { id: 1, label: 'Phone Number', value: '012312' },
    { id: 2, label: 'Email Address', value: 'rrjre@gmail' },
    { id: 3, label: 'Care Plans', value: '2' },
    { id: 4, label: 'Assigned Caregivers', value: ['mike tyson', 'jerome'].join(', ') }
    ];

    const interventionList = [
        { id: 1, schedule: 'Wednesdays, 4:00 PM', next_appointment: 'Oct 15, 4:00 PM', intervention: 'Physical Therapy', caregiver: 'John Doe' },
        { id: 2, schedule: 'Fridays, 10:00 AM', next_appointment: 'Oct 21, 4:00 PM', intervention: 'Occupational Therapy', caregiver: 'Jane Smith' },
        { id: 3, schedule: 'Mondays, 2:00 PM', next_appointment: 'Oct 5, 3:00 PM',intervention: 'Blood Glucose Monitoring', caregiver: 'Mike Johnson' },
        { id: 4, schedule: 'Tuesdays, 11:00 AM', next_appointment: 'Oct 30, 9:00 PM',intervention: 'Respiratory Therapy', caregiver: 'Emily Davis' },
        { id: 5, schedule: 'Thursdays, 3:00 PM', next_appointment: 'Oct 12, 12:00 PM',intervention: 'Wound Care', caregiver: 'Sarah Wilson' },
        { id: 6, schedule: 'Saturdays, 9:00 AM', next_appointment: 'Oct 17, 1:00 PM',intervention: 'Nutritional Counseling', caregiver: 'David Brown' },
    ]

    const interventionDetails = [
    { id: 1, label: "Schedule", key: "schedule" },
    { id: 2, label: "Next Appointment", key: "next_appointment" },
    { id: 3, label: "Intervention", key: "intervention" },
    { id: 4, label: "Caregiver", key: "caregiver" },
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
        {/* <Text style={styles.headerTitle}>Care Member</Text>
        <View style={styles.headerIcons}>

        </View> */}
    </View>
    <ScrollView contentContainerStyle={{  backgroundColor: 'transparent',marginHorizontal: 25,}}>

        <View style={patientDetailStyles.card}>

            <View style={[styles.iconCircle, { width: 70, height: 70, borderRadius: 100, alignItems: 'center', justifyContent: 'center', marginTop: 20, }]}>
                <Ionicons name={careTeamList[0].icon as any} size={40} color="#6366f1" />
            </View>
            <Text style={styles.label}>{careTeamList[0].name}</Text>
            
                <View style={patientDetailStyles.scheduleTypeContainer}> 
                    <Pressable onPress={() => setDetailType('clinical-details')} style={[patientDetailStyles.scheduleTypeButton, {borderBottomColor: detailType==='clinical-details'?'#4454c3':'transparent', borderBottomWidth: 5, borderBottomRightRadius: 0}]}>
                        <Text style={{textAlign:'center', color: detailType==='clinical-details'?'#4454c3':'#b1b1b1'}}>Clinical Details</Text>
                    </Pressable>
                    <Pressable onPress={() => setDetailType('care-plan')} style={[patientDetailStyles.scheduleTypeButton, {borderBottomColor: detailType==='care-plan'?'#4454c3':'transparent', borderBottomWidth: 5, borderBottomLeftRadius: 0, borderBottomRightRadius: 0}]}>
                        <Text style={{textAlign:'center', color: detailType==='care-plan'?'#4454c3':'#b1b1b1'}}>Care Plan</Text>
                    </Pressable>
                    <Pressable onPress={() => setDetailType('patient-details')} style={[patientDetailStyles.scheduleTypeButton, {borderBottomColor: detailType==='patient-details'?'#4454c3':'transparent', borderBottomWidth: 5, borderBottomLeftRadius: 0}]}>
                        <Text style={{textAlign:'center', color: detailType==='patient-details'?'#4454c3':'#b1b1b1' }}>Patient Details</Text>
                    </Pressable>
                </View>
       
        </View>
            {detailType==='care-plan' && interventionList.map(intervention => (
                <Pressable key={intervention.id} style={({ pressed }) => [patientDetailStyles.card, {opacity: pressed ? 0.8 : 1 }]}>
                    <View style={[patientDetailStyles.card, {paddingHorizontal: 20, borderWidth: 1, borderColor: '#b1b1b1'}]}>
                    {interventionDetails.map(detail => (
                        <View key={detail.id} style={{ flexDirection: 'row', width: '100%', justifyContent: 'space-between', marginBottom: 20, borderBottomWidth: 1, borderColor: '#e0e0e0', padding: 10, borderRadius: 10 }}>
                            <Text style={[patientDetailStyles.interventionText, { fontWeight: 'bold' }]}>{detail.label}:</Text>
                            <Text style={patientDetailStyles.interventionText}>{intervention[detail.key]}</Text>
                        </View>
                    ))}
                    </View>
                </Pressable>
            ))}
            
            {detailType==='patient-details' && 
            <View>
            <View style={patientDetailStyles.card}>

            </View>
            <View style={patientDetailStyles.card}>
                {standaloneDetails.map(detail => (
                    <View key={detail.id} style={{ flexDirection: 'row', width: '100%', justifyContent: 'space-between', marginBottom: 20, borderBottomWidth: 1, borderColor: '#e0e0e0', padding: 10, borderRadius: 10 }}>
                        <Text style={[patientDetailStyles.interventionText, { fontWeight: 'bold' }]}>{detail.label}:</Text>
                        <Text style={patientDetailStyles.interventionText}>{detail.value}</Text>
                    </View>
                ))}
            </View>
            </View>
            }
        <View style={{ flexDirection: 'row', justifyContent: 'space-between', padding: 10}}>
            <Pressable style={[styles.cartButton, ]}>
                <Ionicons name="call" size={30} color="#ffffff" />
            </Pressable>
            <Pressable style={[styles.cartButton, ]}>
                <Ionicons name="chatbubble" size={30} color="#ffffff" />
            </Pressable>
            <Pressable onPress={()=> router.push(`/(Patient_tabs)/profile`)}style={[styles.cartButton, ]}>
                <Ionicons name="mail" size={30} color="#ffffff" />
            </Pressable>
        </View>
        <View style={{ flexDirection: 'row', justifyContent: 'space-between', alignItems: 'center',  marginTop: 20 }}>
            
            <View style={{ flex: 1, backgroundColor: '#ffffff', borderWidth: 1, borderRadius: 20, borderColor: '#08a52f', padding: 10, marginHorizontal: 5, alignItems: 'center' }}>
                <Text style={{ color: '#08a52f' }}>Edit Patient</Text>
            </View>

            <View style={{ flex: 1, backgroundColor: '#ffffff', borderWidth: 1, borderRadius: 20, borderColor: '#f60b0b', padding: 10, marginHorizontal: 5, alignItems: 'center' }}>
                <Text style={{ color: '#f60b0b' }}>Delete Patient</Text>
            </View>

        </View>
 
    </ScrollView>

  </SafeAreaView>;
}


const styles = StyleSheet.create({



headerContainer: {
    backgroundColor: '#4750c0',
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
    color: '#53346a',
    textAlign: 'center',
    fontWeight: 'bold',
    marginTop: 6,
  },

  cartButton: {
    // position: 'absolute',
    // bottom: 20,
    backgroundColor: '#53346a',
    padding: 15,
    borderRadius: 30,
    elevation: 3,
   
  },

});