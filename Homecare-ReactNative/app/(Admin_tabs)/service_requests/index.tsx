import React, { useState, useEffect, useRef } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, RefreshControl, Animated, TouchableWithoutFeedback } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';

import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { Ionicons } from '@expo/vector-icons';
import {useFacilityOneTimeRequests, useFacilityRoutineRequests, useEditServiceRequest } from '@/src/options/serviceRequestOptions';
import { useCarePlan } from '@/src/context/Admin-CarePlanContext';
import DateTimePickerModal from 'react-native-modal-datetime-picker';
import {addPatientStyles} from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';

const { height, width } = Dimensions.get('window');

export default function RequestList() {
  const router = useRouter();
  const {data: oneTimeRequests, isLoading: loadingOneTime, isFetching: isFetchingOneTime, refetch: refetchOneTime} = useFacilityOneTimeRequests();
  const {data: routineRequests, isLoading: loadingRoutine, isFetching: isFetchingRoutine, refetch: refetchRoutine} = useFacilityRoutineRequests();
  const editServiceRequestMutation = useEditServiceRequest();
  const { setRequestID, setPatientID, setFacilityID } = useCarePlan();
  const [selectedCategory, setSelectedCategory] = useState<'One-Time' | 'Routine' >('One-Time');
  const serviceCategory: { [key: number]: string } = {5: 'Assisted Living', 6: 'Nursing Care', 9: 'Companionship', 11: 'Therapy'};
  
  // Edit popup state
  const [visible, setVisible] = useState(false);
  const [selectedRequest, setSelectedRequest] = useState<any>(null);
  const slideAnim = useRef(new Animated.Value(height)).current;
  const [editStatus, setEditStatus] = useState<'Pending' | 'Confirmed' | 'In Progress' | 'Completed' | 'Cancelled'>('Pending');
  const [editAssignedDate, setEditAssignedDate] = useState<Date | null>(null);
  const [editAssignedTime, setEditAssignedTime] = useState<Date | null>(null);
  const [editAdminNotes, setEditAdminNotes] = useState('');
  const [isDateVisible, setDateVisible] = useState(false);
  const [isTimeVisible, setTimeVisible] = useState(false);

  const openEditPopup = (request: any) => {
    setSelectedRequest(request);
    setEditStatus(request.status);
    setEditAssignedDate(request.assigned_date ? new Date(request.assigned_date) : null);
    setEditAssignedTime(request.assigned_time ? new Date(`2000-01-01 ${request.assigned_time}`) : null);
    setEditAdminNotes(request.admin_notes || '');
    setVisible(true);
    Animated.timing(slideAnim, {
      toValue: 0,
      duration: 300,
      useNativeDriver: true,
    }).start();
  };

  const closeEditPopup = () => {
    Animated.timing(slideAnim, {
      toValue: height,
      duration: 300,
      useNativeDriver: true,
    }).start(() => {
      setVisible(false);
      setSelectedRequest(null);
    });
  };

  const handleSaveEdit = () => {
    if (!selectedRequest) return;
    
    const formatDate = (date: Date | null) => {
      if (!date) return null;
      const year = date.getFullYear();
      const month = String(date.getMonth() + 1).padStart(2, '0');
      const day = String(date.getDate()).padStart(2, '0');
      return `${year}-${month}-${day}`;
    };

    const formatTime = (time: Date | null) => {
      if (!time) return null;
      const hours = String(time.getHours()).padStart(2, '0');
      const minutes = String(time.getMinutes()).padStart(2, '0');
      return `${hours}:${minutes}:00`;
    };

    editServiceRequestMutation.mutate({
      request_id: selectedRequest.request_id,
      status: editStatus,
      assigned_date: formatDate(editAssignedDate),
      assigned_time: formatTime(editAssignedTime),
      admin_notes: editAdminNotes,
    }, {
      onSuccess: () => {
        closeEditPopup();
        if (selectedCategory === 'One-Time') {
          refetchOneTime();
        } else {
          refetchRoutine();
        }
      }
    });
  };

  const handleCreateCarePlanFromEdit = () => {
    if (!selectedRequest) return;
    
    if (selectedRequest.service_type === 'Routine') {
      setRequestID?.(parseInt(selectedRequest.request_id));
      setPatientID?.(parseInt(selectedRequest.patient_id));
      setFacilityID?.(parseInt(selectedRequest.facility_id));

      editServiceRequestMutation.mutate({
        request_id: selectedRequest.request_id,
        status: 'Confirmed'
      });
      
      closeEditPopup();
      router.push('/(Admin_tabs)/service_requests/create_careplan');
    }
  };

  const handleConfirmDate = (selectedDate: any) => {
    setEditAssignedDate(selectedDate);
    setDateVisible(false);
  };

  const handleConfirmTime = (selectedTime: any) => {
    setEditAssignedTime(selectedTime);
    setTimeVisible(false);
  };
  
  const handleAccept = (requestId: string, patientId: string, facilityId: string, serviceType: string) => {
    if (serviceType === 'Routine') {
      setRequestID?.(parseInt(requestId));
      setPatientID?.(parseInt(patientId));
      setFacilityID?.(parseInt(facilityId));

      editServiceRequestMutation.mutate({
        request_id: requestId,
        status: 'Confirmed'
      });
      router.push('/(Admin_tabs)/service_requests/create_careplan');

    } else {
    
      editServiceRequestMutation.mutate({
        request_id: requestId,
        status: 'Confirmed'
      });
    }
  }
  const handleReject = (requestId: string) => {
    editServiceRequestMutation.mutate({
      request_id: requestId,
      status: 'Cancelled'
    });
  }
  
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    padding: 15
    
  }} edges={['top']}>



    <ScrollView
      refreshControl={
        <RefreshControl
          refreshing={selectedCategory === 'One-Time' ? isFetchingOneTime : isFetchingRoutine}
          onRefresh={() => selectedCategory === 'One-Time' ? refetchOneTime() : refetchRoutine()}
          colors={['#4454c3']}
          tintColor="#4454c3"
        />
      }
    >
      <View style={[styles.row, {backgroundColor: '#f3f4f6'}]}>
        {/* <Pressable onPress={() => setSelectedCategory('All')} style={selectedCategory === 'All' ? styles.selectedTypeBox : styles.unselectedTypeBox}>
          <Text style={selectedCategory === 'All' ? styles.selectedTypeButtonText : styles.unselectedTypeButtonText}>All</Text>
        </Pressable> */}
        <Pressable onPress={() => setSelectedCategory('One-Time')} style={selectedCategory === 'One-Time' ? styles.selectedTypeBox : styles.unselectedTypeBox}>
          <View style={{flexDirection: 'row', alignItems: 'center', gap: 5}}>
            <Ionicons name="flash-outline" size={16} />
            <Text style={selectedCategory === 'One-Time' ? styles.selectedTypeButtonText : styles.unselectedTypeButtonText}>One-Time</Text>
          </View>
        </Pressable>
        <Pressable onPress={() => setSelectedCategory('Routine')} style={selectedCategory === 'Routine' ? styles.selectedTypeBox : styles.unselectedTypeBox}>
          <View style={{flexDirection: 'row', alignItems: 'center', gap: 5}}>
            <Ionicons name="repeat-outline" size={16} />
            <Text style={selectedCategory === 'Routine' ? styles.selectedTypeButtonText : styles.unselectedTypeButtonText}>Routine</Text>
          </View>
        </Pressable>
      </View>
      
      {(selectedCategory === 'One-Time' ? oneTimeRequests : routineRequests)?.map((request) => (
        <View style={styles.itemCard} key={request.request_id}>
          <View style={styles.row}>
            <View style={[styles.serviceTypeBubble]}>
              <View style={{flexDirection: 'row', alignItems: 'center', gap: 5}}>
                <Ionicons name={selectedCategory === 'One-Time' ? "flash-outline" : "repeat-outline"} size={14} color="#ffffff" />
                <Text style={styles.serviceTypeBubbleText}>{selectedCategory}</Text>
              </View>
            </View>
            <Text style={styles.requestIDText}>REQ-NO: {request.request_id}</Text>
          </View>

          <Text style={styles.serviceTitleText}>{request.service_name}</Text>

          <Text style={styles.serviceCategoryText}>{serviceCategory[request.service_category]}</Text>
        
          {/* Patient Name*/}
          <View style={styles.serviceDetailRow}> 
            <Ionicons name="person-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={[styles.serviceDetailText, {color: 'black'}]}>{request.patient_first_name} {request.patient_last_name}</Text>
          </View>
          {/* Date */}
          <View style={styles.serviceDetailRow}>
            <Ionicons name="calendar-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.preferred_date}</Text>
          </View>
          {/* Time */}
          {/* <View style={styles.serviceDetailRow}>
            <Ionicons name="time-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.preferred_time}</Text>
          </View> */}
          {/* Preferred Caregiver */}
          {/* <View style={styles.serviceDetailRow}>
            <Ionicons name="medkit-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.preferred_caregiver_first_name} {request.preferred_caregiver_last_name}</Text>
          </View> */}
          {/* Status */}
          <View style={styles.serviceDetailRow}>
            <Ionicons name="checkmark-circle-outline" size={16} style={styles.serviceDetailIcon} />
            <Text style={styles.serviceDetailText}>{request.status}</Text>
          </View>

          <View style={styles.buttonRow}>
            {request.status === 'Pending' && (
              <>
                <Pressable 
                  onPress={() => handleAccept(request.request_id, request.patient_id, request.facility_id, request.service_type)} 
                  style={styles.acceptButton}
                >
                  <Text style={styles.acceptButtonText}>Accept</Text>
                </Pressable>
                <Pressable 
                  onPress={() => handleReject(request.request_id)} 
                  style={styles.rejectButton}
                >
                  <Text style={styles.rejectButtonText}>Reject</Text>
                </Pressable>
              </>
            )}
            {(request.status !== 'Cancelled' && request.status !== 'Completed') && (
            <Pressable 
              onPress={() => openEditPopup(request)} 
              style={styles.rejectButton}
            >
              <Text style={styles.rejectButtonText}>Edit</Text>
            </Pressable>
            )}
          </View>
           
        </View>
      ))}
      

      <Pressable onPress={() => router.push('/(Admin_tabs)/service_requests/create_careplan')} >
        <Text style={{color: '#4b5cbe', fontWeight: '600', fontSize: 16, textAlign: 'center', marginVertical: 10}}>Create Care Plan</Text>
      </Pressable>
    </ScrollView>

    {visible && (
      <TouchableWithoutFeedback onPress={closeEditPopup}>
        <View style={styles.overlay}>
          <TouchableWithoutFeedback>
            <Animated.View style={[styles.popup, { transform: [{ translateY: slideAnim }] }]}>
              <View style={styles.popupContent}>
                <Text style={styles.popupTitle}>Edit Service Request</Text>
                <Text style={styles.popupSubtitle}>REQ-NO: {selectedRequest?.request_id}</Text>

                <ScrollView style={{width: '100%'}} showsVerticalScrollIndicator={false}>
                  {/* Status */}
                  <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Status</Text>
                    <View style={[addPatientStyles.descriptionInput, {height: 50, justifyContent: 'center', paddingHorizontal: 0}]}>
                      <Picker
                        selectedValue={editStatus}
                        onValueChange={(itemValue) => setEditStatus(itemValue)}
                        style={{ flex: 1 }}
                      >
                        <Picker.Item label="Pending" value="Pending" />
                        <Picker.Item label="Confirmed" value="Confirmed" />
                        <Picker.Item label="In Progress" value="In Progress" />
                        <Picker.Item label="Completed" value="Completed" />
                        <Picker.Item label="Cancelled" value="Cancelled" />
                      </Picker>
                    </View>
                  </View>

                  {/* Assigned Date */}
                  <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Assigned Date</Text>
                    <View style={addPatientStyles.datePickerContainer}>
                      <Pressable 
                        onPress={() => setDateVisible(true)} 
                        style={addPatientStyles.datePickerButton}
                      >
                        <Text style={{color: editAssignedDate ? '#000' : '#999'}}>
                          {editAssignedDate ? editAssignedDate.toLocaleDateString() : 'Select Date'}
                        </Text>
                      </Pressable>
                      <DateTimePickerModal
                        isVisible={isDateVisible}
                        mode="date"
                        onConfirm={handleConfirmDate}
                        onCancel={() => setDateVisible(false)}
                      />
                    </View>
                  </View>

                  {/* Assigned Time */}
                  <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Assigned Time</Text>
                    <View style={addPatientStyles.datePickerContainer}>
                      <Pressable 
                        onPress={() => setTimeVisible(true)} 
                        style={addPatientStyles.datePickerButton}
                      >
                        <Text style={{color: editAssignedTime ? '#000' : '#999'}}>
                          {editAssignedTime ? editAssignedTime.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}) : 'Select Time'}
                        </Text>
                      </Pressable>
                      <DateTimePickerModal
                        isVisible={isTimeVisible}
                        mode="time"
                        onConfirm={handleConfirmTime}
                        onCancel={() => setTimeVisible(false)}
                      />
                    </View>
                  </View>

                  {/* Admin Notes */}
                  <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Admin Notes</Text>
                    <TextInput 
                      style={[addPatientStyles.descriptionInput, {height: 80, textAlignVertical: 'top', paddingTop: 10}]}
                      multiline
                      numberOfLines={4}
                      value={editAdminNotes}
                      onChangeText={setEditAdminNotes}
                      placeholder="Enter notes..."
                    />
                  </View>

                  {/* Create Care Plan Button - Only for Routine requests */}
                  {selectedRequest?.service_type === 'Routine' && (
                    <Pressable onPress={handleCreateCarePlanFromEdit} style={styles.createCarePlanButton}>
                      <Ionicons name="clipboard-outline" size={18} color="#4b5cbe" style={{marginRight: 8}} />
                      <Text style={styles.createCarePlanButtonText}>Create Care Plan</Text>
                    </Pressable>
                  )}
                  
                  <View style={styles.popupButtonRow}>
                    <Pressable onPress={closeEditPopup} style={styles.popupCancelButton}>
                      <Text style={styles.popupCancelButtonText}>Cancel</Text>
                    </Pressable>
                    <Pressable onPress={handleSaveEdit} style={styles.popupSaveButton}>
                      <Text style={styles.popupSaveButtonText}>Save Changes</Text>
                    </Pressable>
                  </View>
                </ScrollView>

    
              </View>
            </Animated.View>
          </TouchableWithoutFeedback>
        </View>
      </TouchableWithoutFeedback>
    )}
  </SafeAreaView>;
}


