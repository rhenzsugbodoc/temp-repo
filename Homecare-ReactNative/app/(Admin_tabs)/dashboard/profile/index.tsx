import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';

import { getUserData } from '@/src/options/tokenHandler';
import { User } from '@/src/services/authService';


export default function RequestList() {
  const router = useRouter();
  const [user, setUser] = useState<User | null>(null);

  useEffect(() => {
    const fetchUserData = async () => {
      const userData = await getUserData<User>();
      setUser(userData);
    };
    fetchUserData();
  }, []);

  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView >
        <View style={styles.headerContainer}>
            <View style={{flex: 1}}>
                <Text style={styles.headerTitle}>Profile Information</Text>
                <Text style={[styles.headerTitle, { fontSize: 16 }]}>Patient ID: {user?.user_id}</Text>
                {/* <View style={{marginTop: 10,borderRadius: 25, backgroundColor: 'white', height: 35, width: 90, justifyContent: 'center', alignItems: 'center'}}>
                    <Text style={{fontSize: 10}}>Senior citizen</Text>
                </View> */}
            </View>
          

        </View>

        <View style={styles.contentContainer}>
          <Text style={styles.sectionTitle}>Personal Information</Text>
          
          <View style={styles.detailCard}>
            <View style={styles.detailRow}>
              <Ionicons name="person-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Full Name</Text>
                <Text style={styles.detailValue}>{user?.first_name} {user?.middle_name ? user.middle_name + ' ' : ''}{user?.last_name}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="mail-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Email Address</Text>
                <Text style={styles.detailValue}>{user?.email_address}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="call-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Phone Number</Text>
                <Text style={styles.detailValue}>{user?.phone_number || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="calendar-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Date of Birth</Text>
                <Text style={styles.detailValue}>{user?.date_of_birth || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="male-female-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Gender</Text>
                <Text style={styles.detailValue}>{user?.gender || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="home-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Home Address</Text>
                <Text style={styles.detailValue}>{user?.home_address || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="call-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Emergency Contact</Text>
                <Text style={styles.detailValue}>{user?.emergency_contact || 'Not provided'}</Text>
              </View>
            </View>
          </View>

          <Text style={styles.sectionTitle}>Account Information</Text>
          
          <View style={styles.detailCard}>
            <View style={styles.detailRow}>
              <Ionicons name="shield-checkmark-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Role</Text>
                <Text style={styles.detailValue}>{user?.role}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="time-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Member Since</Text>
                <Text style={styles.detailValue}>{user?.created_at ? new Date(user.created_at).toLocaleDateString() : 'N/A'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="sync-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Last Updated</Text>
                <Text style={styles.detailValue}>{user?.updated_at ? new Date(user.updated_at).toLocaleDateString() : 'N/A'}</Text>
              </View>
            </View>
          </View>
        </View>


    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    backgroundColor: '#ffffff',
    borderRadius: 1,
    padding: 15,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'center',
  },

  headerContainer: {
    backgroundColor: '#4F46E5',
    alignItems: 'center',
    flex:1,
    flexDirection: 'row',
    justifyContent: 'space-between',
    padding: 25,
    height:90,
    paddingVertical: 30,
    borderBottomLeftRadius: 25,
    borderBottomRightRadius: 25,
  },

  headerTitle: {
    color: 'white',
    fontSize: 20,
    fontWeight: 'bold',
    fontFamily: 'poppins'
  },

  contentContainer: {
    padding: 20,
  },

  sectionTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#333',
    marginTop: 20,
    marginBottom: 12,
  },

  detailCard: {
    backgroundColor: '#ffffff',
    borderRadius: 12,
    padding: 16,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    marginBottom: 16,
  },

  detailRow: {
    flexDirection: 'row',
    alignItems: 'center',
   
    paddingVertical: 12,
    borderBottomWidth: 1,
    borderBottomColor: '#f0f0f0',
  },

  detailContent: {
    marginLeft: 12,
    flex: 1,
  },

  detailLabel: {
    fontSize: 12,
    color: '#666',
    marginBottom: 4,
  },

  detailValue: {
    fontSize: 15,
    color: '#333',
    fontWeight: '500',
  },

  headerIcons: {
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