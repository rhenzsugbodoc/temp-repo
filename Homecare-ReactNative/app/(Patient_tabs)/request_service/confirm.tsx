import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';

export default function RequestService() {
    const router = useRouter();
 
    return (
    <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#f5f7fa',
        padding: 10,
        justifyContent: 'center',
        alignItems: 'center',
        }} edges={['top']}>
            <Image source={require('../../../assets/images/successful_booking.png')} resizeMode="contain" 
                style={{ width: '100%', height: 120, marginBottom: 10 }} />
            <View>
                <Text style={[styles.bookingText, {fontSize: 18, fontWeight: 'bold'}]}>BOOKING CONFIRMED!</Text>
                <Text style={styles.bookingText}>Updates on your request status {'\n'} will be sent via the app {'\n'} and to your email/phone number.</Text>
            </View>
            <View style={{marginTop: 20}}>
                <Pressable style= {styles.submitButton} onPress={() => router.push('/(Patient_tabs)')}>
                    <Text style={{color: 'white', textAlign: 'center', fontFamily: 'poppins'}}>Back to Home</Text></Pressable>
            </View>
    </SafeAreaView>
    );
}
const styles = StyleSheet.create({
    bookingText: {
        fontSize: 14,
        textAlign: 'center',
        color: '#434e79',
        fontFamily: 'poppins'
    },
    submitButton: {
        backgroundColor: '#4454c3',
        padding: 15,
        borderRadius: 15,
    },

});
