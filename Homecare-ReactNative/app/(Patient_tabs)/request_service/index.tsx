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
    router.push(`/request/${company.id}`);  
  }
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa',
    padding: 10,
  }} edges={['top']}>

    <View style={{ height: 60}}>
      <Text style={{color: '#8c82c6' , fontSize: 20}}>Requests</Text>
    </View>

    <ScrollView>

      <View>
        <TextInput placeholder="Search Requests" style={{borderWidth: 1, borderColor: '#ccc', borderRadius: 10, padding: 10, width: '100%'}} />
      </View>

      <View style={{flexDirection: 'row', width: '100%'}}>
        <Picker style={{flex: 1,}} selectedValue={selectedValue} onValueChange={(itemValue) => setSelectedValue(itemValue)}>
          <Picker.Item label="Assisted Living" value="assisted_living" />
          <Picker.Item label="Nursing Care" value="nursing_care" />
          <Picker.Item label="Companionship" value="companionship" />
          <Picker.Item label="Therapy" value="nursing_care" />
        </Picker>

        <Picker style={{flex: 1,}} selectedValue={selectedValue} onValueChange={(itemValue) => setSelectedValue(itemValue)}>
          <Picker.Item label="Sort By: Name" value="name" />
          <Picker.Item label="Sort By: Popularity" value="popularity" />
        </Picker>
      </View>



      <View style={{gap: 10}}>
        {companyList.map(company => (
          <Pressable  key={company.id} onPress={() => handleCompanyPress(company)}
            style={({ pressed }) => [styles.card,{ flexDirection: 'row', opacity: pressed ? 0.8 : 1 }]}>
            <Image source={require('../../../assets/images/MisterMatres.png')} style={{ borderRadius: 20, flex: 1}} />
            <View style={{flex: 1}}>
              <Text style={{fontWeight: 'bold'}}>{company.company_name}</Text>
              <Text>{company.address}</Text>
              <Text>{company.description}</Text>
            </View>
          </Pressable>
        ))}
      </View>
    </ScrollView>
  </SafeAreaView>;
}


const styles = StyleSheet.create({

  card: {
    backgroundColor: 'white',
    borderRadius: 15,
    padding: 15,
    marginHorizontal:10,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },

});