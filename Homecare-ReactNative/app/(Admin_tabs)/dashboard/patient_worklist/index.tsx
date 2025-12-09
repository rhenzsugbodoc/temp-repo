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
          <Text style={styles.headerTitle}>Patients</Text>
          <View style={styles.headerIcons}>
            {/* <Ionicons name="time-outline" size={22} color="white" />
            <Ionicons name="location-outline" size={22} color="white" /> */}
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

      {/* pickerContainer  && pickerBox*/}
        <View style={{flexDirection: 'row', gap: 10, marginVertical: 12, paddingHorizontal: 40}}>
            <View style={styles.pickerContainer}>
              <Picker
                selectedValue={selectedValue}
                onValueChange={(itemValue) => setSelectedValue(itemValue)}
                style={{ flex: 1, color: '#b7aac0' }}
                
              >
                <Picker.Item label="Assisted Living" value="assisted_living" />
                <Picker.Item label="Nursing Care" value="nursing_care" />
                <Picker.Item label="Companionship" value="companionship" />
                <Picker.Item label="Therapy" value="nursing_care" />
              </Picker>
            </View>

            {/* Second Picker */}
            <View style={styles.pickerContainer}>
              <Picker
                selectedValue={selectedSort}
                onValueChange={(itemValue) => setSelectedSort(itemValue)}
                style={{ flex: 1, color: '#b7aac0' }}
              >
                <Picker.Item label="Sort By: Name" value="name" />
                <Picker.Item label="Sort By: Popularity" value="popularity" />
              </Picker>
            </View>
          
        </View>

      <Pressable style={styles.iconCircle} onPress={()=> router.push(`/(Admin_tabs)/dashboard/patient_worklist/patient_details`)}><Text>RAH</Text></Pressable>

      {/* care team list */}
      <View style={[styles.grid, {marginHorizontal: 30}]}>
        {careTeamList.map(member => (
            <View key={member.id} style={[styles.gridItem, styles.card]}>
            <Pressable onPress={() => router.push(`/(Admin_tabs)/dashboard/patient_worklist`)} style={({ pressed }) => [{  opacity: pressed ? 0.8 : 1 }]}>
                <View style={{alignItems: 'center', gap: 5}}>
                  <View style={[styles.iconCircle, { width: 50, height: 50, borderRadius: 25, alignItems: 'center', justifyContent: 'center' }]}>
                      <Ionicons name={member.icon as any} size={30} color="#6366f1" />
                  </View>
                  <Text style={styles.label}>{member.name}</Text>
                  <Text style={styles.label}>{member.role}</Text>
                  <Text style={styles.label}>{member.episode}</Text>
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