const styles = StyleSheet.create({
  selectedTypeBox: {
    backgroundColor: '#f3f4f6',
    borderRadius: 8,
    paddingHorizontal: 12,
    paddingVertical: 8,
    flexGrow: 1,
    alignItems: 'center',
    shadowColor: '#000',
    shadowOpacity: 0.5,
    shadowOffset: { width: 0, height: 0 },
    shadowRadius: 0,
    elevation: 2,
   
  },
  unselectedTypeBox: {
    backgroundColor: '#f3f4f6',
    borderRadius: 8,
    paddingHorizontal: 12,
    paddingVertical: 8,
    flexGrow: 1,
    alignItems: 'center',

  },
  selectedTypeButtonText: {
    fontSize: 14,
    color: 'black',
  },
  unselectedTypeButtonText: {
    fontSize: 14,
    color: '#6b7280',
  },
  itemCard: {
    padding: 15,
    alignItems: 'flex-start',
    backgroundColor: '#ffffff',
    borderRadius: 10,
    marginBottom: 15,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 1, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },
  row: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    marginBottom: 10,
    gap: 10,
  },
  serviceTypeBubble: {
    paddingVertical: 6,
    paddingHorizontal: 12,
    borderRadius: 20,
    backgroundColor: '#4b5cbe',
  },
  serviceTypeBubbleText: {
    color: '#ffffff',
    fontSize: 14,
  },
  serviceCategoryText: {
    fontSize: 14,
    color: '#727986',
    marginBottom: 5,
  },
  requestIDText: {
    fontSize: 14,
    color: '#6b7280',
  },
  serviceTitleText: {
    fontSize: 18,
    fontWeight: '600',
    color: '#182031',
  },
  serviceDetailRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',

    gap:10,
    paddingVertical: 4,
  },
  serviceDetailIcon: {
    color: '#6b7280'
  },
  serviceDetailText: {
    color: '#6b7280',
    fontSize: 14,
  },

  buttonRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    gap: 10,
    marginTop: 10,
  },
  acceptButton: {
    flex: 1,
    backgroundColor: '#4b5cbe',
    paddingVertical: 8,
    
    borderRadius: 8,
    alignItems: 'center',
  },
  acceptButtonText: {
    color: '#ffffff',
    fontSize: 13,
    fontWeight: '600',
  },
  rejectButton: {
    flex: 1,
    backgroundColor: '#f4f7fa',
    paddingVertical: 8,
    borderRadius: 8,
    alignItems: 'center',
  },
  rejectButtonText: {
    color: '#000000',
    fontSize: 13,
    fontWeight: '600',
  },
  overlay: {
    position: 'absolute',
    top: -60,
    left: 0,
    width,
    height,
    backgroundColor: 'rgba(0,0,0,0.5)',
    justifyContent: 'flex-end',

  },
  popup: {
    width: '100%',
    height: height * 0.7, // 70% of screen height (taller than prescription popup)
    backgroundColor: 'white',
    borderTopLeftRadius: 20,
    borderTopRightRadius: 20,
    position: 'absolute',
    bottom: 0,
    zIndex: 10000,
    elevation: 10000,
  },
  popupContent: {
    flex: 1,
    justifyContent: 'flex-start',
    alignItems: 'center',
    padding: 20,
    paddingBottom: 10,
  },
  popupTitle: {
    fontSize: 20,
    fontWeight: 'bold',
    color: '#182031',
    marginBottom: 5,
  },
  popupSubtitle: {
    fontSize: 14,
    color: '#6b7280',
    marginBottom: 15,
  },
  popupButtonRow: {
    flexDirection: 'row',
    gap: 10,
    width: '100%',
    marginTop: 10,
  },
  popupCancelButton: {
    flex: 1,
    backgroundColor: '#f4f7fa',
    paddingVertical: 12,
    borderRadius: 8,
    alignItems: 'center',
  },
  popupCancelButtonText: {
    color: '#000000',
    fontSize: 14,
    fontWeight: '600',
  },
  popupSaveButton: {
    flex: 1,
    backgroundColor: '#4b5cbe',
    paddingVertical: 12,
    borderRadius: 8,
    alignItems: 'center',
  },
  popupSaveButtonText: {
    color: '#ffffff',
    fontSize: 14,
    fontWeight: '600',
  },
  createCarePlanButton: {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: '#eef2ff',
    paddingVertical: 12,
    borderRadius: 8,
    marginTop: 10,
    marginBottom: 10,
    borderWidth: 1,
    borderColor: '#4b5cbe',
  },
  createCarePlanButtonText: {
    color: '#4b5cbe',
    fontSize: 14,
    fontWeight: '600',
  },
});