import React, { useRef, useState } from 'react';
import { Animated, View, ScrollView, Image, TextInput, ImageBackground, Pressable, StyleSheet, Text, Dimensions,TouchableWithoutFeedback, ViewStyle  } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { LinearGradient } from 'expo-linear-gradient';
import { useRouter } from 'expo-router';
const { height, width } = Dimensions.get('window');

export default function PatientDashboard() {

    const router= useRouter();
      type Prescription = {
        id: number;
        name: string;
        price: number;
        dosage: string;
      };
  const prescriptionList: Prescription[] = [
    { id: 1, name: 'Paracetamol', price: 50, dosage: '500 mg' },
    { id: 2, name: 'Ibuprofen', price: 75, dosage: '200 mg' },
    { id: 3, name: 'Amoxicillin', price: 120, dosage: '500 mg' },
    { id: 4, name: 'Cetirizine', price: 60, dosage: '10 mg' },
    { id: 5, name: 'Aspirin', price: 40, dosage: '325 mg' },
    { id: 6, name: 'Metformin', price: 150, dosage: '500 mg' },
    { id: 7, name: 'Loratadine', price: 70, dosage: '10 mg' },
    { id: 8, name: 'Omeprazole', price: 130, dosage: '20 mg' },
    { id: 9, name: 'Azithromycin', price: 200, dosage: '250 mg' },
    { id: 10, name: 'Diclofenac', price: 90, dosage: '50 mg' },
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
    { id: 1, name: "CLARK'S PHARMACY - TALAMBAN", rating: 4.5, distance: 2.3 },
    { id: 2, name: 'MERCURY DRUGSTORE - MANDAUE', rating: 4.2, distance: 5.7 },
    { id: 3, name: 'ROSE PHARMACY - TALISAY', rating: 3.8, distance: 7.1 },
    { id: 4, name: 'ROSE PHARMACY - MANDAUE', rating: 4.0, distance: 1.5 },
  ];



  const [visible, setVisible] = useState(false);
  const [selectedPrescription, setSelectedPrescription] = useState<Prescription | null>();
  const slideAnim = useRef(new Animated.Value(height)).current;

  const openPopup = (pharmacy: any) => {
    setSelectedPrescription(pharmacy);
    setVisible(true);
    Animated.timing(slideAnim, {
      toValue: 0, // Changed from height / 2 to 0
      duration: 300,
      useNativeDriver: true,
    }).start();
  };

  const closePopup = () => {
    Animated.timing(slideAnim, {
      toValue: height,
      duration: 300,
      useNativeDriver: true,
    }).start(() => setVisible(false));
  };
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
            {prescriptionList.map(prescription => (
              <View key={prescription.id} style={{ flex: 1, marginHorizontal: 1 }}>
                <Pressable onPress={() => openPopup(prescription)} style={[styles.card, { height: 150, padding: 0, overflow: 'hidden' }]}>
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
                    <Text style={[styles.categoryText, {width: 300, textAlign: 'left'}]}>{prescription.name}</Text>
                  </ImageBackground>
                </Pressable>
              </View>
            ))}
          </ScrollView>
        </View>
    </ScrollView>
    {visible && (
      <TouchableWithoutFeedback onPress={closePopup}>
        <View style={styles.overlay}>
          <TouchableWithoutFeedback>
            <Animated.View style={[styles.popup, { transform: [{ translateY: slideAnim }] }]}>
              <View style={styles.popupContent}>

                <View style={{flexDirection: 'row', gap:10, margin: 10, paddingBottom: 15 }}>
                    <View style={{ flex: 3 }}>
                      <Image source={require('../../../assets/images/MisterMatres.png')} resizeMode="cover" 
                        style={{ borderRadius: 10, width: '100%', height: 110 }} />
                    </View>
                    <View style={{ flex: 4, gap: 2, justifyContent: 'center', paddingLeft: 10 }}>
                      <Text style={{color: '#424e78', fontSize: 16, fontWeight: 'bold'}}>{selectedPrescription?.name}</Text>
                      <Text style={{color: '#424e78', fontSize: 16, fontWeight: 'bold'}}>{selectedPrescription?.dosage}</Text>
                      <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                        <Text style={{ color: '#424e78', fontSize: 16, fontWeight: 'bold' }}>
                          ₱{selectedPrescription?.price}
                        </Text>
                        <Text style={{ color: '#424e78', fontSize: 12, marginLeft: 6 }}>
                          (base price)
                        </Text>
                      </View>
                    </View>
                </View>

                <ScrollView style={{width: '95%'}}>
                  {pharmacyList.map(pharmacy => (
                    <View key={pharmacy.id} style={{ padding: 15,  borderTopColor: '#d9d9d9', borderTopWidth: 0.5, width: '100%', justifyContent: 'center' }}>
                      <Text style={{ fontSize: 14, fontWeight: 'bold', color: '#424e78' }}>{pharmacy.name}</Text>
                      <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                        <Ionicons name="star" size={16} color="gold" style={{ marginRight: 4 }} />
                        <Text style={{ color: '#727a9a' }}>
                          {pharmacy.rating} stars - {pharmacy.distance} km away
                        </Text>
                      </View>
                      <Text style={{color: '#68d585'}}>Open 24 hours</Text>
                    </View>
                  ))}
                </ScrollView> 
                <Pressable onPress={closePopup} style={{ padding: 10, backgroundColor: '#4F46E5', borderRadius: 10 }}>
                  <Text style={{ color: 'white' }}>Close</Text>
                </Pressable>
              </View>
            </Animated.View>
          </TouchableWithoutFeedback>
        </View>
      </TouchableWithoutFeedback>
    )}


    {visible===false && 
    (<Pressable onPress={()=> router.push(`/(Patient_tabs)/prescription/cart`)} style={styles.cartButton}>
      <Ionicons name="cart" size={30} color="#53346a" />
    </Pressable>)}
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
   
  },
  overlay: {
    position: 'absolute',
    top: 0,
    left: 0,
    width,
    height,
    backgroundColor: 'rgba(0,0,0,0.5)',
    justifyContent: 'flex-end',
  },
  popup: {
    width: '100%',
    height: height / 2,
    backgroundColor: 'white',
    borderTopLeftRadius: 20,
    borderTopRightRadius: 20,
    position: 'absolute', // Added
    bottom: 0, // Added,
   
  },
  popupContent: {
    flex: 1,
    justifyContent: 'flex-start',
    alignItems: 'center',
    padding: 20,
  },

});