
// ScrollView row
//map card fixed height and width (Assessment, Nurse's Diagnosis, Outcome and)
//Scrollview
// Intervention card

import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';

export default function PatientDashboard() {

  const handleLogout = () => {
    // TODO: implement logout behavior
  };


  const categoryList = [
      { id: 1, name: 'Assessment'},
      { id: 2, name: "Nurse's Diagnosis" },
      { id: 3, name: 'Outcome and' },
    
   
    ];

  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa'
  }} edges={['top']}>

    <View style={styles.header}>

      <Text style={{color: 'white' , fontWeight: 'bold', fontSize: 12}}>All</Text>

    </View>


    <View style={{paddingHorizontal: 15, }}>

        <Text style={styles.categoryLabel}>
          Today's Schedule</Text>


        <Text style={styles.categoryLabel}>Care Team</Text>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} 
        contentContainerStyle={{flexDirection: 'row' ,justifyContent: 'space-between'}}>
            {categoryList.map(category => (
              <View key={category.id} style={[styles.card, {width: 120, alignItems:'center'}]}>
                <Pressable style={[styles.iconCircle, {width: 50, height: 50, borderRadius: 25,}]}>
                    <Text>{category.name}</Text>
                </Pressable>
            
              </View>
            ))}
        </ScrollView>

        <View style={styles.card}>
            <Text>Interventions</Text>
        </View>
    </View>
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
    justifyContent: 'space-between',
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