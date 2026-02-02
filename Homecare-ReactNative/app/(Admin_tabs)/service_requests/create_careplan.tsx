import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';
import DateTimePickerModal from 'react-native-modal-datetime-picker';
import {requestDetailStyles} from '@/assets/styles/patient/request/requestStyles';
import { CreateCarePlanData } from '@/src/services/Admin_careplanService';
import { useCarePlan } from '@/src/context/Admin-CarePlanContext';
import { useFacilityDoctors} from '@/src/options/serviceRequestOptions';
import { useCreateCarePlan } from '@/src/options/Admin_carePlanQueryOptions';

export default function CreateCarePlan() {
    const router = useRouter();
    const { requestID, patientID, facilityID, setCarePlanID } = useCarePlan();
    const createCarePlanMutation = useCreateCarePlan();
    
    const [form, setForm] = useState<CreateCarePlanData>({
        patient_id: patientID || 0,
        doctor_id: 0,
        request_id: requestID || 0,
        plan_name: '',
        plan_type: 'Medical',
        end_date: null,
        goals: null,
        notes: null,
    });
    
    const [isDateVisible, setDateVisible] = useState(false);
 
  


    const { data: facilityDoctors } = useFacilityDoctors(facilityID || 0, 
        !!facilityID
    );



    const handleConfirmDate = (selectedDate: Date) => {
        setForm((prev) => ({
            ...prev,
            end_date: selectedDate.toISOString().split('T')[0],
        }));
        setDateVisible(false);
    };


    const handleSubmit = async () => {
        try {
            const response = await createCarePlanMutation.mutateAsync(form);
          
            if (response?.data?.care_plan_id) {
                setCarePlanID?.(parseInt(response.data.care_plan_id));
            }
            router.push('/(Admin_tabs)/service_requests/assign_caregiver');
        } catch (error) {
            console.error('Error submitting care plan:', error);
        }
    };


    return (
        <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#ffffff',
        padding: 10,
        }} edges={['top']}>

            <View style={requestDetailStyles.headerContainer}>
                <Text style={requestDetailStyles.headerTitle}>Create Care Plan</Text>
            </View>

            <ScrollView>
          
                {/* Plan Name */}
                <View style={requestDetailStyles.descriptionContainer}>
                    <Text>Care Plan Name</Text>
                    <TextInput
                        style={requestDetailStyles.descriptionInput}
                        value={form.plan_name}
                        onChangeText={(text) => setForm((prev) => ({...prev, plan_name: text}))}
                        placeholder="Enter care plan name"
                    />
                </View>

                {/* Plan Type Picker */}
                <View style={requestDetailStyles.serviceTypeContainer}>
                    <Text>Plan Type</Text>
                    <View style={requestDetailStyles.serviceToggleItem}>
                        <Picker 
                            selectedValue={form.plan_type} 
                            onValueChange={(value) => setForm((prev) => ({...prev, plan_type: value}))}
                        >
                            <Picker.Item label="Medical" value="Medical" />
                            <Picker.Item label="Therapy" value="Therapy" />
                            <Picker.Item label="Rehabilitation" value="Rehabilitation" />
                            <Picker.Item label="Palliative" value="Palliative" />
                            <Picker.Item label="Preventive" value="Preventive" />
                        </Picker>
                    </View>
                </View>

                {/* Doctor Selection */}
                <View style={requestDetailStyles.serviceTypeContainer}>
                    <Text>Select Doctor</Text>
                    <View style={requestDetailStyles.serviceToggleItem}>
                        <Picker 
                            selectedValue={form.doctor_id} 
                            onValueChange={(doctorId) => setForm((prev) => ({...prev, doctor_id: doctorId}))}
                        >
                            <Picker.Item label="Select a doctor" value={null} />
                            {facilityDoctors?.map((doctor) => (
                                <Picker.Item 
                                    key={doctor.doctor_id} 
                                    label={doctor.professional_display_name} 
                                    value={doctor.doctor_id} 
                                />
                            ))}
                        </Picker>
                    </View>
                </View>
        
                {/* End Date Picker */}
                <View style={requestDetailStyles.datePickerWrapper}>
                    <View style={requestDetailStyles.datePickerContainer}>
                        <Pressable 
                            onPress={() => setDateVisible(true)} 
                            style={requestDetailStyles.datePickerButton}
                        >
                            <Text style={requestDetailStyles.datePickerText}>
                                {form.end_date || 'End Date (Optional)'}
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

                {/* Goals */}
                <View style={requestDetailStyles.descriptionContainer}>
                    <Text>Goals</Text>
                    <TextInput
                        style={[requestDetailStyles.descriptionInput, {height: 100}]}
                        value={form.goals || ''}
                        onChangeText={(text) => setForm((prev) => ({...prev, goals: text}))}
                        placeholder="Enter care plan goals"
                        multiline
                    />
                </View>
               

                <View style={requestDetailStyles.descriptionContainer}>
                    <Text>Notes</Text>
                    <TextInput
                        style={[requestDetailStyles.descriptionInput, {height: 100}]}
                        value={form.notes || ''}
                        onChangeText={(text) => setForm((prev) => ({...prev, notes: text}))}
                        placeholder="Enter additional notes"
                        multiline
                    />
                </View>
           
            <View style={{ alignItems: 'stretch', backgroundColor: 'white',   shadowColor: '#000',
                shadowOffset: { width: 0, height: -2 },
                shadowOpacity: 0.5,
                shadowRadius: 4,
                elevation: 20}}>
                <Pressable onPress={handleSubmit} style={requestDetailStyles.submitButton}>
                    <Text style={{ color: 'white' }}>Create Care Plan</Text>
                </Pressable>
            </View>
            </ScrollView>
   
        </SafeAreaView>
    );
}
