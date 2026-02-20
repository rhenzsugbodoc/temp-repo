// import { useSearchParams } from 'expo-router';
import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { Ionicons } from '@expo/vector-icons';
export default function RequestService() {
    // const params = useSearchParams();
    // const companyID = params.companyID;
    const router = useRouter();
    const serviceList = [
        { id: 1, service_name: 'Doctor\'s Home Visit', service_price: 100, date: new Date('2024-07-01'), image: require('../../../assets/images/docvisit.jpg')},
        { id: 2, service_name: 'Basic Chores', service_price: 100, date: new Date('2024-07-01'), image: require('../../../assets/images/basic.jpg')},
        { id: 3, service_name: 'Personal Hygiene Assistance', service_price: 100, date: new Date('2024-07-01'), image: require('../../../assets/images/hygiene.jpg')},
    ]

    const [paymentMethod, setPaymentMethod] = useState<'gcash' | 'credit/debit' | 'cod' >('gcash');

    const company = {
        name: 'Life Care Cebu',
    }
    let totalAmount = 1000;
    
    const userDetails = {
        name: 'Jamal Jones',
        address: '123 Main St, Cebu City',
        contact: '091-234-5678',
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

                    <View style={styles.infoRow}>
                        <Ionicons name="person-outline" size={18} color="#6b7280" />
                        <View style={styles.infoTextContainer}>
                        <Text style={styles.infoValue}>{userDetails.name}</Text>
                        </View>
                    </View>
                    <View style={styles.infoRow}>
                        <Ionicons name="location-outline" size={18} color="#6b7280" />
                        <View style={styles.infoTextContainer}>
                        <Text style={styles.infoValue}>{userDetails.address}</Text>
                        </View>
                    </View>
                    <View style={styles.infoRow}>
                        <Ionicons name="call-outline" size={18} color="#6b7280" />
                        <View style={styles.infoTextContainer}>
                        <Text style={styles.infoValue}>{userDetails.contact}</Text>
                        </View>
                    </View>
                    <View style={styles.infoRow}>
                        <Ionicons name="business-outline" size={18} color="#6b7280" />
                        <View style={styles.infoTextContainer}>
                        <Text style={styles.infoValue}>{userDetails.City}</Text>
                        </View>
                    </View>
                </View>

                <View style={styles.card}>
                    <Text style={styles.cardTitle}>{company.name}</Text>
                    {/* serviceItem should be Row, Image and service Details should be flex 3 and 4 */}
                    {serviceList.map( service=> (
                        <View key={service.id} style={styles.serviceItem}>
                            <Image source={service.image} resizeMode="cover" 
                            style={{ flex:2 , borderRadius: 10, width: '100%', height: 80 }} />
                            <View style={{flex: 3}}>
                                <Text style={styles.serviceName}>{service.service_name}</Text>
                                <Text style={styles.serviceDetails}>{service.date.toDateString()}</Text>
                                <Text style={styles.serviceDetails}>₱{service.service_price}</Text>
                            </View>
                        </View>
                    ) )}
                </View>
                <View style={styles.card}>
                    <Text style={styles.cardTitle}>Payment Method</Text>
                    <Pressable
                        style={[
                        styles.paymentOption,
                        paymentMethod === 'gcash' && styles.paymentSelected,
                        ]}
                        onPress={() => setPaymentMethod('gcash')}
                    >
                        <View style={styles.paymentLeft}>
                        <View style={[
                            styles.radio,
                            paymentMethod === 'gcash' && styles.radioSelected,
                        ]} />
                        <Text style={styles.paymentText}>GCash</Text>
                        </View>

                        <Image
                        source={require('../../../assets/images/gcash_logo.png')}
                        style={styles.paymentIconLarge}
                        resizeMode="contain"
                        />
                    </Pressable>

                    <Pressable
                        style={[
                        styles.paymentOption,
                        paymentMethod === 'credit/debit' && styles.paymentSelected,
                        ]}
                        onPress={() => setPaymentMethod('credit/debit')}
                    >
                        <View style={styles.paymentLeft}>
                        <View style={[
                            styles.radio,
                            paymentMethod === 'credit/debit' && styles.radioSelected,
                        ]} />
                        <Text style={styles.paymentText}>Credit/Debit</Text>
                        </View>
                        <Image
                        source={require('../../../assets/images/visa.png')}
                        style={styles.paymentIconLarge}
                        resizeMode="contain"
                        />
                    </Pressable>

                    <Pressable
                        style={[
                        styles.paymentOption,
                        paymentMethod === 'cod' && styles.paymentSelected,
                        ]}
                        onPress={() => setPaymentMethod('cod')}
                    >
                        <View style={styles.paymentLeft}>
                        <View style={[
                            styles.radio,
                            paymentMethod === 'cod' && styles.radioSelected,
                        ]} />
                        <Text style={styles.paymentText}>Cash on Delivery</Text>
                        </View>
                        <Image
                        source={require('../../../assets/images/cod.png')}
                        style={styles.paymentIconLarge}
                        resizeMode="contain"
                        />
                    </Pressable> 
                </View>


                <View style={styles.card}>
                    <Text style={styles.cardTitle}>Payment Details</Text>
                    {serviceList.map( service=> (
                        <View key={service.id} style={[styles.serviceItem, {justifyContent: 'space-between'}]}>
                            <Text style={styles.serviceDetails}>{service.service_name}</Text>
                            <Text style={styles.serviceDetails}>₱{service.service_price}</Text>
                        </View>
                    ) )}
                    
                    <View style={styles.divider} />

                    <View style={[styles.serviceItem, {justifyContent: 'space-between'}]}>
                        <Text style={[styles.totalDetails]}>Total Payment</Text>
                        <Text style={styles.totalDetails}> ₱{totalAmount}</Text>
                    </View>

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
  totalDetails: {
    color: '#969cb4',
    fontSize: 12,
    fontFamily: 'poppins',
    justifyContent: 'space-between',
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
  paymentOption: {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-between',
    padding: 14,
    borderRadius: 12,
    borderWidth: 1,
    borderColor: '#e0e4f1',
    marginBottom: 10,
    backgroundColor: '#fff',
  },
  paymentSelected: {
    backgroundColor: '#eaf3ff',
    borderColor: '#4c6ef5',
  },
  paymentLeft: {
    flexDirection: 'row',
    alignItems: 'center',
    gap: 10,
  },
  radio: {
    width: 18,
    height: 18,
    borderRadius: 9,
    borderWidth: 2,
    borderColor: '#c0c6dd',
  },
  radioSelected: {
    borderColor: '#4c6ef5',
    backgroundColor: '#22449e',
  },
  paymentText: {
    fontSize: 14,
    color: '#434e79',
    fontFamily: 'poppins',
  },
  paymentRight: {
    flexDirection: 'row',
    gap: 6,
  },
  paymentIcon: {
    width: 32,
    height: 20,
    resizeMode: 'contain',
  },
  paymentIconLarge: {
    width: 50,
    height: 24,
  },
  infoRow: {
    flexDirection: 'row',
    alignItems: 'flex-start',
    marginBottom: 5,
  },
  infoTextContainer: {
    marginLeft: 12,
    flex: 1,
  },
  infoValue: {
    fontSize: 14,
    fontWeight: '400',
    color: '#4e5981',
  },
  divider: {
    height: 1,
    backgroundColor: '#f1f5f9',
    marginVertical: 10,
  },
  
});
