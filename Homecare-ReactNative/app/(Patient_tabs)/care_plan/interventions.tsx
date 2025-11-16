import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';


export default function Interventions () {

    const interventionList = [
        { id: 1, schedule: 'Wednesdays, 4:00 PM', next_appointment: 'Oct 15, 4:00 PM', intervention: 'Physical Therapy', caregiver: 'John Doe' },
        { id: 2, schedule: 'Fridays, 10:00 AM', next_appointment: 'Oct 21, 4:00 PM', intervention: 'Occupational Therapy', caregiver: 'Jane Smith' },
        { id: 3, schedule: 'Mondays, 2:00 PM', next_appointment: 'Oct 5, 3:00 PM',intervention: 'Blood Glucose Monitoring', caregiver: 'Mike Johnson' },
        { id: 4, schedule: 'Tuesdays, 11:00 AM', next_appointment: 'Oct 30, 9:00 PM',intervention: 'Respiratory Therapy', caregiver: 'Emily Davis' },
        { id: 5, schedule: 'Thursdays, 3:00 PM', next_appointment: 'Oct 12, 12:00 PM',intervention: 'Wound Care', caregiver: 'Sarah Wilson' },
        { id: 6, schedule: 'Saturdays, 9:00 AM', next_appointment: 'Oct 17, 1:00 PM',intervention: 'Nutritional Counseling', caregiver: 'David Brown' },
    ]
    // const interventionDetails = [
    //     {  id: 1, label: 'Schedule' },
    //     {  id: 2, label: 'Next Appointment' },
    //     {  id: 3, label:'Intervention' },
    //     {  id: 4, label: 'Caregiver' },
    // ]
    const interventionDetails = [
    { id: 1, label: "Schedule", key: "schedule" },
    { id: 2, label: "Next Appointment", key: "next_appointment" },
    { id: 3, label: "Intervention", key: "intervention" },
    { id: 4, label: "Caregiver", key: "caregiver" },
    ];
    return (
        <SafeAreaView style={{
            flex: 1,
            backgroundColor: '#f5f7fa',
            padding: 10
          }} edges={['top']}>
            
            <ScrollView>
                <View>
                    <Text style={{ color: '#53346a', fontSize: 25, fontFamily: 'poppins', fontWeight: 'bold', marginBottom: 20, padding: 20 }}>
                        Interventions
                    </Text>
                </View>
                {interventionList.map(intervention => (
                    <Pressable key={intervention.id} style={({ pressed }) => [styles.card, {opacity: pressed ? 0.8 : 1 }]}>
                        <View style={[styles.card, {paddingHorizontal: 20, borderWidth: 1, borderColor: '#b1b1b1'}]}>
                        {interventionDetails.map(detail => (
                            <View key={detail.id} style={{ flexDirection: 'row', width: '100%', justifyContent: 'space-between', marginBottom: 20, borderBottomWidth: 1, borderColor: '#e0e0e0', padding: 10, borderRadius: 10 }}>
                                <Text style={[styles.interventionText, { fontWeight: 'bold' }]}>{detail.label}:</Text>
                                <Text style={styles.interventionText}>{intervention[detail.key]}</Text>
                            </View>
                        ))}
                        </View>
                    </Pressable>
                ))}
            </ScrollView>
        </SafeAreaView>)
}


const styles = StyleSheet.create({

  card: {
    
    backgroundColor: '#ffffff',
    borderRadius: 15,
    padding: 15,
    marginHorizontal: 30,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'center',
  },
  interventionText: {
    fontSize: 13,
    color: '#53346a'
  }
});