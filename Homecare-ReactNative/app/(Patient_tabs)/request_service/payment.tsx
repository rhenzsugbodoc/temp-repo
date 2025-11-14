// import { useSearchParams } from 'expo-router';
import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';
export default function RequestService() {
    // const params = useSearchParams();
    // const companyID = params.companyID;
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

            <View style={{ height: 60}}>
                <Text style={{color: '#8c82c6' , fontSize: 20}}>Payment</Text>
            </View>

            <ScrollView>
                <View>
                    <Text>Patient Information</Text>
                    <Text>{userDetails.name}</Text>
                    <Text>{userDetails.address}</Text>
                    <Text>{userDetails.contact}</Text>
                    <Text>{userDetails.City}</Text>
                </View>
                <View style={styles.card}>
                    <Text>{company.name}</Text>
                    {serviceList.map( service=> {
                        <View key={service.id} styles={styles.serviceItem}>
                            <img source={{uri: service.image_url}} style={styles.serviceImage} />
                            <View style={styles.serviceDetails}>
                                <Text style={styles.serviceName}>{service.service_name}</Text>
                                <Text style={styles.serviceDate}>{service.date.toDateString()}</Text>
                                <Text style={styles.servicePrice}>${service.price}</Text>
                            </View>
                        </View>
                    } )}
                </View>
                <View style={styles.Card}>
                    <Text>Payment Method</Text>
                    <Text>RAAAH</Text>
                </View>
                <View style={styles.card}>
                    <Text>Payment Details</Text>
                    {serviceList.map( service=> {
                        <View key={service.id} styles={styles.serviceItem}>
                            <View style={styles.serviceDetails}>
                                <Text style={styles.serviceName}>{service.service_name}</Text>
                                <Text style={styles.servicePrice}>{service.servicePrice}</Text>
                            </View>
                        </View>
                    } )}
                    <Text>Total Payment {totalammount}</Text>

                </View>

                <View style= {styles.card}>
                    <Text>Total</Text>
                    <Text>${totalAmount}</Text>
                    <Pressable>Book Service</Pressable>
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


});
