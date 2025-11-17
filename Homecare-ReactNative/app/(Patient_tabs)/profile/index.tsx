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

  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView >
        <View style={styles.headerContainer}>
            <View style={{flex: 3}}>
                <Text style={styles.headerTitle}>Jamal Jones</Text>
                <Text style={[styles.headerTitle, { fontSize: 16 }]}>Patient ID: 2803172</Text>
                <View style={{marginTop: 10,borderRadius: 25, backgroundColor: 'white', height: 35, width: 90, justifyContent: 'center', alignItems: 'center'}}>
                    <Text style={{fontSize: 10}}>Senior citizen</Text>
                </View>
            </View>
          
          <View style={{flex:2, marginTop: -60}}>
            <Ionicons name="create-outline" size={30} color="white" />
            
          </View>
        </View>


    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    
    backgroundColor: '#ffffff',
    borderRadius: 1,
    padding: 15,
    // marginHorizontal: 5,
    // marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'center',
  },

headerContainer: {
    backgroundColor: '#4F46E5',
    alignItems: 'center',
    flex:1,
    flexDirection: 'row',
    justifyContent: 'space-between',
    padding: 25,
    height:180,
    paddingVertical: 30,
    borderBottomLeftRadius: 25,
    borderBottomRightRadius: 25,
  },

  headerTitle: {
    color: 'white',
    fontSize: 20,
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
    borderWidth: 1,
    borderColor: '#53346a',
    padding: 10,
    backgroundColor: '#eef2ff',
  },
  label: {
    fontSize: 12,
    color: '#53346a',
    textAlign: 'center',
    marginTop: 6,
  },
});