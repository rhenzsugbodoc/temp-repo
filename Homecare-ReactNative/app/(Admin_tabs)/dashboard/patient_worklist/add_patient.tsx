import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getCompanyListOptions} from '@/options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';
import DateTimePickerModal from 'react-native-modal-datetime-picker';
import * as DocumentPicker from 'expo-document-picker';
import {addPatientStyles} from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';
import {countries} from '@/assets/lists/country_list'

export default function RequestList() {
    const router = useRouter();
    const [scheduleType, setPatientStatus] = useState<'regular' | 'pwd' | 'senior-citizen' | ''>('');
    const [isDateVisible, setDateVisible] = useState(false);
    const [isTimeVisible, setTimeVisible] = useState(false);
    const [date, setDate] = useState<Date | null>(null);
    const [time, setTime] = useState<Date | null>(null);
    const [description, setDescription] = useState('');
    const [selectedCountry, setSelectedCountry] = useState('Assisted Living');
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
        router.push(`/(Admin_tabs)/dashboard/patient_worklist`);  
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
        
        }} edges={['top']}>

            <View style={[addPatientStyles.headerContainer, {justifyContent: 'flex-start', gap: 10}]}>
                <Ionicons name="chevron-back" size={17} color="white" />
                <Text style={addPatientStyles.headerTitle}>Add New Patient</Text>
            </View>

            <ScrollView contentContainerStyle={{paddingHorizontal: 10}}>
                <Text style={[addPatientStyles.fieldLabel, {fontWeight: 'bold', fontSize: 17, marginLeft: 10}]}>Personal Information</Text>
    
                <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>First Name</Text>
                    <TextInput style={[addPatientStyles.descriptionInput, {height: 40}]} ></TextInput>
                </View>

                <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Last Name</Text>
                    <TextInput style={[addPatientStyles.descriptionInput, {height: 40}]} ></TextInput>
                </View>

                <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Date of Birth</Text>
                    <View style={addPatientStyles.datePickerContainer}>
                        <Pressable 
                            onPress={() => setDateVisible(true)} 
                            style={addPatientStyles.datePickerButton}                        >
                            
                        </Pressable>
                        <DateTimePickerModal
                        isVisible={isDateVisible}
                        mode="date"
                        onConfirm={handleConfirmDate}
                        onCancel={() => setDateVisible(false)}
                        />
                    </View>
                </View>

                <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Address</Text>
                    <TextInput style={[addPatientStyles.descriptionInput, {height: 50}]} ></TextInput>
                </View>                

                <View style={addPatientStyles.serviceTypeContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Nationality</Text>
                    <View style={addPatientStyles.serviceToggleItem}>
                        <Picker style={{height: 50, }} selectedValue={selectedCountry} onValueChange={(itemValue) => setSelectedCountry(itemValue)}>
                            {countries.map((country, index) => (
                            <Picker.Item key={index} label={country} value={country} />
                            ))}
                        </Picker>
                    </View>
                </View>
                
                
                <View style={addPatientStyles.descriptionContainer}>
                    <Text style={addPatientStyles.fieldLabel}>Patient Status</Text>
                    <View style={addPatientStyles.scheduleTypeContainer}> 
                        <Pressable onPress={() => setPatientStatus('regular')} style={[addPatientStyles.scheduleTypeButton, {backgroundColor: scheduleType==='regular'?'#4454c3':'#a1a9e1'}]}>
                            <Text style={{textAlign:'center', color: 'white'}}>Regular</Text>
                        </Pressable>
                        <Pressable onPress={() => setPatientStatus('pwd')} style={[addPatientStyles.scheduleTypeButton, {backgroundColor: scheduleType==='pwd'?'#4454c3':'#a1a9e1'}]}>
                            <Text style={{textAlign:'center', color: 'white'}}>PWD</Text>
                        </Pressable>
                        <Pressable onPress={() => setPatientStatus('senior-citizen')} style={[addPatientStyles.scheduleTypeButton, {backgroundColor: scheduleType==='senior-citizen'?'#4454c3':'#a1a9e1'}]}>
                            <Text style={{textAlign:'center', color: 'white' }}>Senior Citizen</Text>
                        </Pressable>
                    </View>
                </View>


       
                <Pressable onPress={handleProceed} style={addPatientStyles.submitButton}>
                    <Text style={{ color: 'white' }}>Next</Text>
                </Pressable>
            
            </ScrollView>
   
        </SafeAreaView>
    );
}
