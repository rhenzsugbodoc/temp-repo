import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { getCompanyListOptions} from '../../../options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';
import { companyListStyles } from '../../../assets/styles/patient/request/requestStyles';
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
  const [selectedSort, setSelectedSort] = useState('Sort By: Name');

  const handleCompanyPress = (company: any) => {
    router.push(`/request_service/${company.id}`);
  };
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView >
        <View style={companyListStyles.headerContainer}>
          <Text style={companyListStyles.headerTitle}>Request</Text>
          <View style={companyListStyles.headerIcons}>
            <Ionicons name="time-outline" size={22} color="white" />
            <Ionicons name="location-outline" size={22} color="white" />
          </View>
        </View>

        <View style={companyListStyles.searchWrapper}>
          <View style={companyListStyles.searchContainer}>
            <TextInput
              placeholder="Search"
              style={companyListStyles.searchInput}
            />
            <Ionicons name="search" size={20} color="#999" />
          </View>
        </View>

      {/* pickerContainer  && pickerBox*/}
        <View style={companyListStyles.pickerWrapper}>
            <View style={companyListStyles.pickerContainer}>
              <Picker
                selectedValue={selectedValue}
                onValueChange={(itemValue) => setSelectedValue(itemValue)}
                style={companyListStyles.pickerItem}
                
              >
                <Picker.Item label="Assisted Living" value="assisted_living" />
                <Picker.Item label="Nursing Care" value="nursing_care" />
                <Picker.Item label="Companionship" value="companionship" />
                <Picker.Item label="Therapy" value="nursing_care" />
              </Picker>
            </View>

            {/* Second Picker */}
            <View style={companyListStyles.pickerContainer}>
              <Picker
                selectedValue={selectedSort}
                onValueChange={(itemValue) => setSelectedSort(itemValue)}
                style={companyListStyles.pickerItem}
              >
                <Picker.Item label="Sort By: Name" value="name" />
                <Picker.Item label="Sort By: Popularity" value="popularity" />
              </Picker>
            </View>
          
        </View>


      {/* companyList */}
      <View style={companyListStyles.companyContainer}>
        {companyList.map(company => (
          <Pressable key={company.id} onPress={() => handleCompanyPress(company)} style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}>
            <View style={[companyListStyles.card, {gap: 10, flexDirection: 'row'}]}>
              <View style={{ flex: 1 }}>
                <Image source={require('../../../assets/images/MisterMatres.png')} resizeMode="cover" 
                  style={{ borderRadius: 10, width: '100%', height: 150 }} />
              </View>
              <View style={{ flex: 1 }}>
                <Text style={companyListStyles.companyText1}>{company.company_name}</Text>
                <Text style={companyListStyles.companyText2}>{company.address}</Text>
                <Text style={companyListStyles.companyText3}>{company.description}</Text>
              </View>
            </View>
          </Pressable>
        ))}
      </View>


    </ScrollView>
  </SafeAreaView>;
}