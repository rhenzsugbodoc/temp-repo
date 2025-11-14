import React from 'react';
import { View, Text, StyleSheet, Pressable, ScrollView} from 'react-native';
import { useRouter, useLocalSearchParams  } from 'expo-router';
import { getCompanyOptions} from '../../../options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';
import { SafeAreaView } from 'react-native-safe-area-context';
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
          <View style={{ backgroundColor: '#4454c3' , justifyContent: 'center', alignItems: 'center', height: 150}}> 
            <Text style= {[styles.companyHeaderText, { fontWeight: 'bold', fontSize: 20 }]}>{company.company_name}</Text>
            <Text style= {styles.companyHeaderText}>{company.address}</Text>
            <Text style= {styles.companyHeaderText}>{company.phone_number}</Text>
            <Text style= {styles.companyHeaderText}>{company.email}</Text>
          </View>

          <View style= {{borderBottomColor: 'black', borderBottomWidth: 1 , padding: 25}}>
            <Text style={{color: '#53346A', fontFamily: 'poppins', fontWeight: 'bold' }}>ABOUT US</Text>
            <Text style= {{color: '#53346A', fontFamily: 'poppins' }}>{company.description}</Text>
          </View>
          
          <View style={{padding: 25}}>
            <Text style={{color: '#53346A', fontFamily: 'poppins', fontWeight: 'bold', marginBottom: 20 }}>SERVICES OFFERED</Text>
            <View style={styles.grid}>
              {servicesList.map(service => (
                  <View  key={service.id} style={styles.serviceType}>
                    <Text style={{color:'white', textAlign: 'center'}}>{service.service_name}</Text>
                  </View>
                ))}
            </View>
          </View>
          <View style= {{marginTop: 'auto', padding: 30}}>
            <Pressable onPress={handlePress} style={{backgroundColor: '#2b4ba2', padding: 10, borderRadius: 20}}><Text style={{color: 'white', textAlign: 'center'}}>Request a Service</Text></Pressable>
          </View>
        </ScrollView>
      </SafeAreaView>
    );
    };

const styles = StyleSheet.create({
 companyHeaderText: {
  color: 'white' ,
  fontSize: 14,
 },
grid: {
  flexDirection: 'row',
  flexWrap: 'wrap',
  justifyContent: 'space-between',
  gap: 5,
},
serviceType: {
  backgroundColor: '#2b4ba2',
  padding: 10,
  color: 'white',
  borderRadius: 20,
  width: '48%',
}
});



export default CompanyDetails;