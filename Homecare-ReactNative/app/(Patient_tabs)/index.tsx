import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';

export default function PatientDashboard() {

  const handleLogout = () => {
    // TODO: implement logout behavior
  };


  const items = [
      { id: 1, name: 'heart-outline', label: 'Health Records' },
      { id: 2, name: 'time-outline', label: 'Visit History' },
      { id: 3, name: 'people-outline', label: 'Care Providers' },
      { id: 4, name: 'document-text-outline', label: 'Clinical Notes' },
      { id: 5, name: 'home-outline', label: 'Services' },
      { id: 6, name: 'calendar-outline', label: 'Calendar' },
      { id: 7, name: 'folder-outline', label: 'Files' },
      { id: 8, name: 'card-outline', label: 'Bills' },
    ];
   const items2 = [
      { name: 'person-outline', label: 'Clement Bonachita' },
      { name: 'person-outline', label: 'Mike Tyson' },
      { name: 'person-outline', label: 'Djen Orejola' },
      { name: 'person-outline', label: 'Sam Sung' },
      { name: 'person-outline', label: 'John Jon' },
    ];
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa'
  }} edges={['top']}>

    <View style={{ height: 60}}>
      <Text style={{color: '#8c82c6' , fontSize: 20}}>Hello Jamal!</Text>

    </View>


    <ScrollView>

        <Text style={{color: '#434e79', fontSize: 20, fontWeight: '600'}}>
          Today's Schedule</Text>



        <View style={[styles.card, { backgroundColor: "#4454c3" }]}>
          <Text style={{color: 'white'}}>No plans for today</Text>
        </View>
    
        <View style={styles.card}>
          <View style={styles.grid}>
            {items.map((item, index) => (
              <View key={index} style={styles.item}>
                <Pressable style={styles.iconCircle}>
                  <Ionicons name={item.name} size={24} color="#6366f1" />
                </Pressable>
                <Text style={styles.label}>{item.label}</Text>
              </View>
            ))}
          </View>          
        </View>

        <Text style={{color: '#434e79', fontSize: 20, fontWeight: '600'}}>
          Care Team</Text>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} 
        contentContainerStyle={{flexDirection: 'row' ,justifyContent: 'space-between'}}>
            {items2.map(item => (
              <View key={item.id} style={styles.card}>
                <Pressable style={styles.iconCircle}>
                  <Ionicons name={item.name} size={24} color="#6366f1" />
                  <Text style={styles.label}>{item.label}</Text>

                </Pressable>
              </View>
            ))}
        </ScrollView>
    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    backgroundColor: 'white',
    borderRadius: 15,
    padding: 35,
    marginHorizontal:10,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
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
    backgroundColor: '#eef2ff',
  },
  label: {
    fontSize: 12,
    color: '#4b5563',
    textAlign: 'center',
    marginTop: 6,
  },
  sectionTitle: {
    fontWeight: '600',
    fontSize: 16,
    marginTop: 10,
  },
});