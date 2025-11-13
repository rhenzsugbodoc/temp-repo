import { useSearchParams } from 'expo-router';
import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';
export default function RequestService() {
    const params = useSearchParams();
    const companyID = params.companyID;
    const router = useRouter();
    const serviceList = [
        { id: 1, service_name: 'Doctor\'s Home Visit', price: 100, date: new Date('2024-07-01') },
    ]
    const userDetails = {
        name: 'Jamal Jones',
        address: '123 Main St, Cebu City',
        contact: '123-456-7890',
        City: 'Cebu City',
    }

    return (
    <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#f5f7fa',
        padding: 10,
        }} edges={['top']}>
        
            <View style= {{flex:1}}>
                
            </View>
    </SafeAreaView>
    );
}
const styles = StyleSheet.create({


});
