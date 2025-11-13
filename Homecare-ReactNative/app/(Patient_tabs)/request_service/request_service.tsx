import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getCompanyListOptions} from '../../../options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';
import DateTimePickerModal from 'react-native-modal-datetime-picker';

export default function RequestList() {
    const router = useRouter();
    const [isDateVisible, setDateVisible] = useState(false);
    const [isTimeVisible, setTimeVisible] = useState(false);
    const [date, setDate] = useState(null);
    const [time, setTime] = useState(null); 
    const [description, setDescription] = useState('');
    const [selectedServiceTypeValue, setSelectedServiceTypeValue] = useState('Assisted Living');
    const [selectedSpecificServiceValue, setSelectedSpecificServiceValue] = useState('Assisted Living');
    const [file, setFile] = useState(null);

    const handleConfirmDate = (selectedDate) => {
        setDate(selectedDate);
        setDateVisible(false);
    };
    const handleConfirmTime = (selectedTime) => {
        setTime(selectedTime);
        setTimeVisible(false);
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
        backgroundColor: '#f5f7fa',
        padding: 10,
        }} edges={['top']}>

            <View style={{ height: 60}}>
                <Text style={{color: '#8c82c6' , fontSize: 20}}>Requests</Text>
            </View>

            <ScrollView>
                <Text>Schedule Details</Text>
                {/* service type picker */}
                <View>
                    <Pressable>One-Time Service</Pressable>
                    <Pressable>Routine</Pressable>
                </View>
                {/* date and time picker */}
                <View>
                    
                    <View> 
                        <Button title="Date of Service" onPress={() => setDateVisible(true)} />
                        <Text>{date ? date.toDateString() : 'No date selected'}</Text>
                        <DateTimePickerModal
                        isVisible={isDateVisible}
                        mode="date"
                        onConfirm={handleConfirmDate}
                        onCancel={() => setDateVisible(false)}
                        />
                    </View>
                    <View>
                        <Button title="Time" onPress={() => setPickerVisible(true)} />
                        <Text>{time ? time.toTimeString() : 'No Time selected'}</Text>
                        <DateTimePickerModal
                        isVisible={isPickerVisible}
                        mode="time"            
                        onConfirm={handleConfirmTime}
                        onCancel={() => setTimeVisible(false)}
                        />
                    </View>
                </View>

                <View>
                    {/* Details of Request */}
                    <View style={styles.pickersRow}>
                        <Text>Select Type of Service</Text>
                        
                        <Picker style={{flex: 1, flexDirection: 'row'}} selectedValue={selectedServiceTypeValue} onValueChange={(itemValue) => setSelectedServiceTypeValue(itemValue)}>
                            {serviceTypes.map((service) => (
                                <Picker.Item
                                key={service.value} 
                                label={service.label} 
                                value={service.value} 
                                />
                            ))}
                        </Picker>
                    </View>
                    <View>
                        <Text>Select Specific Service</Text>
                        <Picker style={{flex: 1,}} selectedValue={selectedSpecificServiceValue} onValueChange={(itemValue) => setSelectedSpecificServiceValue(itemValue)}>
                            {specificServices.map((service) => (
                                <Picker.Item
                                key={service.value} 
                                label={service.label} 
                                value={service.value} 
                                />
                            ))}
                        </Picker>
                    </View>            
                </View>
                <View>
                    <Text>Description</Text>
                    <TextInput style={{height: 300}}  placeholder="Additional Details"></TextInput>
                </View>
                <View>
                    <input type="file" onChange={handleChange} />
                </View>
            </ScrollView>
            {/* Next Button */}
            <Pressable style= {styles.submitButton}>
                <Text>Next</Text>
            </Pressable>
        </SafeAreaView>
    );
}
const styles = StyleSheet.create({

submitButton: {
    backgroundColor: '#2b4ba2',
    padding: 10,
    borderRadius: 20,
    alignItems: 'center',
    margin: 10,
    color: 'white'
}
 
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