import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';



export default function RequestList() {
  const router = useRouter();


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
        <Text style={styles.headerTitle}>Care Member</Text>
        <View style={styles.headerIcons}>

        </View>
    </View>
    <ScrollView contentContainerStyle={{flexGrow: 1, backgroundColor: '#ffffff', marginHorizontal: 25,}}>
  
                <View style={{alignItems: 'center', gap: 5, marginTop: 10}}>
                    <View style={[styles.iconCircle, { width: 100, height: 100, borderRadius: 100, alignItems: 'center', justifyContent: 'center' }]}>
                        <Ionicons name={careTeamList[0].icon as any} size={50} color="#6366f1" />
                    </View>
                    <Text style={styles.label}>{careTeamList[0].name}</Text>
                    <Text style={styles.label}>{careTeamList[0].role}</Text>
                    <Text style={styles.label}>{careTeamList[0].episode}</Text>
                </View>

    </ScrollView>
    <View style={{marginTop: 'auto', flexDirection: 'row', backgroundColor: '#ffffff', justifyContent: 'space-between', marginHorizontal: 25, padding: 20}}>
        <Pressable style={[styles.cartButton, ]}>
            <Ionicons name="call" size={30} color="#ffffff" />
        </Pressable>
        <Pressable style={[styles.cartButton, ]}>
            <Ionicons name="chatbubble" size={30} color="#ffffff" />
        </Pressable>
        <Pressable onPress={()=> router.push(`/(Patient_tabs)/profile/`)}style={[styles.cartButton, ]}>
            <Ionicons name="mail" size={30} color="#ffffff" />
        </Pressable>
    </View>
    <View style={{backgroundColor: '#ffffff', borderWidth: 1, borderRadius: 20, borderColor: '#f60b0b', alignItems: 'center', padding: 10, marginHorizontal: 25 }}>
        <Text style={{color: '#f60b0b'}}>Request Staff Removal</Text>
    </View>
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
    fontSize: 13,
    color: '#53346a',
    textAlign: 'center',
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