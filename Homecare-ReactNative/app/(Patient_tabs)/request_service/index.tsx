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
  const [selectedSort, setSelectedSort] = useState('Sort By: Name');

  const handleCompanyPress = (company: any) => {
    router.push(`/request_service/${company.id}`);
  };
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView >
        <View style={styles.headerContainer}>
          <Text style={styles.headerTitle}>Request</Text>
          <View style={styles.headerIcons}>
            <Ionicons name="time-outline" size={22} color="white" />
            <Ionicons name="location-outline" size={22} color="white" />
          </View>
        </View>

        <View style={styles.searchWrapper}>
          <View style={styles.searchContainer}>
            <TextInput
              placeholder="Search"
              style={styles.searchInput}
            />
            <Ionicons name="search" size={20} color="#999" />
          </View>
        </View>

      {/* pickerContainer  && pickerBox*/}
        <View style={{flexDirection: 'row', gap: 10, marginVertical: 12, paddingHorizontal: 40}}>
            <View style={styles.pickerContainer}>
              <Picker
                selectedValue={selectedValue}
                onValueChange={(itemValue) => setSelectedValue(itemValue)}
                style={{ flex: 1, color: '#b7aac0' }}
                
              >
                <Picker.Item label="Assisted Living" value="assisted_living" />
                <Picker.Item label="Nursing Care" value="nursing_care" />
                <Picker.Item label="Companionship" value="companionship" />
                <Picker.Item label="Therapy" value="nursing_care" />
              </Picker>
            </View>

            {/* Second Picker */}
            <View style={styles.pickerContainer}>
              <Picker
                selectedValue={selectedSort}
                onValueChange={(itemValue) => setSelectedSort(itemValue)}
                style={{ flex: 1, color: '#b7aac0' }}
              >
                <Picker.Item label="Sort By: Name" value="name" />
                <Picker.Item label="Sort By: Popularity" value="popularity" />
              </Picker>
            </View>
          
        </View>


      {/* companyList */}
      <View style={{gap: 5, marginHorizontal: 20}}>
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

    headerContainer: {
    backgroundColor: '#4F46E5',
    flexDirection: 'row',
    justifyContent: 'space-between',
    padding: 25,
    paddingVertical: 30,
    borderBottomLeftRadius: 25,
    borderBottomRightRadius: 25,
  },

  headerTitle: {
    color: 'white',
    fontSize: 30,
    fontWeight: 'bold',
    fontFamily: 'poppins'
  },

  headerIcons: {
    // position: 'absolute',
    // right: 20,
    // top: 20,
    flexDirection: 'row',
    gap: 15,
  },

  searchWrapper: {
    width: '100%',
    alignItems: 'center',
    marginTop: -20,
  },

  searchContainer: {
    width: '85%',
    backgroundColor: 'white',
    height: 40,
    borderRadius: 20,
    paddingHorizontal: 15,
    paddingVertical: 10,
    flexDirection: 'row',
    alignItems: 'center',
    elevation: 4,

  },

  searchInput: {
    flex: 1,
    fontSize: 16,
    height: 45,
  },
  pickerContainer: {
    backgroundColor: '#ffffff',
    flex: 1,
    height: 35,
    justifyContent: 'center',
    borderWidth: 0.1,
    borderRadius: 25,
    borderColor: '#ccc',
    overflow: 'hidden',
  },
});