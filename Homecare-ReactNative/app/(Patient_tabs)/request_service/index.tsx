import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getCompanyListOptions} from '../../../options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';

export default function RequestList() {
  const router = useRouter();
  const {data, isLoading, isError} = useQuery(getCompanyListOptions());

  // useEffect(() => {
  //   // Fetch company list or any other data if needed
  // }, []);
   const companyList = [
      { id: 1, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 2, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 3, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 4, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 5, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 6, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 7, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 8, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
      { id: 9, company_name: 'Life Care Cebu', address: 'B. Rodriguez St. Cebu City 6000 Cebu', description:"Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"},
    ];

  const [selectedValue, setSelectedValue] = useState('Assisted Living');

  const handleCompanyPress = (company: any) => {
    router.push(`/request_service/${company.id}`);
  };
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>

    {/* categoryLabel */}
    <View style={{ height: 90, backgroundColor: '#4454c3', justifyContent:'center', paddingHorizontal:30}}>
      <Text style={{color: 'white' , fontFamily: 'poppins', fontSize: 25}}>Requests</Text>
    </View>

    <ScrollView style={{paddingHorizontal: 20}}>
      {/* searchInput */}
      <View style={{borderWidth: 1, borderColor: '#ccc', marginVertical: 10, borderRadius: 25, padding: 10}}>
        <TextInput placeholder="Search Facility" />
      </View>
      {/* pickerContainer  && pickerBox*/}
      <View style={{flexDirection: 'row', gap: 10}}>
          <View style={{ flex: 3, borderWidth: 1, borderRadius: 25, borderColor: '#ccc', overflow: 'hidden' }}>
            <Picker
              selectedValue={selectedValue}
              onValueChange={(itemValue) => setSelectedValue(itemValue)}
              style={{ flex: 1, color: '#b6b6b6'}}
            >
              <Picker.Item label="Assisted Living" value="assisted_living" />
              <Picker.Item label="Nursing Care" value="nursing_care" />
              <Picker.Item label="Companionship" value="companionship" />
              <Picker.Item label="Therapy" value="nursing_care" />
            </Picker>
          </View>

          {/* Second Picker */}
          <View style={{ flex: 2, borderWidth: 1, borderRadius: 25, borderColor: '#ccc', overflow: 'hidden' }}>
            <Picker
              selectedValue={selectedValue}
              onValueChange={(itemValue) => setSelectedValue(itemValue)}
              style={{ flex: 1, color: '#b6b6b6' }}
            >
              <Picker.Item label="Sort By: Name" value="name" />
              <Picker.Item label="Sort By: Popularity" value="popularity" />
            </Picker>
          </View>
        
      </View>


      {/* companyList */}
      <View style={{gap: 5}}>
        {companyList.map(company => (
          <Pressable key={company.id} onPress={() => handleCompanyPress(company)} style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}>
            <View style={[styles.card, {gap: 10, flexDirection: 'row'}]}>
              <View style={{ flex: 1 }}>
                <Image source={require('../../../assets/images/MisterMatres.png')} resizeMode="cover" 
                  style={{ borderRadius: 10, width: '100%', height: 150 }} />
              </View>
              <View style={{ flex: 1 }}>
                <Text style={{ fontWeight: 'bold', fontSize: 16, marginBottom: 2, color: '#434e79', fontFamily: 'poppins' }}>{company.company_name}</Text>
                <Text style={{ color: '#cacaca', fontSize: 12, marginBottom: 5, fontFamily: 'poppins' }}>{company.address}</Text>
                <Text style={{ color: '#cbcbcb', fontSize: 13, fontFamily: 'poppins' }}>{company.description}</Text>
              </View>
            </View>
          </Pressable>
        ))}
      </View>


    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    flexDirection: 'row',
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

});