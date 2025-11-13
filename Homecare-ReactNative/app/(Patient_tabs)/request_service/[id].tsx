import React from 'react';
import { View, Text, StyleSheet, Pressable, ScrollView} from 'react-native';
import { useRouter, useLocalSearchParams  } from 'expo-router';
import { getCompanyOptions} from '../../../options/companyQueryOptions';
import { useQuery} from '@tanstack/react-query';
import { SafeAreaView } from 'react-native-safe-area-context';
const CompanyDetails = () => {
    
    const router = useRouter();

    const { companyId } = useLocalSearchParams();
    const {data, isLoading, isError} = useQuery(getCompanyOptions(Number(companyId)));

    const handlePress = () =>{
      router.push(`/request/request_service?companyID=${companyId}`);  
    }
    const company = {
        id: companyId,
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
      <SafeAreaView>
        <ScrollView>
          {/* header blue */}
          <View style={{ backgroundColor: '2b4ba2' , justifyContent: 'center', alignItems: 'center', height: 150}}> 
            <Text style= {[styles.companyHeaderText, { fontWeight: 'bold' }]}>{company.company_name}</Text>
            <Text style= {styles.companyHeaderText}>{company.address}</Text>
            <Text style= {styles.companyHeaderText}>{company.phone_number}</Text>
            <Text style= {styles.companyHeaderText}>{company.email}</Text>
          </View>

          <View style= {{borderBottomColor: 'black', borderBottomWidth: 1}}>
            <Text>About Us</Text>
            <Text>{company.description}</Text>
          </View>
          
          <View >
            <Text>Services Offered</Text>
            <View style={styles.grid}>
              {servicesList.map(service => (
                  <View  key={service.id} style={styles.serviceType}>
                    <Text>{service.service_name}</Text>
                  </View>
                ))}
            </View>

            <View style= {{marginTop: 'auto', alignItems: 'center'}}>
              <Pressable onPress={handlePress} style={{backgroundColor: '#2b4ba2', padding: 10, borderRadius: 20}}>Request a Service</Pressable>
            </View>
          </View>
        </ScrollView>
      </SafeAreaView>
    );
    };

const styles = StyleSheet.create({
 companyHeaderText: {
  color: 'white' ,
  fontSize: 12,
 },
grid: {
  flexDirection: 'row',
  flexWrap: 'wrap',
  justifyContent: 'space-between',
  gap: 5,
},
serviceType: {
  backgroundColor: '#2b4ba2',
  color: 'white',
  borderRadius: 20,
  width: '33%',
}
});



export default CompanyDetails;