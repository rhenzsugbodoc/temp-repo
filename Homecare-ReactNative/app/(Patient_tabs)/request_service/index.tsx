import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, RefreshControl, FlatList, useWindowDimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';
import {useFacility} from '@/src/context/FacilityContext';
import { companyListStyles } from '../../../assets/styles/patient/request/requestStyles';
import { useFacilityData } from '@/src/options/serviceRequestOptions';
export default function RequestList() {
  const router = useRouter();
  const { width, height } = useWindowDimensions();
  const isLandscape = width > height;
  const [searchValue, setSearchValue] = useState('');
  const { facilityID, setFacilityID } = useFacility();
  const [refreshing, setRefreshing] = useState(false);

    const { data: facilityData, isLoading: isFacilitiesLoading, error: facilitiesError, refetch: refreshFacilities } = useFacilityData();

    useEffect(() => {
        if (facilityData) {
            console.log('Facilities loaded:', facilityData);
        }
    }, [facilityData]);


  const [selectedValue, setSelectedValue] = useState('All');
  const [selectedSort, setSelectedSort] = useState('Sort By: Name');

  const onRefresh = async () => {
    setRefreshing(true);
    await refreshFacilities();
    setRefreshing(false);
  };

  const handleCompanyPress = (facility: any) => {
    setFacilityID(facility.facility_id);
    router.push(`/request_service/facilityDetails`);
  };

  const filteredFacilities = facilityData?.filter(facility => {        
    const typeMatch = facility.facility_type === selectedValue || selectedValue === 'All';
    
    const search = searchValue.trim().toLowerCase();
    const nameMatch = facility.facility_name?.toLowerCase().includes(search);
    const addressMatch = facility.facility_address?.toLowerCase().includes(search);
    const searchMatch = !search || nameMatch || addressMatch;
    return typeMatch && searchMatch;
  }) || [];

  const renderFacilityCard = ({ item: facility }: { item: any }) => {
    const cardWidth = isLandscape 
      ? Math.min((width - 60) / 4, 300)  // Landscape: 4 cards on tablet, 2 on phone
      : Math.min((width - 40) / 2, 400); // Portrait: 2 cards on tablet, 1 on phone
    
    return (
      <View 
        key={facility.facility_id} 
        // onPress={() => handleCompanyPress(facility)} 
        style={{
          // opacity: pressed ? 0.8 : 1,
          maxWidth: 600,
          minWidth: isLandscape ? 280 : 350,
          margin: 10
        }}
      >
        <View style={[companyListStyles.card, { padding: 0, overflow: 'hidden', height: 200 }]}>
          <View style={{ width: '100%', height: 100 }}>
            {facility?.facility_image_blob ? (
              <Image 
                source={{ uri: `data:image/jpeg;base64,${facility.facility_image_blob}` }} 
                style={{ width: '100%', height: '100%' }} 
                resizeMode="cover"
              />
            ) : (
              <View style={{ width: '100%', height: '100%', backgroundColor: '#ccc', justifyContent: 'center', alignItems: 'center' }}>
                <Text style={{ color: '#666' }}>No Image</Text>
              </View>
            )}
          </View>
          <View style={{ height: 100, padding: 15, justifyContent: 'center' }}>
            <Text style={companyListStyles.companyText1}>{facility.facility_name}</Text>
            <Text style={companyListStyles.companyText2}>{facility.facility_address}</Text>
            <Text style={companyListStyles.companyText3}>{facility.facility_type}</Text>
          </View>
        </View>
      </View>
    );
  };
  return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f4f7fa',
    
  }} edges={['top']}>



    <ScrollView 
      refreshControl={
        <RefreshControl
          refreshing={refreshing}
          onRefresh={onRefresh}
          colors={['#007AFF']}
          tintColor="#007AFF"
        />
      }
    >
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
              onChangeText={setSearchValue}
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
 
          
        </View>


      
      <FlatList
        data={filteredFacilities}
        renderItem={renderFacilityCard}
        keyExtractor={(item) => item.facility_id.toString()}
        contentContainerStyle={[
          companyListStyles.companyContainer, 
          { 
            flexDirection: 'row', 
            flexWrap: 'wrap',
            justifyContent: 'center',
            alignItems: 'flex-start',
            paddingHorizontal: 10
          }
        ]}
        scrollEnabled={false}
      />


    </ScrollView>
  </SafeAreaView>;
}