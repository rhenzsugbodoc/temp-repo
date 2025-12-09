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
        { id: 2, service_name: 'Basic Chores', service_price: 100, date: new Date('2024-07-01') },
        { id: 3, service_name: 'Personal Hygiene Assistance', service_price: 100, date: new Date('2024-07-01') },
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
    const handleBookService = () => {
        router.push('/prescription/tracking');
    }
    return (
    <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#f4f7fa',
        
        }} edges={['top']}>

            <View style={{padding: 20, backgroundColor: '#4454c3' , height: 70, justifyContent: 'center'}}>
                <Text style={{color: '#ffffff' , fontSize: 20, marginLeft: 10}}>Payment</Text>
            </View>

            <ScrollView contentContainerStyle={{flexGrow:1}}>
                <View style={styles.card}>
                    <Text style={styles.cardTitle}>Patient Information</Text>
                    <Text style={styles.userInfo}>{userDetails.name}</Text>
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
                            style={{ flex:2 , borderRadius: 10, width: '100%', height: 80 }} />
                            <View style={{flex: 3}}>
                                <Text style={styles.serviceName}>{service.service_name}</Text>
                                <Text style={styles.serviceDetails}>{service.date.toDateString()}</Text>
                                <Text style={styles.serviceDetails}>${service.service_price}</Text>
                            </View>
                        </View>
                    ) )}
                </View>
                <View style={[styles.card, {alignItems: 'flex-start'}]}>
                    <Text style={styles.cardTitle}>Payment Method</Text>
                    <View style={{flexDirection: 'row', alignItems: 'center', gap: 10}}>
                        <Image source={require('../../../assets/images/gcash_logo.png')} resizeMode="contain" 
                        style={{ width: 50, height: 50 }} />
                        <Text style={[styles.serviceDetails, {fontSize: 14}]}> ****1234</Text>
                    </View>
                </View>
                <View style={styles.card}>
                    <Text style={styles.cardTitle}>Payment Details</Text>
                    {serviceList.map( service=> (
                        <View key={service.id} style={[styles.serviceItem, {justifyContent: 'space-between'}]}>
                            <Text style={styles.serviceDetails}>{service.service_name}</Text>
                            <Text style={styles.serviceDetails}>₱{service.service_price}</Text>
                        </View>
                    ) )}
                    <Text style={[styles.serviceDetails, {borderTopWidth: 1, borderTopColor: '#ccc', paddingTop: 5}]}>Total Payment {totalAmount}</Text>

                </View>

 
            </ScrollView>
            {/* Next Button */}
            <View style={[styles.card, {marginBottom: 0}]}>
                <View style={{flexDirection: 'row', justifyContent: 'space-between', marginBottom: 10}}>
                    <Text style={styles.amountText}>Total Amount</Text>
                    <Text style={styles.amountText}>₱{totalAmount}</Text>
                </View>
                <Pressable style= {styles.submitButton} onPress={()=> (handleBookService())}>
                    <Text style={styles.submitButtonText}>Book Service</Text>
                </Pressable>
            </View>
        </SafeAreaView>
    );
}
const styles = StyleSheet.create({

card: {
    backgroundColor: '#ffffff',
    marginBottom: 10,
    padding: 20,
    paddingHorizontal: 25,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    
  },

  userInfo:{
    color: '#969cb4',
    fontSize: 12
  },
  serviceItem: {
    flexDirection: 'row',
    flex: 1,
    gap: 20,
    paddingBottom: 10
  },
  serviceDetails: {
    color: '#969cb4',
    fontSize: 12,
    fontFamily: 'poppins'
  },
  serviceName: {
    color: '#434e79',
    fontSize: 14,
    fontFamily: 'poppins',
    fontWeight: 'bold'
  },
  cardTitle: {
    color: '#4e5981',
    fontSize: 18,
    fontFamily: 'poppins',
    fontWeight: 'bold',
    paddingBottom: 10
  },
  submitButton: {
    backgroundColor: '#22449e',
    padding: 10,
    marginTop: 'auto',
    borderRadius: 25,
  },
  submitButtonText: {
    color: 'white',
    fontSize: 20,
    textAlign: 'center',
    fontFamily: 'poppins',

  },
  amountText: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#4454c3',
    fontFamily: 'inter'
  },

});
