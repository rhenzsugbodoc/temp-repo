import React, { useState, useEffect } from 'react';
import { View, ScrollView, Pressable, Text, TextInput, useWindowDimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import DateTimePickerModal from 'react-native-modal-datetime-picker';
import { requestDetailStyles } from '@/assets/styles/patient/request/requestStyles';
import { registerCommonStyles } from '@/assets/styles/patient/auth/registerStyles';
import { addPatientStyles } from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';
import { useFacility } from '@/src/context/FacilityContext';
import { SubmitRequestData } from '@/src/services/service_requestService';
import { useRequestService } from '@/src/context/RequestContext';
import { getUserData } from '@/src/options/tokenHandler';
import {
  useCreateOneTimeServiceRequest,
  useFacilityCaregivers,
  useCreateRoutineServiceRequest,
} from '@/src/options/serviceRequestOptions';

export default function RequestList() {
  const router = useRouter();
  const { width: screenWidth } = useWindowDimensions();
  const formWidth = screenWidth * 0.85;

  const { form, setForm } = useRequestService();
  const [scheduleType, setScheduleType] = useState<'One-Time' | 'Routine'>('One-Time');
  const [isDateVisible, setDateVisible] = useState(false);
  const [isTimeVisible, setTimeVisible] = useState(false);
  const { facilityID, facilityServices } = useFacility();
  const [userData, setUserData] = useState<any>(null);
  const oneTimeMutation = useCreateOneTimeServiceRequest();
  const routineMutation = useCreateRoutineServiceRequest();

  const { data: facilityCaregivers } = useFacilityCaregivers(facilityID, {
    enabled: !!facilityID,
  });

  useEffect(() => {
    const fetchUser = async () => {
      const data = await getUserData();
      setUserData(data);
    };
    fetchUser();
  }, []);

  const handleConfirmDate = (selectedDate: Date) => {
    setForm((prev) => ({
      ...prev,
      preferred_date: selectedDate.toISOString().split('T')[0],
    }));
    setDateVisible(false);
  };

  const handleConfirmTime = (selectedTime: Date) => {
    setForm((prev) => ({
      ...prev,
      preferred_time: selectedTime.toISOString().split('T')[1].slice(0, 8),
    }));
    setTimeVisible(false);
  };

  const handleSubmit = async () => {
    try {
      const requestData: SubmitRequestData = {
        patient_id: userData?.user_id || null,
        service_id: form.service_id || null,
        service_description: form.service_description || '',
        preferred_date: form.preferred_date || null,
        preferred_time: form.preferred_time || null,
        preferred_caregiver_id: form.preferred_caregiver_id || null,
        service_type: form.service_type || scheduleType,
        facility_id: facilityID || null,
        notes: form.notes || null,
      };

      if (scheduleType === 'One-Time') {
        await oneTimeMutation.mutateAsync(requestData);
      } else {
        await routineMutation.mutateAsync(requestData);
      }

      router.push('/request_service/payment');
    } catch (error) {
      console.error('Submit error:', error);
    }
  };

  return (
    <SafeAreaView
      style={{
        flex: 1,
        backgroundColor: '#ffffff',
      }}
      edges={['top']}
    >
      <View style={[requestDetailStyles.headerContainer, { marginBottom: 20, backgroundColor: '#4a5cbe' }]}>
        <Text style={[requestDetailStyles.headerTitle, { color: 'white', fontSize: 28 }]}>Requests</Text>
      </View>

      <ScrollView>
        <View style={{ width: formWidth, alignSelf: 'center' }}>
          <Text style={[addPatientStyles.fieldLabel, { marginLeft: 10, marginBottom: 6 }]}>Schedule Details</Text>

          <View style={requestDetailStyles.scheduleTypeContainer}>
            <Pressable
              onPress={() => setScheduleType('One-Time')}
              style={[
                registerCommonStyles.genderButton,
                { backgroundColor: scheduleType === 'One-Time' ? '#4b5cbe' : '#8793d4' },
              ]}
            >
              <Text style={registerCommonStyles.genderText}>One-Time Service</Text>
            </Pressable>

            <Pressable
              onPress={() => setScheduleType('Routine')}
              style={[
                registerCommonStyles.genderButton,
                { backgroundColor: scheduleType === 'Routine' ? '#4b5cbe' : '#8793d4' },
              ]}
            >
              <Text style={registerCommonStyles.genderText}>Routine</Text>
            </Pressable>
          </View>

          <View style={addPatientStyles.datePickerWrapper}>
            <View style={addPatientStyles.datePickerContainer}>
              <Pressable
                onPress={() => setDateVisible(true)}
                style={[addPatientStyles.datePickerButton, { height: 45, justifyContent: 'center' }]}
              >
                <Text style={addPatientStyles.datePickerText}>Date of Service</Text>
              </Pressable>
              <DateTimePickerModal
                isVisible={isDateVisible}
                mode="date"
                onConfirm={handleConfirmDate}
                onCancel={() => setDateVisible(false)}
              />
            </View>

            <View style={{ flex: 1 }}>
              <Pressable
                onPress={() => setTimeVisible(true)}
                style={[addPatientStyles.datePickerButton, { height: 45, justifyContent: 'center' }]}
              >
                <Text style={addPatientStyles.datePickerText}>Time</Text>
              </Pressable>
              <DateTimePickerModal
                isVisible={isTimeVisible}
                mode="time"
                onConfirm={handleConfirmTime}
                onCancel={() => setTimeVisible(false)}
              />
            </View>
          </View>

          <View style={addPatientStyles.serviceTypeContainer}>
            <Text style={addPatientStyles.fieldLabel}>Select Specific Service</Text>
            <View style={addPatientStyles.serviceToggleItem}>
              <Picker
                selectedValue={form.service_id}
                onValueChange={(serviceId) =>
                  setForm((prev) => ({
                    ...prev,
                    service_id: serviceId,
                  }))
                }
              >
                {facilityServices.map((service) => (
                  <Picker.Item key={service.service_id} label={service.name} value={service.service_id} />
                ))}
              </Picker>
            </View>
          </View>

          <View style={addPatientStyles.descriptionContainer}>
            <Text style={addPatientStyles.fieldLabel}>Description</Text>
            <TextInput
              style={[
                addPatientStyles.descriptionInput,
                { height: 120, paddingHorizontal: 10, width: '100%', alignSelf: 'center' },
              ]}
              value={form.service_description}
              onChangeText={(text) => setForm((prev) => ({ ...prev, service_description: text }))}
              multiline
              textAlignVertical="top"
            />
          </View>

          <View style={addPatientStyles.serviceTypeContainer}>
            <Text style={addPatientStyles.fieldLabel}>Preferred Caregiver</Text>
            <View style={addPatientStyles.serviceToggleItem}>
              <Picker
                selectedValue={form.preferred_caregiver_id}
                onValueChange={(caregiverID) =>
                  setForm((prev) => ({
                    ...prev,
                    preferred_caregiver_id: caregiverID,
                  }))
                }
              >
                <Picker.Item label="No Preference" value={null} />
                {facilityCaregivers?.map((caregiver) => (
                  <Picker.Item
                    key={caregiver.caregiver_id}
                    label={caregiver.professional_display_name}
                    value={caregiver.caregiver_id}
                  />
                ))}
              </Picker>
            </View>
          </View>

          <View style={{ alignItems: 'stretch', backgroundColor: 'white', marginTop: 30 }}>
            <Pressable
              onPress={handleSubmit}
              style={[registerCommonStyles.signupButton, { marginHorizontal: 0, width: formWidth, alignSelf: 'center' }]}
            >
              <Text style={registerCommonStyles.signupButtonText}>Next</Text>
            </Pressable>
          </View>
        </View>
      </ScrollView>
    </SafeAreaView>
  );
}
