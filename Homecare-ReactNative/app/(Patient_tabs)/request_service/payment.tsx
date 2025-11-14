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
        { id: 1, service_name: 'Doctor\'s Home Visit', service_price: 100, date: new Date('2024-07-01') },
    ]
    const company = {
        name: 'Life Care Cebu',
    }
    let totalAmount = 1000;
    
    const userDetails = {
        name: 'Jamal Jones',
        address: '123 Main St, Cebu City',
        contact: '123-456-7890',
        City: 'Cebu City',
    }

    return (
    <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#f4f7fa',
        padding: 10,
        }} edges={['top']}>

            <View style={{ height: 60}}>
                <Text style={{color: '#8c82c6' , fontSize: 20}}>Payment</Text>
            </View>

            <ScrollView contentContainerStyle={{flexGrow:1}}>
                <View style={[styles.card, {marginBottom: 10}]}>
                    <Text>Patient Information</Text>
                    <Text style={[styles.userInfo, {fontSize: 20, fontWeight: 'bold' }]}>{userDetails.name}</Text>
                    <Text style={styles.userInfo}>{userDetails.address}</Text>
                    <Text style={styles.userInfo}>{userDetails.contact}</Text>
                    <Text style={styles.userInfo}>{userDetails.City}</Text>
                </View>
                <View style={styles.card}>
                    <Text style={styles.cardTitle}>{company.name}</Text>
                    {/* serviceItem should be Row, Image and service Details should be flex 3 and 4 */}
                    {serviceList.map( service=> (
                        <View key={service.id} style={styles.serviceItem}>
                            <Image source={require('../../../assets/images/MisterMatres.png')} resizeMode="cover" 
                            style={{ flex:3 , borderRadius: 10, width: '100%', height: 150 }} />
                            <View style={{flex: 4}}>
                                <Text style={styles.serviceName}>{service.service_name}</Text>
                                <Text style={styles.serviceDetails}>{service.date.toDateString()}</Text>
                                <Text style={styles.serviceDetails}>${service.service_price}</Text>
                            </View>
                        </View>
                    ) )}
                </View>
                <View style={styles.card}>
                    <Text style={styles.cardTitle}>Payment Method</Text>
                    <Image source={require('../../../assets/images/gcash_logo.png')} resizeMode="contain" 
                    style={{ height: 150 }} />
                </View>
                <View style={styles.card}>
                    <Text style={styles.cardTitle}>Payment Details</Text>
                    {serviceList.map( service=> (
                        <View key={service.id} style={[styles.serviceItem, {justifyContent: 'space-between'}]}>
                            <Text style={styles.serviceDetails}>{service.service_name}</Text>
                            <Text style={styles.serviceDetails}>{service.service_price}</Text>
                        </View>
                    ) )}
                    <Text style={styles.serviceDetails}>Total Payment {totalAmount}</Text>

                </View>

                <View style= {styles.card}>
                    <Text>Total</Text>
                    <Text>₱{totalAmount}</Text>
                    <Pressable>Book Service</Pressable>
                </View>
            </ScrollView>
            {/* Next Button */}
            <View style={styles.card}>
                <View style={{flexDirection: 'row', justifyContent: 'space-between', marginBottom: 10}}>
                    <Text style={styles.cardTitle}>Total Amount</Text>
                    <Text style={styles.cardTitle}>₱{totalAmount}</Text>
                </View>
                <Pressable style= {styles.submitButton}>
                    <Text style={styles.submitButtonText}>Book Service</Text>
                </Pressable>
            </View>
        </SafeAreaView>
    );
}
const styles = StyleSheet.create({

card: {
    backgroundColor: '#ffffff',
    borderRadius: 15,
    padding: 15,
    marginHorizontal: 5,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'center',
  },

  userInfo:{
    color: '#969cb4',
    fontSize: 12
  },
  serviceItem: {
    flexDirection: 'row',
  },
  serviceDetails: {
    color: '#969cb4',
    fontSize: 12,
    fontFamily: 'poppins'
  },
  serviceName: {
    color: '#7c84a2',
    fontSize: 14,
    fontFamily: 'poppins',
    fontWeight: 'bold'
  },
  cardTitle: {
    color: '#7c84a2',
    fontSize: 18,
    fontFamily: 'poppins',
    fontWeight: 'bold'
  },
  submitButton: {
    backgroundColor: '#22449e',
    padding: 20,
    marginTop: 'auto'
  },
  submitButtonText: {
    color: 'white',
    fontSize: 20,
    textAlign: 'center',
    fontFamily: 'poppins'
  }
});
