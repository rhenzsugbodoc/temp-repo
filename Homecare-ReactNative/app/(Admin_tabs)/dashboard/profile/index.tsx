import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, FlatList } from 'react-native';
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

  const profileOptions = [
    { id: '1', title: 'Facility Settings', icon: 'business-outline', route: '/(Admin_tabs)/dashboard/profile/facility_settings' },
    { id: '2', title: 'Profile', icon: 'person-outline', route: '/(Admin_tabs)/dashboard/profile/profile_page' },
    { id: '3', title: 'Settings and Privacy', icon: 'settings-outline', route: '/(Admin_tabs)/dashboard/profile/index' },
  ];

  const handleOptionPress = (route: string) => {
    router.push(route as any);
  };

  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView >
        <View style={styles.headerContainer}>
            <View style={{flex: 1}}>
                <Text style={styles.headerTitle}>Menu</Text>
            </View>
        </View>

        <View style={styles.contentContainer}>

          
          <FlatList
            data={profileOptions}
            scrollEnabled={false}
            keyExtractor={(item) => item.id}
            renderItem={({ item }) => (
              <Pressable 
                onPress={() => handleOptionPress(item.route)}
                style={({ pressed }) => [
                  styles.optionCard,
                  { opacity: pressed ? 0.7 : 1 }
                ]}
              >
                <View style={styles.optionRow}>
                  <View style={styles.iconContainer}>
                    <Ionicons name={item.icon as any} size={24} color="#4F46E5" />
                  </View>
                  <Text style={styles.optionTitle}>{item.title}</Text>
                  <Ionicons name="chevron-forward-outline" size={20} color="#999" />
                </View>
              </Pressable>
            )}
          />
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
    backgroundColor: '#4454c3',
    alignItems: 'center',
    flex:1,
    flexDirection: 'row',
    justifyContent: 'space-between',
    padding: 25,
    height:90,
    paddingVertical: 30,
    // borderBottomLeftRadius: 25,
    // borderBottomRightRadius: 25,
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

  profileImageContainer: {
    alignItems: 'center',
    marginBottom: 20,
  },

  profileImage: {
    width: 120,
    height: 120,
    borderRadius: 60,
    borderWidth: 3,
    borderColor: '#4454c3',
  },

  sectionTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#333',
    marginTop: 20,
    marginBottom: 12,
  },

  optionCard: {
    backgroundColor: '#ffffff',
    borderRadius: 12,
    marginBottom: 12,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
  },

  optionRow: {
    flexDirection: 'row',
    alignItems: 'center',
    padding: 16,
  },

  iconContainer: {
    width: 48,
    height: 48,
    borderRadius: 24,
    backgroundColor: '#EEF2FF',
    justifyContent: 'center',
    alignItems: 'center',
    marginRight: 12,
  },

  optionTitle: {
    flex: 1,
    fontSize: 16,
    fontWeight: '600',
    color: '#333',
  },

  headerIcons: {
    flexDirection: 'row',
    gap: 15,
  },
});