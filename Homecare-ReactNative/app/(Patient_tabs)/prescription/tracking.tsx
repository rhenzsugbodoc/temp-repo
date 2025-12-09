// import { useSearchParams } from 'expo-router';
import * as Location from 'expo-location';

import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';
import { Ionicons } from '@expo/vector-icons';

export default function Tracking() {
    const router = useRouter();
    type Status = 'Order Placed' | 'Driver Assigned' | 'Order In Transit' | 'Order Delivered';

    const statusList: Status[] = ['Order Placed', 'Driver Assigned', 'Order In Transit', 'Order Delivered'];
    
    const [completedStatuses, setCompletedStatuses] = useState<Status[]>([]);
    const handleTrackOrder = async () => {
      if (completedStatuses.length < statusList.length) {
        const nextStatus = statusList[completedStatuses.length];
        setCompletedStatuses(prev => [...prev, nextStatus]);
      } else {
        // Check current permission status
        const { status } = await Location.getForegroundPermissionsAsync();
        
        if (status !== 'granted') {
          const { status: newStatus } = await Location.requestForegroundPermissionsAsync();
          if (newStatus !== 'granted') {
            alert('Location permission denied. Cannot show live tracking.');
            return;
          }
        }
        
        router.push('/(Patient_tabs)/prescription/location');
      }
    };
    return (
    <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#f4f7fa',
        
        }} edges={['top']}>

            <View style={{padding: 20, backgroundColor: '#4454c3' , height: 70, justifyContent: 'center'}}>
                <Text style={{color: '#ffffff' , fontSize: 20, marginLeft: 10}}>Tracking</Text>
            </View>

            <View style={[styles.card]}>
              <Text style={{fontSize: 18, fontWeight: 'bold', color: '#434e79', textAlign: 'left', marginBottom: 20}}>Order Progress</Text>
              {statusList.map((status, index) => {
                const isCompleted = completedStatuses.includes(status); 
                const isLast = index === statusList.length - 1;
                return (
                  <View key={status} style={styles.row}>
                    <View style={styles.iconColumn}>    
                      <View style={[styles.circle, { backgroundColor: isCompleted ? '#4F46E5' : '#b1b1b1' },]}>
                        <Ionicons name="checkmark" size={20} color='#ffffff'  />
                      </View>
                      {!isLast && (
                        <View style={[styles.line,{ backgroundColor: completedStatuses.includes(statusList[index + 1]) ? '#4F46E5' : '#ccc' },]}/>
                      )}
                    </View>
                    <View style={styles.textColumn}>
                      <Text style={styles.statusText}>{status}</Text>
                      <Text style={styles.dateText}>October 6, 2025 | 11:40 AM</Text>
                    </View>
                  </View>
                );
              })}
            </View>

                <Pressable style= {styles.submitButton} onPress={()=> (handleTrackOrder())}>
                    <View style={styles.buttonContainer}>
                      <Text style={styles.submitButtonText}>View Live Tracking</Text>
                      <Ionicons name="location-outline" size={20} color="#fff"  />
                    </View>
                </Pressable>

        </SafeAreaView>
    );
}
const styles = StyleSheet.create({

card: {
    backgroundColor: '#ffffff',
    marginBottom: 10,
    padding: 20,
    paddingHorizontal: 25,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    
  },
  row: {
    flexDirection: 'row',
    alignItems: 'flex-start',
  },
  iconColumn: {
    width: 30,
    alignItems: 'center',
  },
  circle: {
    width: 60,
    height: 60,
    borderRadius: 30,
    justifyContent: 'center',
    alignItems: 'center',
  },
  line: {
    width: 2,
    height: 50,
    marginTop: 2,
  },
  textColumn: {
    marginLeft: 30,
    paddingBottom: 35, 
  },
  statusText: {
    fontWeight: '600',
    fontSize: 18,
  },
  dateText: {
    color: '#666',
    fontSize: 13,
  },
  submitButton: {
    backgroundColor: '#22449e',
    padding: 10,
    marginHorizontal: 20,
    marginTop: 'auto',
    marginBottom: 20,
    borderRadius: 25,
  },
  submitButtonText: {
    color: 'white',
    fontSize: 20,
    textAlign: 'center',
    fontFamily: 'poppins',

  },
  buttonContainer: {
    flexDirection: 'row', 
    alignItems: 'center', 
    justifyContent: 'center', 
  },
});
