import React, { useState, useEffect, useRef } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, TouchableOpacity, Alert, Animated, PanResponder, RefreshControl, ActivityIndicator } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import * as ImagePicker from 'expo-image-picker';

import { useCurrentUser } from '@/src/options/authenticationQueryOptions';
import { User, EditUserData } from '@/src/services/authService';
import { useEditUserMutation, useDeleteUserMutation} from '@/src/options/authenticationQueryOptions';
import { addPatientStyles } from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';


export default function RequestList() {
  const router = useRouter();
  const { data: user, isLoading, refetch } = useCurrentUser();
  const { mutate, isPending } = useEditUserMutation();
  const [openStatus, setOpenStatus] = useState(false);
  const [imageUri, setImageUri] = useState<string | null>(null);
  const [formData, setFormData] = useState<EditUserData | null>(null);
  const [refreshing, setRefreshing] = useState(false);
  const { width, height } = Dimensions.get('window');
  const slideAnim = useRef(new Animated.Value(height)).current;
  const opacity = useRef(new Animated.Value(0)).current;

  const panResponder = useRef(
    PanResponder.create({
      onStartShouldSetPanResponder: () => true,
      onMoveShouldSetPanResponder: (_, gestureState) => {
        return gestureState.dy > 10;
      },
      onPanResponderMove: (_, gestureState) => {
        if (gestureState.dy > 0) {
          slideAnim.setValue(gestureState.dy);
        }
      },
      onPanResponderRelease: (_, gestureState) => {
        if (gestureState.dy > 100) {
          closePopup();
        } else {
          Animated.spring(slideAnim, {
            toValue: 0,
            useNativeDriver: true,
          }).start();
        }
      },
    })
  ).current;

  useEffect(() => {
    refetch();
  }, []);

  const onRefresh = async () => {
    setRefreshing(true);
    await refetch();
    setRefreshing(false);
  };

  const openPopup = () => {
    if (user) {
      setFormData({
        first_name: user.first_name,
        middle_name: user.middle_name,
        last_name: user.last_name,
        email_address: user.email_address,
        phone_number: user.phone_number,
        date_of_birth: user.date_of_birth,
        gender: user.gender,
        home_address: user.home_address,
        emergency_contact: user.emergency_contact,
        user_image_blob: undefined,
      });
      setImageUri(user.user_image_blob ? `data:image/jpeg;base64,${user.user_image_blob}` : null);
    }
    setOpenStatus(true);

    Animated.timing(opacity, {
      toValue: 1,
      useNativeDriver: true,
      duration: 300
    }).start();
    Animated.spring(slideAnim, {
      toValue: 0,
      damping: 20,
      mass: 1,
      stiffness: 150,
      useNativeDriver: true
    }).start();
  };

  const closePopup = () => {
    Animated.timing(opacity, {
      toValue: 0,
      useNativeDriver: true,
      duration: 300
    }).start();
    Animated.spring(slideAnim, {
      toValue: height,
      damping: 20,
      mass: 1,
      stiffness: 150,
      useNativeDriver: true
    }).start(() => setOpenStatus(false));
  };

  const handleChange = (key: keyof EditUserData, value: any) => {
    setFormData(prev => prev ? ({
      ...prev,
      [key]: value,
    }) : null);
  };

  const pickImage = async () => {
    const { status } = await ImagePicker.requestMediaLibraryPermissionsAsync();

    if (status !== 'granted') {
      Alert.alert('Permission Denied', 'Sorry, we need camera roll permissions to upload images.');
      return;
    }

    const result = await ImagePicker.launchImageLibraryAsync({
      mediaTypes: ['images'],
      allowsEditing: true,
      aspect: [1, 1],
      quality: 0.7,
      base64: true,
    });

    if (!result.canceled && result.assets[0]) {
      const uri = result.assets[0].uri;
      const base64 = result.assets[0].base64;

      setImageUri(uri);

      if (base64) {
        handleChange('user_image_blob', base64);
      } else {
        Alert.alert('Error', 'Failed to process image - no base64 data');
      }
    }
  };

  const handleSubmit = () => {
    if (formData && user) {
      // Merge formData with original user data, keeping original values for empty fields
      const updatedData: EditUserData = {
        first_name: formData.first_name?.trim() || user.first_name,
        middle_name: formData.middle_name?.trim() || user.middle_name || undefined,
        last_name: formData.last_name?.trim() || user.last_name,
        email_address: formData.email_address?.trim() || user.email_address,
        phone_number: formData.phone_number?.trim() || user.phone_number || undefined,
        date_of_birth: formData.date_of_birth?.trim() || user.date_of_birth || undefined,
        gender: formData.gender?.trim() || user.gender || undefined,
        home_address: formData.home_address?.trim() || user.home_address || undefined,
        emergency_contact: formData.emergency_contact?.trim() || user.emergency_contact || undefined,
        user_image_blob: formData.user_image_blob,
      };

      mutate(updatedData, {
        onSuccess: async () => {
          Alert.alert('Success', 'Profile updated successfully');
          await refetch();
          closePopup();
        },
        onError: (error: any) => {
          Alert.alert('Error', error?.message || 'Failed to update profile');
        }
      });
    }
  };

  const renderEditPopup = () => {
    if (!formData) return null;

    return (
      <Animated.View style={[styles.overlay, { opacity }]}>
        <Animated.View style={[styles.popupCard, { transform: [{ translateY: slideAnim }] }]}>
          <View {...panResponder.panHandlers} style={styles.dragHandle}>
            <View style={styles.dragIndicator} />
          </View>

          <View style={[addPatientStyles.headerContainer, { justifyContent: 'flex-start', gap: 10, marginBottom: 0, borderBottomLeftRadius: 0, borderBottomRightRadius: 0 }]}>
            <Text style={addPatientStyles.headerTitle}>Edit Profile Information</Text>
          </View>

          <ScrollView contentContainerStyle={{ paddingHorizontal: 10, paddingBottom: 20 }}>
            <Text style={[addPatientStyles.fieldLabel, { fontWeight: 'bold', fontSize: 17, marginLeft: 10, marginTop: 15 }]}>
              Personal Information
            </Text>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Profile Image</Text>
              <TouchableOpacity onPress={pickImage} style={[styles.imageButton, { marginVertical: 10 }]}>
                <Text style={{ color: 'white', fontWeight: 'bold' }}>
                  {imageUri ? 'Change Image' : 'Upload Image'}
                </Text>
              </TouchableOpacity>
              {imageUri && (
                <Image
                  source={{ uri: imageUri }}
                  style={{ width: 120, height: 120, borderRadius: 60, alignSelf: 'center', marginTop: 10, borderWidth: 3, borderColor: '#4F46E5' }}
                  resizeMode="cover"
                />
              )}
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>First Name</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.first_name}
                onChangeText={(value) => handleChange('first_name', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Middle Name</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.middle_name || ''}
                onChangeText={(value) => handleChange('middle_name', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Last Name</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.last_name}
                onChangeText={(value) => handleChange('last_name', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Email Address</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.email_address}
                onChangeText={(value) => handleChange('email_address', value)}
                keyboardType="email-address"
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Phone Number</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.phone_number || ''}
                onChangeText={(value) => handleChange('phone_number', value)}
                keyboardType="phone-pad"
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Date of Birth</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.date_of_birth || ''}
                onChangeText={(value) => handleChange('date_of_birth', value)}
                placeholder="YYYY-MM-DD"
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Gender</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.gender || ''}
                onChangeText={(value) => handleChange('gender', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Home Address</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10, textAlignVertical: 'top' }]}
                value={formData.home_address || ''}
                onChangeText={(value) => handleChange('home_address', value)}
                multiline
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Emergency Contact</Text>
              <TextInput
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.emergency_contact || ''}
                onChangeText={(value) => handleChange('emergency_contact', value)}
                keyboardType="phone-pad"
              />
            </View>

            <Pressable
              onPress={handleSubmit}
              style={[addPatientStyles.submitButton, { opacity: isPending ? 0.6 : 1 }]}
              disabled={isPending}
            >
              <Text style={{ color: 'white', fontWeight: 'bold' }}>
                {isPending ? 'Updating...' : 'Save Changes'}
              </Text>
            </Pressable>

            <Pressable
              onPress={closePopup}
              style={[addPatientStyles.submitButton, { backgroundColor: '#6c757d' }]}
            >
              <Text style={{ color: 'white', fontWeight: 'bold' }}>Cancel</Text>
            </Pressable>
          </ScrollView>
        </Animated.View>
      </Animated.View>
    );
  };


  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>

    {isLoading ? (
      <View style={{ flex: 1, justifyContent: 'center', alignItems: 'center' }}>
        <ActivityIndicator size="large" color="#4F46E5" />
      </View>
    ) : (
      <ScrollView
        refreshControl={
          <RefreshControl
            refreshing={refreshing}
            onRefresh={onRefresh}
            colors={['#4F46E5']}
            tintColor="#4F46E5"
          />
        }
      >
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
          <View style={styles.profileImageContainer}>
            {user?.user_image_blob ? (
              <Image 
                source={{ uri: `data:image/jpeg;base64,${user.user_image_blob}` }}
                style={styles.profileImage}
                resizeMode="cover"
              />
            ) : (
              <View style={[styles.profileImage, { backgroundColor: '#e0e7ff', justifyContent: 'center', alignItems: 'center' }]}>
                <Ionicons name="person-outline" size={60} color="#4F46E5" />
              </View>
            )}
          </View>
          
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

          <Pressable
            onPress={openPopup}
            style={styles.editButton}
          >
            <Ionicons name="create-outline" size={20} color="white" style={{ marginRight: 8 }} />
            <Text style={{ color: 'white', fontWeight: 'bold', fontSize: 16 }}>
              Edit Profile Information
            </Text>
          </Pressable>
        </View>


      </ScrollView>
    )}

    {openStatus && renderEditPopup()}
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

  profileImageContainer: {
    alignItems: 'center',
    marginBottom: 20,
  },

  profileImage: {
    width: 120,
    height: 120,
    borderRadius: 60,
    borderWidth: 3,
    borderColor: '#4F46E5',
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
    backgroundColor: '#4454c3f',
  },
  label: {
    fontSize: 12,
    color: '#53346a',
    textAlign: 'center',
    marginTop: 6,
  },

  editButton: {
    backgroundColor: '#4454c3',
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center',
    padding: 15,
    borderRadius: 12,
    marginTop: 20,
    marginBottom: 20,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },

  overlay: {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    backgroundColor: 'rgba(0, 0, 0, 0.5)',
    justifyContent: 'flex-end',
  },

  popupCard: {
    width: '100%',
    height: '100%',
    backgroundColor: '#ffffff',
    alignSelf: 'center',
    borderTopLeftRadius: 25,
    borderTopRightRadius: 25,
    overflow: 'hidden',
  },

  dragHandle: {
    width: '100%',
    alignItems: 'center',
    paddingVertical: 10,
    backgroundColor: '#f4f7fa',
  },

  dragIndicator: {
    width: 40,
    height: 5,
    backgroundColor: '#ccc',
    borderRadius: 3,
  },

  imageButton: {
    backgroundColor: '#4454c3',
    padding: 12,
    borderRadius: 10,
    alignItems: 'center',
  },
});