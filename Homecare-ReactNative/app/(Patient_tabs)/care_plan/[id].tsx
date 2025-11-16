
// ScrollView row
//map card fixed height and width (Assessment, Nurse's Diagnosis, Outcome and)
//Scrollview
// Intervention card

import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';

export default function PatientDashboard() {

  const router = useRouter();



  const categoryList = [
      { id: 1, name: 'Assessment'},
      { id: 2, name: "Nurse's Diagnosis" },
      { id: 3, name: 'Outcome and goals' },
      { id: 4, name: 'Evaluation' },
    
   
    ];

  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa',
    padding: 10
  }} edges={['top']}>

    <View style={styles.header}>
        <Text style={styles.headerText}>
          ALL</Text>
    </View>


    <View style={{paddingHorizontal: 1 }}>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} 
        contentContainerStyle={{flexDirection: 'row' ,justifyContent: 'space-between'}}>
          {categoryList.map(category => (
            <View key={category.id} style={{ alignItems: 'center', marginHorizontal: 5 }}>
              <Pressable style={[styles.card, { width: 110, height: 100, alignItems: 'center' }]}>
                {/* <Pressable style={{ width: 50, height: 50, borderRadius: 25 }} /> */}
              </Pressable>
              <Text style={styles.categoryLabel}>{category.name}</Text>
            </View>
          ))}

        </ScrollView>
    </View>
    <View style={[styles.card, { marginTop: 30, flex: 1, padding: 30 }]}>
      <Pressable onPress={() => router.push('/care_plan/interventions')}>
        <Text style={{ color: '#53346a', fontSize: 17, fontFamily: 'poppins', fontWeight: 'bold' }}>
          Interventions
        </Text>
      </Pressable>
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
    paddingHorizontal: 20,
    marginVertical: 20,
    //backgroundColor: '#53346a',
    justifyContent: 'space-between',
    gap: 0
  },
  headerText:{
    color: '#434e79', 
    fontSize: 30, 
    
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

  categoryLabel:{
    fontSize: 12,
    fontFamily: 'poppins',
    color: '#6c6c6c',
    textAlign: 'center',
    marginTop: 5,
  }

});