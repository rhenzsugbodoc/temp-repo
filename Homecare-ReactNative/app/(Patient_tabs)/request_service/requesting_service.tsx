import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getCompanyListOptions} from '../../../options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';
import DateTimePickerModal from 'react-native-modal-datetime-picker';
import * as DocumentPicker from 'expo-document-picker';
import {requestDetailStyles} from '../../../assets/styles/patient/request/requestStyles';

export default function RequestList() {
    const router = useRouter();
    const [scheduleType, setScheduleType] = useState<'one-time' | 'routine'>('one-time');
    const [isDateVisible, setDateVisible] = useState(false);
    const [isTimeVisible, setTimeVisible] = useState(false);
    const [date, setDate] = useState<Date | null>(null);
    const [time, setTime] = useState<Date | null>(null);
    const [description, setDescription] = useState('');
    const [selectedServiceTypeValue, setSelectedServiceTypeValue] = useState('Assisted Living');
    const [selectedSpecificServiceValue, setSelectedSpecificServiceValue] = useState('Assisted Living');
    const [file, setFile] = useState(null);

    const handleConfirmDate = (selectedDate : any) => {
        setDate(selectedDate);
        setDateVisible(false);
    };
    const handleConfirmTime = (selectedTime : any) => {
        setTime(selectedTime);
        setTimeVisible(false);
    };
    const handleProceed = async () => {
        router.push(`/request_service/payment`);  
    };
    const handleChange = async () => {
        
    };
    const serviceTypes = [
        { id: 1, label: "Assisted Living", value: "assisted_living" },
        { id: 2, label: "Nursing Care", value: "nursing_care" },
        { id: 3, label: "Companionship", value: "companionship" },
        { id: 4, label: "Therapy", value: "therapy" }, 
    ]
    const specificServices = [
        { id: 1, label: "Assisted Living", value: "assisted_living" },
        { id: 2, label: "Nursing Care", value: "nursing_care" },
        { id: 3, label: "Companionship", value: "companionship" },
        { id: 4, label: "Therapy", value: "therapy" }, 
    ]
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
                        <Text>Select Type of Service</Text>
                        <View style={requestDetailStyles.serviceToggleItem}>
                            <Picker selectedValue={selectedServiceTypeValue} onValueChange={(itemValue) => setSelectedServiceTypeValue(itemValue)}>
                                {serviceTypes.map((service) => (
                                <Picker.Item key={service.id} label={service.label} value={service.value} />
                                ))}
                            </Picker>
                        </View>

                    </View>

                    <View style={requestDetailStyles.serviceTypeContainer}>
                        <Text>Select Specific Service</Text>
                            <View style={requestDetailStyles.serviceToggleItem}>

                            <Picker  selectedValue={selectedSpecificServiceValue} onValueChange={(itemValue) => setSelectedSpecificServiceValue(itemValue)}>
                            {specificServices.map((service) => (
                                <Picker.Item key={service.id} label={service.label} value={service.value} />
                            ))}
                            </Picker>
                        </View>
                    </View>
                {/* </View> */}

                <View style={requestDetailStyles.descriptionContainer}>
                    <Text>Description</Text>
                    <TextInput style={[requestDetailStyles.descriptionInput, {height: 200}]} ></TextInput>
                </View>
                
                <View style={requestDetailStyles.descriptionContainer}>
                    <Text>Select File</Text>
                    <Pressable style={requestDetailStyles.fileInput}onPress={handleChange}>
                    </Pressable>
                </View>

             {/* Next Button */}

            <View style={{ alignItems: 'flex-end', backgroundColor: 'white',   shadowColor: '#000',
                shadowOffset: { width: 0, height: -2 },
                shadowOpacity: 0.5,
                shadowRadius: 4,
                elevation: 20}}>
                <Pressable onPress={handleProceed} style={requestDetailStyles.submitButton}>
                    <Text style={{ color: 'white' }}>Next</Text>
                </Pressable>
            </View>
            </ScrollView>
   
        </SafeAreaView>
    );
}
