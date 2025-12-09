import React from 'react';
import { View, Text, StyleSheet, Pressable, ScrollView} from 'react-native';
import { useRouter, useLocalSearchParams  } from 'expo-router';
import { getCompanyOptions} from '../../../src/options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';
import { SafeAreaView } from 'react-native-safe-area-context';
import { companyDetailStyles } from '../../../assets/styles/patient/request/requestStyles';
const CompanyDetails = () => {
    
    const router = useRouter();

    const { id } = useLocalSearchParams();
    const {data, isLoading, isError} = useQuery(getCompanyOptions(Number(id)));

    const handlePress = () =>{
      router.push(`/request_service/requesting_service?companyID=${id}`);  
    }
    const company = {
        id: id,
        company_name: 'Life Care Cebu',
        address: 'B. Rodriguez St. Cebu City 6000 Cebu',
        phone_number: '123-456-7890',
        email: 'info@lifecarecebu.com',
        description: "Le Lorem Ipsum Est SImplement Du Faux Texte Employe Dans La Composition Et La Mise En Page Avant Impression. Le Lorem Ipsum Est Le Faux"
   
      };
    const servicesList = [
      { id: 1, service_name: 'Doctor\'s Home Visit' },
      { id: 2, service_name: 'Private Duty Nurse' },
      { id: 3, service_name: 'Private Caregiver' },
      { id: 4, service_name: 'Health Check' },
      { id: 5, service_name: 'Blood Works' },
      { id: 6, service_name: 'Vaccination' },
    ]
    return (
      <SafeAreaView style={{flex:1}}>
        <ScrollView contentContainerStyle={{ flexGrow: 1 }}>
          {/* header blue */}
          <View style={companyDetailStyles.headerContainer}> 
            <Text style= {companyDetailStyles.companyHeaderTitle}>{company.company_name}</Text>
            <Text style= {companyDetailStyles.companyHeaderText}>{company.address}</Text>
            <Text style= {companyDetailStyles.companyHeaderText}>{company.phone_number}</Text>
            <Text style= {companyDetailStyles.companyHeaderText}>{company.email}</Text>
          </View>

          <View style= {companyDetailStyles.aboutUsContainer}>
            <Text style={companyDetailStyles.categoryLabel}>ABOUT US</Text>
            <Text style= {companyDetailStyles.aboutUsText}>{company.description}</Text>
          </View>
          
          <View style={companyDetailStyles.servicesOfferedContainer}>
            <Text style={companyDetailStyles.categoryLabel}>SERVICES OFFERED</Text>
            <View style={companyDetailStyles.grid}>
              {servicesList.map(service => (
                  <View  key={service.id} style={companyDetailStyles.serviceTypeItem}>
                    <Text style={companyDetailStyles.serviceTypeText}>{service.service_name}</Text>
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