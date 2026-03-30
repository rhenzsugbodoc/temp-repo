import React from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, ActivityIndicator, Animated, Dimensions, TextInput, TouchableOpacity, Alert, PanResponder } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import {useState, useRef} from 'react';
import { useCurrentFacility, useEditFacilityMutation } from '../../../../src/options/Admin_patientsQueryOptions';
import { addPatientStyles } from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';
import * as ImagePicker from 'expo-image-picker';
import { FacilityDetails } from '@/src/services/Admin_facilityService';

export default function FacilitySettings() {
  const router = useRouter();
  const { data: facility, isLoading, error } = useCurrentFacility();
  const {mutate, isPending} = useEditFacilityMutation();
  const [openStatus, setOpenStatus] = useState(false);
  const [imageUri, setImageUri] = useState<string | null>(null);
  const [formData, setFormData] = useState<FacilityDetails | null>(null);

  const {width , height} = Dimensions.get('window');
  const isLandscape = width > height;
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

  const openPopup = () => {
    if (facility) {
      setFormData({ ...facility });
      setImageUri(facility.facility_image_blob ? `data:image/jpeg;base64,${facility.facility_image_blob}` : null);
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
  }

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
  }

  const handleChange = (key: keyof FacilityDetails, value: any) => {
    setFormData(prev => prev ? ({
      ...prev,
      [key]: value,
    }) : null);
  }

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
        handleChange('facility_image_blob', base64);
      } else {
        Alert.alert('Error', 'Failed to process image - no base64 data');
      }
    }
  };

  const handleSubmit = () => {
    if (formData && facility) {
      // Merge formData with original facility data, keeping original values for empty fields
      const updatedData: FacilityDetails = {
        ...formData,
        facility_name: formData.facility_name?.trim() || facility.facility_name,
        facility_type: formData.facility_type?.trim() || facility.facility_type,
        facility_phone: formData.facility_phone?.trim() || facility.facility_phone,
        facility_address: formData.facility_address?.trim() || facility.facility_address,
        facility_email: formData.facility_email?.trim() || facility.facility_email || null,
        facility_website: formData.facility_website?.trim() || facility.facility_website || null,
        facility_description: formData.facility_description?.trim() || facility.facility_description || null,
        city: formData.city?.trim() || facility.city || null,
        province: formData.province?.trim() || facility.province || null,
        postal_code: formData.postal_code?.trim() || facility.postal_code || null,
        country: formData.country?.trim() || facility.country || null,
      };

      mutate(updatedData, {
        onSuccess: () => {
          Alert.alert('Success', 'Facility details updated successfully');
          closePopup();
        },
        onError: (error: any) => {
          Alert.alert('Error', error?.message || 'Failed to update facility details');
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
            <Text style={addPatientStyles.headerTitle}>Edit Facility Information</Text>
          </View>

          <ScrollView contentContainerStyle={{ paddingHorizontal: 10, paddingBottom: 20 }}>
            <Text style={[addPatientStyles.fieldLabel, { fontWeight: 'bold', fontSize: 17, marginLeft: 10, marginTop: 15 }]}>
              Facility Details
            </Text>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Facility Image</Text>
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
              <Text style={addPatientStyles.fieldLabel}>Facility Name</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.facility_name}
                onChangeText={(value) => handleChange('facility_name', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Facility Type</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.facility_type}
                onChangeText={(value) => handleChange('facility_type', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Email Address</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.facility_email || ''}
                onChangeText={(value) => handleChange('facility_email', value)}
                keyboardType="email-address"
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Phone Number</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.facility_phone}
                onChangeText={(value) => handleChange('facility_phone', value)}
                keyboardType="phone-pad"
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Website</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.facility_website || ''}
                onChangeText={(value) => handleChange('facility_website', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Description</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 80, paddingHorizontal: 10, textAlignVertical: 'top' }]}
                value={formData.facility_description || ''}
                onChangeText={(value) => handleChange('facility_description', value)}
                multiline
              />
            </View>

            <Text style={[addPatientStyles.fieldLabel, { fontWeight: 'bold', fontSize: 17, marginLeft: 10, marginTop: 15 }]}>
              Location Information
            </Text>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Address</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 60, paddingHorizontal: 10, textAlignVertical: 'top' }]}
                value={formData.facility_address}
                onChangeText={(value) => handleChange('facility_address', value)}
                multiline
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>City</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.city || ''}
                onChangeText={(value) => handleChange('city', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Province</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.province || ''}
                onChangeText={(value) => handleChange('province', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Postal Code</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.postal_code || ''}
                onChangeText={(value) => handleChange('postal_code', value)}
              />
            </View>

            <View style={addPatientStyles.descriptionContainer}>
              <Text style={addPatientStyles.fieldLabel}>Country</Text>
              <TextInput 
                style={[addPatientStyles.descriptionInput, { height: 40, paddingHorizontal: 10 }]}
                value={formData.country || ''}
                onChangeText={(value) => handleChange('country', value)}
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



  return (
    <SafeAreaView style={{
      flex: 1,
      backgroundColor: '#f4f7fa',
    }} edges={['top']}>

      <ScrollView>
        <View style={styles.headerContainer}>
          <View style={{ flex: 1 }}>
            <Text style={styles.headerTitle}>Facility Information</Text>
            <Text style={[styles.headerTitle, { fontSize: 16 }]}>Facility ID: {facility?.facility_id}</Text>
          </View>
        </View>

        <View style={styles.contentContainer}>
          <View style={styles.profileImageContainer}>
            {facility?.facility_image_blob ? (
              <Image 
                source={{ uri: `data:image/jpeg;base64,${facility.facility_image_blob}` }}
                style={styles.profileImage}
                resizeMode="cover"
              />
            ) : (
              <View style={[styles.profileImage, { backgroundColor: '#e0e7ff', justifyContent: 'center', alignItems: 'center' }]}>
                <Ionicons name="business-outline" size={60} color="#4F46E5" />
              </View>
            )}
          </View>
          
          <Text style={styles.sectionTitle}>Facility Details</Text>

          <View style={styles.detailCard}>
            <View style={styles.detailRow}>
              <Ionicons name="business-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Facility Name</Text>
                <Text style={styles.detailValue}>{facility?.facility_name || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="briefcase-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Facility Type</Text>
                <Text style={styles.detailValue}>{facility?.facility_type || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="mail-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Email Address</Text>
                <Text style={styles.detailValue}>{facility?.facility_email || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="call-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Phone Number</Text>
                <Text style={styles.detailValue}>{facility?.facility_phone || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="globe-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Website</Text>
                <Text style={styles.detailValue}>{facility?.facility_website || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="document-text-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Description</Text>
                <Text style={styles.detailValue}>{facility?.facility_description || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="medkit-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Total Services</Text>
                <Text style={styles.detailValue}>{facility?.total_services || 0}</Text>
              </View>
            </View>
          </View>

          <Text style={styles.sectionTitle}>Location Information</Text>

          <View style={styles.detailCard}>
            <View style={styles.detailRow}>
              <Ionicons name="location-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Address</Text>
                <Text style={styles.detailValue}>{facility?.facility_address || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="business-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>City</Text>
                <Text style={styles.detailValue}>{facility?.city || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="map-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Province</Text>
                <Text style={styles.detailValue}>{facility?.province || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="pin-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Postal Code</Text>
                <Text style={styles.detailValue}>{facility?.postal_code || 'Not provided'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="earth-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Country</Text>
                <Text style={styles.detailValue}>{facility?.country || 'Not provided'}</Text>
              </View>
            </View>
          </View>

          <Text style={styles.sectionTitle}>System Information</Text>

          <View style={styles.detailCard}>
            <View style={styles.detailRow}>
              <Ionicons name="person-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>User ID</Text>
                <Text style={styles.detailValue}>{facility?.user_id}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="time-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Created At</Text>
                <Text style={styles.detailValue}>{facility?.created_at ? new Date(facility.created_at).toLocaleDateString() : 'N/A'}</Text>
              </View>
            </View>

            <View style={styles.detailRow}>
              <Ionicons name="sync-outline" size={20} color="#4F46E5" />
              <View style={styles.detailContent}>
                <Text style={styles.detailLabel}>Last Updated</Text>
                <Text style={styles.detailValue}>{facility?.updated_at ? new Date(facility.updated_at).toLocaleDateString() : 'N/A'}</Text>
              </View>
            </View>
          </View>

          <Pressable 
            onPress={openPopup} 
            style={styles.editButton}
          >
            <Ionicons name="create-outline" size={20} color="white" style={{ marginRight: 8 }} />
            <Text style={{ color: 'white', fontWeight: 'bold', fontSize: 16 }}>
              Edit Facility Information
            </Text>
          </Pressable>
        </View>

      </ScrollView>

      {openStatus && renderEditPopup()}
    </SafeAreaView>
  );
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
    flex: 1,
    flexDirection: 'row',
    justifyContent: 'space-between',
    padding: 25,
    height: 90,
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

