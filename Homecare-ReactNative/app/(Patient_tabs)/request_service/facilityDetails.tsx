import React from 'react';
import { useState, useEffect } from 'react';
import { View, Text, StyleSheet, Pressable, ScrollView} from 'react-native';
import { useRouter, useLocalSearchParams  } from 'expo-router';
import { SafeAreaView } from 'react-native-safe-area-context';
import {useFacility} from '@/src/context/FacilityContext';
import { companyDetailStyles } from '../../../assets/styles/patient/request/requestStyles';
import { useFacilityById, useFacilityServices } from '@/src/options/serviceRequestOptions';
const CompanyDetails = () => {
    
    const router = useRouter();
    const {facilityID, setFacilityID, facilityServices, setFacilityServices} = useFacility();
    const { data: facility, isLoading: isFacilitiesLoading, error: facilitiesError } = useFacilityById(facilityID ?? 0, !!facilityID);
    const { data: services, error: servicesError} = useFacilityServices(facilityID  ?? 0, !!facilityID);

    useEffect(() => {
      if (facility?.facility_id) {
        setFacilityID(facility.facility_id);
      }
    }, [facility?.facility_id, setFacilityID]);

    useEffect(() => {
      setFacilityServices(services ?? []);
    }, [services, setFacilityServices]);


    const handlePress = () =>{
      router.push(`/request_service/requesting_service`);  
    }

    return (
      <SafeAreaView style={{flex:1}}>
        <ScrollView contentContainerStyle={{ flexGrow: 1 }}>
          {/* header blue */}
          <View style={companyDetailStyles.headerContainer}> 
            <Text style= {companyDetailStyles.companyHeaderTitle}>{facility?.facility_name}</Text>
            <Text style= {companyDetailStyles.companyHeaderText}>{facility?.facility_address}</Text>
            <Text style= {companyDetailStyles.companyHeaderText}>{facility?.facility_phone}</Text>
            <Text style= {companyDetailStyles.companyHeaderText}>{facility?.facility_type}</Text>
          </View>

          <View style= {companyDetailStyles.aboutUsContainer}>
            <Text style={companyDetailStyles.categoryLabel}>ABOUT US</Text>
            <Text style= {companyDetailStyles.aboutUsText}>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper, dolor eget tincidunt consequat, augue risus pulvinar eros, ut egestas metus leo dignissim magna. Sed id accumsan ipsum, eleifend finibus erat. Sed tristique molestie mi. Integer hendrerit nulla sed mauris lacinia consectetur a vitae sem. Vivamus aliquet eros fermentum nunc hendrerit, </Text>
            {/* <Text style= {companyDetailStyles.aboutUsText}>{company.description}</Text> */}
          </View>
          
          <View style={companyDetailStyles.servicesOfferedContainer}>
            <Text style={companyDetailStyles.categoryLabel}>SERVICES OFFERED</Text>
            <View style={companyDetailStyles.grid}>
              {facilityServices?.map(service => (
                  <View  key={service.service_id} style={companyDetailStyles.serviceTypeItem}>
                    <Text style={companyDetailStyles.serviceTypeText}>{service.name}</Text>
                  </View>
                ))}
            </View>
          </View>
          <View style= {companyDetailStyles.requestButtonContainer}>
            <Pressable onPress={handlePress} style={companyDetailStyles.requestButton}>
              <Text style={companyDetailStyles.requestButtonText}>Request a Service</Text></Pressable>
          </View>
        </ScrollView>
      </SafeAreaView>
    );
    };

export default CompanyDetails;