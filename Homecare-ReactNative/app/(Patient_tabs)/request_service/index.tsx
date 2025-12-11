import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';
import { companyListStyles } from '../../../assets/styles/patient/request/requestStyles';
import { useFacilityData } from '@/src/options/serviceRequestOptions';
export default function RequestList() {
  const router = useRouter();


    const { data: facilityData, isLoading: isFacilitiesLoading, error: facilitiesError } = useFacilityData();

    useEffect(() => {
        if (facilityData) {
            console.log('Facilities loaded:', facilityData);
        }
    }, [facilityData]);


  const [selectedValue, setSelectedValue] = useState('All');
  const [selectedSort, setSelectedSort] = useState('Sort By: Name');

  const handleCompanyPress = (facility: any) => {
    router.push(`/request_service/${facility.facility_id}`);
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
                <Picker.Item label="Hospital" value="Hospital" />
                <Picker.Item label="Clinic" value="Clinic" />
                <Picker.Item label="Nursing Home" value="Nursing Home" />
                <Picker.Item label="Rehabilitation Center" value="Rehabilitation Center" />
                <Picker.Item label="All" value="All" />
              </Picker>
            </View>

            {/* Second Picker */}
            {/* For the service Categories later */}
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
        {facilityData?.map(facility => (
          facility.facility_type === selectedValue || selectedValue === 'All' ? (
            <Pressable key={facility.facility_id} onPress={() => handleCompanyPress(facility)} style={({ pressed }) => [{ opacity: pressed ? 0.8 : 1 }]}>
              <View style={[companyListStyles.card, {gap: 10, flexDirection: 'row'}]}>
                <View style={{ flex: 1 }}>
                  <Image source={require('@/assets/images/MisterMatres.png')} resizeMode="cover" 
                    style={{ borderRadius: 10, width: '100%', height: 150 }} />
                </View>
                <View style={{ flex: 1 }}>
                  <Text style={companyListStyles.companyText1}>{facility.facility_name}</Text>
                  <Text style={companyListStyles.companyText2}>{facility.facility_address}</Text>
                  <Text style={companyListStyles.companyText3}>{facility.facility_type}</Text>
                </View>
              </View>
            </Pressable>
          ) : null
        ))}
      </View>


    </ScrollView>
  </SafeAreaView>;
}