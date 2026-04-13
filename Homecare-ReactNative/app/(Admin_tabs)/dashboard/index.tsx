import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, useWindowDimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import {Picker} from '@react-native-picker/picker';
import { useLogoutMutation, useCurrentUser } from '@/src/options/authenticationQueryOptions';

export default function AdminDashboard() {
  const router = useRouter();
  const { width: screenWidth } = useWindowDimensions();
  const contentWidth = screenWidth * 0.8;
  const [selectedLocation, setSelectedLocation] = useState('All Locations');
  const logoutMutation = useLogoutMutation();
  const { data: user } = useCurrentUser();
  
  const handleLogout = async () => {
    try {
      await logoutMutation.mutateAsync();
      router.replace('/login');
    } catch (error) {
      console.error('Logout failed:', error);
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
    { id: 2, name: 'time-outline', label: 'Patient Worklist', route: '/(Admin_tabs)/dashboard/patient_worklist' },
    { id: 3, name: 'people-outline', label: 'Staff', route: '/(Admin_tabs)/dashboard/staff_list' },
    { id: 4, name: 'document-text-outline', label: 'Clinical Notes', route: 'clinical_notes' },
    { id: 5, name: 'home-outline', label: 'Services', route: '/(Admin_tabs)/dashboard/services' },
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

    <View style={[styles.header, {margin: screenWidth*0.05}]}>
      <Pressable onPress={() => router.push('/(Admin_tabs)/dashboard/profile')}>
        {user?.user_image_blob ? (
          <Image
            source={{ uri: `data:image/jpeg;base64,${user.user_image_blob}` }}
            style={{ width: 50, height: 50, borderRadius: 25, marginLeft: 15, borderWidth: 1, borderColor: "#4454c3" }}
            resizeMode="cover"
          />
        ) : (
          <View style={{ width: 50, height: 50, borderRadius: 25, backgroundColor: '#eef2ff', marginLeft: 15, justifyContent: 'center', alignItems: 'center' }}>
            <Ionicons name="person-outline" size={30} color="#4454c3" />
          </View>
        )}
      </Pressable>

      <View style={styles.userTextContainer}>
        <Text style={styles.greetingText}>
          Hello {user.first_name + " " + user.last_name}!
        </Text>
        <View style={styles.verifiedRow}>
          <Ionicons name="checkmark-circle" size={14} color="#596389" />
          <Text style={styles.verifiedText}>Fully Verified</Text>
        </View>
      </View>
      <Pressable style={styles.iconCircle} onPress={()=>{router.push('/(Admin_tabs)/notifications')}}>
        <Ionicons name="notifications" size={24} color="#4454c3" />
      </Pressable>
      <Pressable style={styles.iconCircle} onPress={handleLogout}>
        <Ionicons name="log-out-outline" size={24} color="#4454c3" />
      </Pressable>
    </View>

    <ScrollView contentContainerStyle={{ alignItems: 'center' }}>

      <View style={{ width: contentWidth }}>
        <Text style={styles.categoryLabel}>Locations</Text>
        <View style={{backgroundColor: 'white', borderRadius: 10, marginBottom: 10, paddingHorizontal: 10, marginHorizontal: 0}}>
            <Picker
              selectedValue={selectedLocation}
              onValueChange={(itemValue) => setSelectedLocation(itemValue)}
              style={{ color: '#999', fontSize: 10 }}      
            >                
              {locations.map((location, index) => (
                <Picker.Item key={index} label={location.branch} value={location.branch} />
                ))}
            </Picker>
        </View>
    
        <View style={[styles.card, { marginHorizontal: 0 }]}>
          <View style={styles.grid}>
            {items.map((item, index) => (
              <View key={index} style={styles.item}>
                <Pressable style={styles.iconCircle} onPress={()=> router.push(item.route as any)}>
                  <Ionicons name={item.name as any} size={30} color="#4454c3" />
                </Pressable>
                <Text style={styles.routeLabel}>{item.label}</Text>
              </View>
            ))}
          </View>          
        </View>

        <Text style={styles.categoryLabel}>Staff</Text>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} 
        contentContainerStyle={{flexDirection: 'row' ,justifyContent: 'space-between', gap: 15}}>
            {items2.map(item => (
              <View key={item.id} style={[styles.card, {width: screenWidth * 0.4, alignItems:'center', marginHorizontal: 0}]}>
                <Text style={styles.staffLabel}>{item.label}</Text>
                <Pressable style={[styles.iconCircle, {borderWidth: 0,width: 50, height: 50, borderRadius: 25,}]}>
                  <Ionicons name={item.name as any} size={30} color="#4454c3" />
                </Pressable>
                <Text style={[styles.staffLabel, {fontWeight: 'bold'}]}>{item.number}</Text>
              </View>
            ))}
        </ScrollView>
        <Text style={styles.categoryLabel}>Statistics</Text>
      </View>
        
    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    padding: 20,
    marginHorizontal: 0,
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
    marginVertical: 10,
    gap: 10,
  },
  greetingText: {
    color: '#4454c3',
    fontWeight: 'bold',
    fontSize: 16,
  },
  userTextContainer: {
    flex: 1,
  },
  verifiedRow: {
    flexDirection: 'row',
    alignItems: 'center',
    gap: 4,
    marginTop: 2,
  },
  verifiedText: {
    fontSize: 12,
    color: '#596389',
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