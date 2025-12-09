import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import { useAuth } from '../../../src/context/AuthContext';

export default function PatientDashboard() {
  const router = useRouter();
  const { logoutUser, loggedInUser } = useAuth();

 const handleLogout = () => {
    logoutUser();        
    router.replace('/login');  
  };


  const items = [
    { id: 1, name: 'heart-outline', label: 'Health Records', route: 'health_records' },
    { id: 2, name: 'time-outline', label: 'Visit History', route: 'visit_history' },
    { id: 3, name: 'people-outline', label: 'Care Providers', route: 'care_team' },
    { id: 4, name: 'document-text-outline', label: 'Clinical Notes', route: 'clinical_notes' },
    { id: 5, name: 'home-outline', label: 'Services', route: 'services' },
    { id: 6, name: 'calendar-outline', label: 'Calendar', route: 'calendar' },
    { id: 7, name: 'folder-outline', label: 'Files', route: 'files' },
    { id: 8, name: 'card-outline', label: 'Bills', route: 'bills' },
  ];

   const items2 = [
      { id: 1, name: 'person-outline', label: 'Clement Bonachita' },
      { id: 2, name: 'person-outline', label: 'Mike Tyson' },
      { id: 3, name: 'person-outline', label: 'Djen Orejola' },
      { id: 4, name: 'person-outline', label: 'Sam Sung' },
      { id: 5, name: 'person-outline', label: 'John Jon' },
    ];
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa'
  }} edges={['top']}>

    <View style={styles.header}>
      <Image source={require('../../../assets/images/Homecare_Logo.png')}
      style={{ width: 50, height: 40, marginLeft: 15 }} 
      resizeMode="contain"
      />

      <Text style={{color: '#8c82c6' , fontWeight: 'bold', fontSize: 12}}>Hello Jamal!</Text>


      <Pressable style={styles.iconCircle} onPress={handleLogout}>
          <Ionicons name="log-out-outline" size={24} color="#4454c3" />
        </Pressable>
    </View>


    <ScrollView style={{paddingHorizontal: 15, }}>

        <Text style={styles.categoryLabel}>
          Today's Schedule</Text>



        <View style={[styles.card, { backgroundColor: "#4454c3" }]}>
          <Text style={{color: 'white'}}>No plans for today</Text>
        </View>
    
        <View style={styles.card}>
          <View style={styles.grid}>
            {items.map((item, index) => (
              <View key={index} style={styles.item}>
                <Pressable style={styles.iconCircle} onPress={()=> router.push(`/(Patient_tabs)/dashboard/${item.route}`)}>
                  <Ionicons name={item.name as any} size={30} color="#6366f1" />
                </Pressable>
                <Text style={styles.label}>{item.label}</Text>
              </View>
            ))}
          </View>          
        </View>

        <Text style={styles.categoryLabel}>Care Team</Text>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} 
        contentContainerStyle={{flexDirection: 'row' ,justifyContent: 'space-between'}}>
            {items2.map(item => (
              <View key={item.id} style={[styles.card, {width: 120, alignItems:'center'}]}>
                <Pressable style={[styles.iconCircle, {width: 50, height: 50, borderRadius: 25,}]}>
                  <Ionicons name={item.name as any} size={30} color="#6366f1" />
                </Pressable>
                <Text style={styles.label}>{item.label}</Text>
              </View>
            ))}
        </ScrollView>
        
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
    marginVertical:10,
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
    backgroundColor: '#eef2ff',
  },
  label: {
    fontSize: 12,
    color: '#4b5563',
    textAlign: 'center',
    marginTop: 6,
  },

});