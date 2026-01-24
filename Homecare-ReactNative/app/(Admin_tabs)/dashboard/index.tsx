import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import {Picker} from '@react-native-picker/picker';
import { useLogoutMutation } from '@/src/options/authenticationQueryOptions';

export default function PatientDashboard() {
  const router = useRouter();
  const [selectedLocation, setSelectedLocation] = useState('All Locations');
  const logoutMutation = useLogoutMutation();
  
  const handleLogout = async () => {
    try {
      await logoutMutation.mutateAsync();
      router.replace('/login');
    } catch (error) {
      console.error('Logout failed:', error);
      // Still navigate to login even if API call fails
      router.replace('/login');
    }
  };
  const locations = [
    {id: 1, branch: 'All Locations'},
    {id: 2, branch: 'Mandaue Clinic'},
    {id: 3, branch: 'Lapu-Lapu Clinic'},
    {id: 4, branch: 'Banilad Clinic'},
    {id: 5, branch: 'Guadalupe Clinic'},
  ]
  const items = [
    { id: 1, name: 'heart-outline', label: 'Health Records', route: 'health_records' },
    { id: 2, name: 'time-outline', label: 'Visit History', route: 'visit_history' },
    { id: 3, name: 'people-outline', label: 'Care Providers', route: 'care_providers' },
    { id: 4, name: 'document-text-outline', label: 'Clinical Notes', route: 'clinical_notes' },
    { id: 5, name: 'home-outline', label: 'Services', route: 'services' },
    { id: 6, name: 'calendar-outline', label: 'Calendar', route: 'calendar' },
    { id: 7, name: 'folder-outline', label: 'Files', route: 'files' },
    { id: 8, name: 'card-outline', label: 'Bills', route: 'bills' },
  ];

   const items2 = [
      { id: 1, name: 'medkit', label: 'Doctors', number: 4 },
      { id: 2, name: 'heart', label: 'Nurses',number: 1 },
      { id: 3, name: 'hand-left', label: 'Caregivers' , number: 2},
    ];
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa'
  }} edges={['top']}>

    <View style={{ flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginHorizontal:15, marginVertical: 20}}>

      <View style={styles.header}>
        <Image source={require('../../../assets/images/MisterMatres.png')}
        style={{ width: 55, height: 55, marginLeft: 15, borderRadius: 30 }} 
        resizeMode="cover"
        />
        <View>
          <Text style={{color: '#596389' , fontWeight: 'bold', fontSize: 14}}>Doctor Admin</Text>
          <View style={{ flexDirection: 'row', alignItems: 'center' }}>
            <Ionicons name="checkmark-circle" size={16} color="#596389" style={{ marginRight: 4 }} />
            <Text style={{ color: '#596389', fontSize: 12 }}>Fully Verified</Text>
          </View>
        </View>
      </View>

      <Pressable style={styles.iconCircle} onPress={handleLogout}>
        <Ionicons name="log-out-outline" size={24} color="#4454c3" />
      </Pressable>

    </View>
    <ScrollView style={{paddingHorizontal: 15, }}>

        <Text style={styles.categoryLabel}>Locations</Text>
        <View style={{backgroundColor: 'white', borderRadius: 10, marginHorizontal: 15, marginBottom: 10, paddingHorizontal: 10,}}>
            <Picker
              selectedValue={selectedLocation}
              onValueChange={(itemValue) => setSelectedLocation(itemValue)}
              style={{ color: '#8e95af', fontSize: 10 }}      
            >                
              {locations.map((location, index) => (
                <Picker.Item key={index} label={location.branch} value={location.branch} />
                ))}
            </Picker>
        </View>
    
        <View style={styles.card}>
          <View style={styles.grid}>
            {items.map((item, index) => (
              <View key={index} style={styles.item}>
                <Pressable style={styles.iconCircle} onPress={()=> router.push(`/(Admin_tabs)/dashboard/patient_worklist`)}>
                  <Ionicons name={item.name as any} size={30} color="#8e98db" />
                </Pressable>
                <Text style={styles.routeLabel}>{item.label}</Text>
              </View>
            ))}
          </View>          
        </View>

        <Text style={styles.categoryLabel}>Staff</Text>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} 
        contentContainerStyle={{flexDirection: 'row' ,justifyContent: 'space-between'}}>
            {items2.map(item => (
              <View key={item.id} style={[styles.card, {width: 120, alignItems:'center'}]}>
                <Text style={styles.staffLabel}>{item.label}</Text>
                <Pressable style={[styles.iconCircle, {borderWidth: 0,width: 50, height: 50, borderRadius: 25,}]}>
                  <Ionicons name={item.name as any} size={30} color="#4454c3" />
                </Pressable>
                <Text style={[styles.staffLabel, {fontWeight: 'bold'}]}>{item.number}</Text>
              </View>
            ))}
        </ScrollView>
        <Text style={styles.categoryLabel}>Statistics</Text>
        
    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    padding: 20,
    marginHorizontal:15,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },
  header:{
    height: 60, 
    alignItems: 'center',  
    flexDirection: 'row',
    gap: 10
  },
  categoryLabel:{
    color: '#434e79', 
    fontSize: 20, 
    
    margin:10,
    fontWeight: 'bold'
  },
  grid: {
    flexDirection: 'row',
    flexWrap: 'wrap',
    justifyContent: 'space-between',
  },
  item: {
    width: '22%', 
    alignItems: 'center',
    marginVertical: 10,
  },
  iconCircle: {
    borderRadius: 25,
    padding: 10,
    borderColor: '#8e95af',
    borderWidth:0.5
  },
  routeLabel: {
    fontSize: 12,
    color: '#4b5563',
    textAlign: 'center',
    marginTop: 6,
  },
  staffLabel: {
    fontSize: 14,
    color: '#434e79',
    textAlign: 'center',

  },
});