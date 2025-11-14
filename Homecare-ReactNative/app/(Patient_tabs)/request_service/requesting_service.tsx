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
        { label: "Assisted Living", value: "assisted_living" },
        { label: "Nursing Care", value: "nursing_care" },
        { label: "Companionship", value: "companionship" },
        { label: "Therapy", value: "therapy" }, // I corrected the value here, previously it was duplicated
    ]
    const specificServices = [
        { label: "Assisted Living", value: "assisted_living" },
        { label: "Nursing Care", value: "nursing_care" },
        { label: "Companionship", value: "companionship" },
        { label: "Therapy", value: "therapy" }, // I corrected the value here, previously it was duplicated
    ]
    return (
        <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#ffffff',
        padding: 10,
        }} edges={['top']}>

            <View style={{ height: 60}}>
                <Text style={{color: '#8c82c6' , fontSize: 20}}>Requests</Text>
            </View>

            <ScrollView>
                <Text>Schedule Details</Text>
                <View style={{flexDirection: 'row', gap: 5, margin: 10}}>
                <Pressable onPress={() => setScheduleType('one-time')} style={{borderRadius: 5, padding: 10, flex: 1, backgroundColor: scheduleType === 'one-time' ? '#4454c3' : '#ebe9ec'}}>
                    <Text style={{textAlign:'center', color: scheduleType === 'one-time' ? 'white' : 'black'}}>One-Time Service</Text>
                </Pressable>
                <Pressable onPress={() => setScheduleType('routine')} style={{borderRadius: 5, padding: 10, flex: 1, backgroundColor: scheduleType === 'routine' ? '#4454c3' : '#ebe9ec'}}>
                    <Text style={{textAlign:'center', color: scheduleType === 'routine' ? 'white' : 'black'}}>Routine</Text>
                </Pressable>
                </View>
                {/* date and time picker */}
                <View style={{flexDirection: 'row', padding:10, gap: 10, marginVertical: 8}}>
                    <View style={{flex: 1}}>
                        <Pressable 
                            onPress={() => setDateVisible(true)} 
                            style={{ backgroundColor: '#ebe9ec', padding: 10, borderRadius: 8, alignItems: 'center' }}                        >
                            <Text style={{ color: '#79618a', fontWeight: 'bold' }}>Date of Service</Text>
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
                            style={{ backgroundColor: '#ebe9ec', padding: 10, borderRadius: 8, alignItems: 'center' }}                        >
                            <Text style={{ color: '#79618a', fontWeight: 'bold' }}>Time</Text>
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
                    <View style={{padding: 10, gap: 8}}>
                        <Text>Select Type of Service</Text>
                        <View style={{ borderRadius: 10, borderWidth: 1, borderColor: '#ccc', overflow: 'hidden' }}>
                            <Picker selectedValue={selectedServiceTypeValue} onValueChange={(itemValue) => setSelectedServiceTypeValue(itemValue)}>
                                {serviceTypes.map((service) => (
                                <Picker.Item key={service.value} label={service.label} value={service.value} />
                                ))}
                            </Picker>
                        </View>

                    </View>

                    <View style={{padding: 10, gap: 8}}>
                        <Text>Select Specific Service</Text>
                            <View style={{ borderRadius: 10, borderWidth: 1, borderColor: '#ccc', overflow: 'hidden' }}>

                            <Picker  selectedValue={selectedSpecificServiceValue} onValueChange={(itemValue) => setSelectedSpecificServiceValue(itemValue)}>
                            {specificServices.map((service) => (
                                <Picker.Item key={service.value} label={service.label} value={service.value} />
                            ))}
                            </Picker>
                        </View>
                    </View>
                {/* </View> */}

                <View style={{padding: 10, gap: 8}}>
                    <Text>Description</Text>
                    <TextInput style={{height: 200, borderRadius: 10, borderWidth: 1, borderColor: '#ccc'}} ></TextInput>
                </View>
                
                <View style={{padding: 10, gap: 8}}>
                    <Text>Select File</Text>
                    <Pressable style={{padding: 20, borderRadius: 10, borderWidth: 1, borderColor: '#ccc'}}onPress={handleChange}>
                    </Pressable>
                </View>

             {/* Next Button */}

            <View style={{ alignItems: 'flex-end', backgroundColor: 'white',   shadowColor: '#000',
                shadowOffset: { width: 0, height: -2 },
                shadowOpacity: 0.5,
                shadowRadius: 4,
                elevation: 20}}>
                <Pressable onPress={handleProceed} style={styles.submitButton}>
                    <Text style={{ color: 'white' }}>Next</Text>
                </Pressable>
            </View>
            </ScrollView>
   
        </SafeAreaView>
    );
}
const styles = StyleSheet.create({

submitButton: {
    backgroundColor: '#22449e',
    padding: 15,
    paddingHorizontal: 20,
    borderRadius: 20,
    alignItems: 'center',
    margin: 10, 
    justifyContent: 'flex-end',

   
},
 
pickersRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'flex-start',
    marginVertical: 8,
},
pickerContainer: {
    width: '40%', // each picker takes 40% of screen width
},
picker: {
    width: '100%',
},

});