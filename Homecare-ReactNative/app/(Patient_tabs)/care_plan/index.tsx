import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getCompanyListOptions} from '../../../options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';

export default function RequestList() {
    const router = useRouter();
    const [selectedType, setSelectedType] = useState<'One-Time Service' | 'Routine Service'>('One-Time Service');

    const serviceList = [
    { id: 1, service_name: 'BASIC CHORES', service_type: "One-Time Service", address: 'B. Rodriguez St. Cebu City 6000 Cebu', date:"2025-11-15", time: "09:00 AM", caregiver_name: "Carlos Lim", status: "In progress" },
    { id: 2, service_name: 'MEDICATION REMINDER', service_type: "Routine Service", address: 'M. L. Quezon St. Cebu City 6000 Cebu', date: "2025-11-15", time: "09:00 AM", caregiver_name: "Maria Santos", status: "Scheduled" },
    { id: 3, service_name: 'MEAL PREPARATION', service_type: "One-Time Service", address: 'Gen. Maxilom Ave. Cebu City 6000 Cebu', date: "2025-11-16", time: "11:00 AM", caregiver_name: "Juan Dela Cruz", status: "Cancelled" },
    { id: 4, service_name: 'LAUNDRY SERVICE', service_type: "One-Time Service", address: 'Osmeña Blvd. Cebu City 6000 Cebu', date: "2025-11-17", time: "02:00 PM", caregiver_name: "Ana Reyes", status: "Scheduled" },
    { id: 5, service_name: 'PHYSICAL THERAPY', service_type: "One-Time Service", address: 'C. Padilla St. Cebu City 6000 Cebu', date: "2025-11-18", time: "10:00 AM", caregiver_name: "Carlos Lim", status: "In progress" },
    { id: 6, service_name: 'GROCERY ASSISTANCE', service_type: "One-Time Service", address: 'A. Soriano St. Cebu City 6000 Cebu', date: "2025-11-19", time: "03:00 PM", caregiver_name: "Liza Tan", status: "Scheduled" }
    ];
    const episodeList = [
        {id: 1, episode_name: 'Chronic Disease Management (Diabetes)'},
        {id: 2, episode_name: 'Post-Surgical Care (Hip Replacement)'},
        {id: 3, episode_name: 'Wound Care Management'},
        {id: 4, episode_name: 'Palliative Care Support'},
        {id: 5, episode_name: 'Cardiac Rehabilitation'},
        {id: 6, episode_name: 'No Affiliated Episode of Care'},
    ];


    const renderServiceTypeButton = (type: 'One-Time Service' | 'Routine Service') => {
        const isSelected = selectedType === type; 
        // if selectedType === type = True
        return (
            <Pressable
            style={[styles.serviceTypeButtonNotSeleceted, isSelected && styles.serviceTypeButtonSelected]}
            onPress={() => setSelectedType(type)}
            >
            <Text style={[styles.serviceTypeText, isSelected && styles.serviceTypeTextSelected]}>{type}</Text>
            </Pressable>
        );
    };

    const renderOneTimeService = () => {
        return (
           <Text>Hello</Text> 

           
        );
    };
    const handleServicePress = (service: any) => {
        // router.push(`/care_plan/service${service.id}`);
    }

    const handleEpisodePress = (episode: any) => {
        router.push(`/care_plan/${episode.id}`);
    }


return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>

    {/* categoryLabel */}
    <View style={{ height: 90, backgroundColor: '#4454c3', justifyContent:'center', paddingHorizontal:30}}>
      <Text style={{color: 'white' , fontFamily: 'poppins', fontSize: 25}}>My Plans</Text>
    </View>

    <View style={{flexDirection: 'row', marginBottom: 10}}>
        {renderServiceTypeButton('One-Time Service')}
        {renderServiceTypeButton('Routine Service')}
    </View>
    <ScrollView >
      {/* OneTime Tab*/}
      {selectedType === 'One-Time Service' && serviceList.filter(service => service.service_type === 'One-Time Service').map((service) => (
          <Pressable key={service.id} onPress={() => handleServicePress(service)} style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}>
              <View style={styles.card} key={service.id}>
                  <View style={{flexDirection: 'row', flex: 1}}>
                      <View style={{ flex: 4}}>
                          <Image source={require('../../../assets/images/MisterMatres.png')} resizeMode="contain" 
                          style={{  width: '100%', height: 120 , borderRadius: 30 }} />
                      </View>
                      <View style={{ flex: 5, gap:5,  justifyContent: 'center'}}>
                        
                          <Text style={{ fontWeight: 'bold', fontSize: 14, marginBottom: 2, color: '#7d71bf', fontFamily: 'poppins' }}>{service.service_name}</Text>
                          {/* Date */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="calendar-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>{service.date}</Text>
                          </View>

                          {/* Caregiver */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="person-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>{service.caregiver_name}</Text>
                          </View>

                          {/* Status */}
                          <View style={{ flexDirection: 'row', alignItems: 'center', gap: 4 }}>
                            <Ionicons name="checkmark-circle-outline" size={12} color="#7066ac" />
                            <Text style={styles.serviceDetails}>{service.status}</Text>
                          </View>
                        
                      </View>
                  </View>
              </View>
          </Pressable>
      ))}
      {/* RoutineTab */}
      {selectedType === 'Routine Service' && (
        <View>
          <Text style={{fontFamily: 'poppins', color: '#434e79', fontSize: 18, fontWeight: 'bold', marginBottom: 10, marginLeft: 20}}>Select Episode of Care</Text>
          {episodeList.map(episode => (
            <Pressable key={episode.id} onPress={() => handleEpisodePress(episode)} style={({ pressed }) => [styles.card,{opacity: pressed ? 0.8 : 1}]}>
              <View style={[styles.card, {paddingHorizontal: 20, alignItems: 'center', borderWidth: 1, borderColor: '#b1b1b1'}]}>
                <Text style={{textAlign: 'center', fontFamily: 'poppins', color: '#434e79'}}>{episode.episode_name}</Text>
              </View>
            </Pressable>
          ))}
        </View>
      )}

     
    </ScrollView>
  </SafeAreaView>;
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


  serviceTypeButtonNotSeleceted: {
    flex: 1,
    padding: 15,
    alignItems: 'center',
    borderBottomWidth: 0,
    borderBottomColor: 'transparent',
  },
  serviceTypeButtonSelected: {
    borderBottomWidth: 2,
    borderBottomColor: '#53346a',
  },
  serviceTypeText: {
    color: '#c7c7c7',
  },
  serviceTypeTextSelected: {
    color: '#5a3d70',
  },
  serviceDetails: {
  color: '#7066ac',
  fontSize: 10,
  fontFamily: 'poppins'
},

});