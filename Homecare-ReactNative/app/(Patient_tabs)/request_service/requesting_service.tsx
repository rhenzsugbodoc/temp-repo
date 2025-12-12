import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';
import DateTimePickerModal from 'react-native-modal-datetime-picker';
import * as DocumentPicker from 'expo-document-picker';
import {requestDetailStyles} from '@/assets/styles/patient/request/requestStyles';
import {useFacility} from '@/src/context/FacilityContext';
import {OneTimeData} from '@/src/services/service_requestService';
import { useRequestService } from '@/src/context/RequestContext';
import {getUserData} from '@/src/options/tokenHandler';
import { useCreateOneTimeServiceRequest } from '@/src/options/serviceRequestOptions';

export default function RequestList() {
    const router = useRouter();
    
    const {form , setForm} = useRequestService();
    const [scheduleType, setScheduleType] = useState<'one-time' | 'routine'>('one-time');    
    const [selectedCategory, setSelectedCategory] = useState<OneTimeData["service_category"]>("");

    const [isDateVisible, setDateVisible] = useState(false);
    const [isTimeVisible, setTimeVisible] = useState(false);
    const {facilityID, facilityServices} = useFacility();
    const [userData, setUserData] = useState<any>(null);
    const oneTimeMutation = useCreateOneTimeServiceRequest();
    
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
        setForm((prev) => ({
            ...prev,
            patient_id: userData?.user_id,
            facility_id: facilityID,
            service_category: selectedCategory as any,
        }));
        if (scheduleType === 'one-time') {
            await oneTimeMutation.mutateAsync(form);
        
        
        } else if (scheduleType === 'routine') {
            // await routineMutation.mutateAsync(form);   
        }
        router.push(`/request_service/payment`);
    };

    const handleChange = (key: keyof typeof form, value: any) => {
        setForm((prev)=> ({
            ...prev,
            [key]: value,
        }))
    };

    const serviceCategories = [
        { id: 1, label: "Assisted Living", value: "Assisted Living" },
        { id: 2, label: "Nursing Care", value: "Nursing Care" },
        { id: 3, label: "Companionship", value: "Companionship" },
        { id: 4, label: "Therapy", value: "Therapy" }, 
    ];

    return (
        <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#ffffff',
        padding: 10,
        }} edges={['top']}>

            <View style={requestDetailStyles.headerContainer}>
                <Text style={requestDetailStyles.headerTitle}>Requests</Text>
            </View>

            <ScrollView>
                <Text>Schedule Details</Text>
                <View style={requestDetailStyles.scheduleTypeContainer}> 
                <Pressable onPress={() => setScheduleType('one-time')} style={[requestDetailStyles.scheduleTypeButton, {backgroundColor: scheduleType==='one-time'?'#4454c3':'#ebe9ec'}]}>
                    <Text style={{textAlign:'center', color: scheduleType === 'one-time' ? 'white' : 'black'}}>One-Time Service</Text>
                </Pressable>
                <Pressable onPress={() => setScheduleType('routine')} style={[requestDetailStyles.scheduleTypeButton, {backgroundColor: scheduleType==='routine'?'#4454c3':'#ebe9ec'}]}>
                    <Text style={{textAlign:'center', color: scheduleType === 'routine' ? 'white' : 'black'}}>Routine</Text>
                </Pressable>
                </View>
                {/* date and time picker */}
                <View style={requestDetailStyles.datePickerWrapper}>
                    <View style={requestDetailStyles.datePickerContainer}>
                        <Pressable 
                            onPress={() => setDateVisible(true)} 
                            style={requestDetailStyles.datePickerButton}                        >
                            <Text style={requestDetailStyles.datePickerText}>Date of Service</Text>
                        </Pressable>
                        <DateTimePickerModal
                        isVisible={isDateVisible}
                        mode="date"
                        onConfirm={handleConfirmDate}
                        onCancel={() => setDateVisible(false)}
                        />
                    </View>
                    <View style={{flex: 1}}>
                        <Pressable 
                            onPress={() => setTimeVisible(true)} 
                            style={requestDetailStyles.datePickerButton}                        >
                            <Text style={requestDetailStyles.datePickerText}>Time</Text>
                        </Pressable>
                        <DateTimePickerModal
                        isVisible={isTimeVisible}
                        mode="time"            
                        onConfirm={handleConfirmTime}
                        onCancel={() => setTimeVisible(false)}
                        />
                    </View>
                </View>

                {/* <View style={{ marginVertical: 8}}> */}
                    <View style={requestDetailStyles.serviceTypeContainer}>
                        <Text>Select Category of Service</Text>
                        <View style={requestDetailStyles.serviceToggleItem}>
                            <Picker
                                selectedValue={selectedCategory}
                                onValueChange={(category) => setSelectedCategory(category)}
                            >
                                {serviceCategories.map((category) => (
                                    <Picker.Item key={category.id} label={category.label} value={category.value} />
                                ))}
                            </Picker>
                        </View>

                    </View>

                    <View style={requestDetailStyles.serviceTypeContainer}>
                        <Text>Select Specific Service</Text>
                            <View style={requestDetailStyles.serviceToggleItem}>

                            <Picker selectedValue={form.service_id} onValueChange={(serviceId) => setForm((prev)=>({
                                ...prev,
                                service_id: serviceId
                            }))}>
                                {facilityServices.map((service) => (
                                    <Picker.Item key={service.service_id} label={service.name} value={service.service_id} />
                                ))}
                            </Picker>
                        </View>
                    </View>
               

                <View style={requestDetailStyles.descriptionContainer}>
                    <Text>Description</Text>
                    <TextInput
                        style={[requestDetailStyles.descriptionInput, {height: 200}]}
                        value={form.service_description}
                        onChangeText={(text) => setForm((prev)=>({...prev, service_description: text}))}
                    />
                </View>
                
                {/* <View style={requestDetailStyles.descriptionContainer}>
                    <Text>Select File</Text>
                    <Pressable style={requestDetailStyles.fileInput} onPress={handleChange}>
                    </Pressable>
                </View> */}

             {/* Next Button */}

            <View style={{ alignItems: 'flex-end', backgroundColor: 'white',   shadowColor: '#000',
                shadowOffset: { width: 0, height: -2 },
                shadowOpacity: 0.5,
                shadowRadius: 4,
                elevation: 20}}>
                <Pressable onPress={handleSubmit} style={requestDetailStyles.submitButton}>
                    <Text style={{ color: 'white' }}>Next</Text>
                </Pressable>
            </View>
            </ScrollView>
   
        </SafeAreaView>
    );
}
