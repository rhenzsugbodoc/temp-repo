import React, { useState } from 'react';
import { View, ScrollView, Image, TextInput, ImageBackground, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { LinearGradient } from 'expo-linear-gradient';
import { useRouter } from 'expo-router';

export default function PatientDashboard() {

    const router= useRouter();

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

  const categoryList = [
    { id: 1, name: 'PRESCRIPTION' },
    { id: 2, name: 'VITAMINS AND SUPPLEMENTS' },
    { id: 3, name: 'GERIATRIC CARE' },
    { id: 4, name: 'FIRST AID' },
  ];

  const pharmacyList = [
    { id: 1, name: "CLARK'S PHARMACY - TALAMBAN" },
    { id: 2, name: 'MERCURY DRUGSTORE - MANDAUE' },
    { id: 3, name: 'ROSE PHARMACY - TALISAY' },
    { id: 4, name: 'ROSE PHARMACY - MANDAUE' },
  ];

  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa'
  }} edges={['top']}>




    <ScrollView >


        <View style={styles.headerContainer}>
          <Text style={styles.headerTitle}>Pharmaceutical Services</Text>
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


        <View style={{flexDirection: 'row', gap: 10, marginTop: 15, paddingHorizontal: 35}}>
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

        <View style={{paddingHorizontal: 15}}>
          <Text style={styles.categoryLabel}>
            PHARMACIES</Text>
          <View style={{paddingHorizontal: 1 }}>
                <ScrollView horizontal showsHorizontalScrollIndicator={false} 
                contentContainerStyle={{flexDirection: 'row' }}>
                  {pharmacyList.map(pharmacy => (
                    <View key={pharmacy.id} style={{ alignItems: 'center', marginHorizontal: 1 }}>
                      <Pressable style={[styles.card, { width: 287, height: 176, padding: 0, overflow: 'hidden' }]}>
                        <ImageBackground 
                          source={require('../../../assets/images/MisterMatres.png')} 
                          style={{ flex: 1, justifyContent: 'flex-end', padding: 20, opacity: 0.9 }} 
                          imageStyle={{ borderRadius: 10 }}
                        >
                          <LinearGradient
                            colors={['transparent', 'rgba(0,0,0,0.6)']}
                            start={{ x: 0, y: 0 }}
                            end={{ x: 0, y: 1 }}
                            style={styles.gradientStyle}
                          />
                          <Text style={[styles.categoryText, {width: 250, textAlign: 'left'}]}>{pharmacy.name}</Text>
                        </ImageBackground>
                      </Pressable>
                    </View>
                  ))}
                </ScrollView>
            </View>
          <Text style={styles.categoryLabel}>
            TOP PRODUCTS</Text>

          <ScrollView>
            {pharmacyList.map(pharmacy => (
              <View key={pharmacy.id} style={{ flex: 1, marginHorizontal: 1 }}>
                <Pressable style={[styles.card, { height: 150, padding: 0, overflow: 'hidden' }]}>
                  <ImageBackground 
                    source={require('../../../assets/images/MisterMatres.png')} 
                    style={{ flex: 1, justifyContent: 'flex-end', padding: 20, opacity: 0.9 }} 
                    imageStyle={{ borderRadius: 10 }}
                  >
                    <LinearGradient
                      colors={['transparent', 'rgba(0,0,0,0.6)']}
                      start={{ x: 0, y: 0 }}
                      end={{ x: 0, y: 1 }}
                      style={styles.gradientStyle}
                    />
                    <Text style={[styles.categoryText, {width: 300, textAlign: 'left'}]}>{pharmacy.name}</Text>
                  </ImageBackground>
                </Pressable>
              </View>
            ))}
          </ScrollView>
        </View>
    </ScrollView>
    <Pressable onPress={()=> router.push(`prescription/cart`)} style={styles.cartButton}>
      <Ionicons name="cart" size={30} color="#53346a" />
    </Pressable>
  </SafeAreaView>;
}


const styles = StyleSheet.create({
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
      fontSize: 20,
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
      marginTop: -25,
      
    },

    searchContainer: {
      width: '85%',
      backgroundColor: 'white',
      borderRadius: 20,
      height: 40,
      
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
  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    padding: 20,
    marginHorizontal:15,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },

  categoryLabel:{
    color: '#434e79', 
    fontSize: 20, 
    
    margin:10,
    fontWeight: 'bold'
  },
  grid: {
    flexDirection: 'row',
    flexWrap: 'wrap',
    justifyContent: 'space-between',
  },
  item: {
    width: '22%', 
    alignItems: 'center',
    marginVertical: 10,
  },
  iconCircle: {
    borderRadius: 25,
    padding: 10,
    backgroundColor: '#eef2ff',
  },
  categoryText: {
    fontSize: 13,
    color: 'white',
    textAlign: 'center',
    marginTop: 6,
    width: 100
  },
  gradientStyle: {
    position: 'absolute',
    left: 0,
    right: 0,
    bottom: 0,
    height: '40%',
    borderBottomLeftRadius: 10,
    borderBottomRightRadius: 10
  },
  cartButton: {
    position: 'absolute',
    bottom: 20,
    right: 20,
    backgroundColor: '#8e98db',
    padding: 15,
    borderRadius: 30,
    elevation: 5,
    zIndex: 100,
  },

});