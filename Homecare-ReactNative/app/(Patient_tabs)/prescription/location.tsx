import * as Location from 'expo-location';
import {useState, useEffect} from 'react';
import MapView, { Polyline, PROVIDER_GOOGLE, Marker } from 'react-native-maps';
import polyline from '@mapbox/polyline';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, TextInput, Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { useQuery} from '@tanstack/react-query';
import { Ionicons } from '@expo/vector-icons';
// current setup, user sends their location , backend returns it , rendered using mapview
export default function LocationTracking() {
  const [location, setLocation] = useState({ latitude: 0, longitude: 0 });
  const [driverLocation, setDriverLocation] = useState({ latitude: 0, longitude: 0 });
  const [initialRegion, setInitialRegion] = useState({latitude: 0, longitude: 0, latitudeDelta: 0.005, longitudeDelta: 0.005});
  const [routeCoords, setRouteCoords] = useState([]);
  const destination = {
    latitude: 10.3745,
    longitude: 123.9164,
  };

  useEffect(()=> {
    (async () => {
      const { status } = await Location.requestForegroundPermissionsAsync();
      if (status !== 'granted') {
        console.log('Permission denied');
        return;
      }
    })();
    
    (async () => { //replace w destination coords, http request
      const loc = await Location.getCurrentPositionAsync({});
      setInitialRegion({
        latitude: loc.coords.latitude,
        longitude: loc.coords.longitude,
        latitudeDelta: 0.005,
        longitudeDelta: 0.005
      });
    })();
  }, [])

  // useEffect(() => {
  //   const ws = new WebSocket('ws://localhost:8080'); 
  //   const interval = setInterval(async () => { //setInterval js function that runs callback func every x ms
  //     const loc = await Location.getCurrentPositionAsync({});
  //     const coords = { latitude: loc.coords.latitude, longitude: loc.coords.longitude };
  //     setLocation(coords);         
  //     ws.send(JSON.stringify(coords)); 
  //   }, 5000);

  //   ws.onmessage = (event) => {
  //       const data = JSON.parse(event.data);
  //       console.log('Received from server:', data);       
  //    setDriverLocation({ latitude: data.latitude, longitude: data.longitude });
  //   };

  //   return () => {
  //     clearInterval(interval);
  //     ws.close();
  //   };
  // }, []);

    useEffect(() => {
    const interval = setInterval(async () => { //setInterval js function that runs callback func every x ms
      const loc = await Location.getCurrentPositionAsync({});
      const coords = { latitude: loc.coords.latitude, longitude: loc.coords.longitude };
      setLocation(coords);         
      //const routeCoords= await getRoute(coords, destination);
      //setRouteCoords(routeCoords);
    }, 5000);
    return () => {
      clearInterval(interval);

    };
  }, []);


  const getRoute = async (location:{latitude: number, longitude: number}, destination:{latitude: number, longitude: number}) => {
    const response = await fetch(
      `https://maps.googleapis.com/maps/api/directions/json?origin=${location.latitude},${location.longitude}&destination=${destination.latitude},${destination.longitude}&key=YOUR_API_KEY`
    );
    const data = await response.json();

    // Google returns an encoded polyline
    const points = polyline.decode(data.routes[0].overview_polyline.points);

    // Convert to { latitude, longitude } format
    const routeCoords = points.map(point => ({
      latitude: point[0],
      longitude: point[1],
    }));

    return routeCoords;
  };

  return(
    <SafeAreaView style={{
        flex: 1,
        backgroundColor: '#f4f7fa',
        
        }} edges={['top']}>
      
        <MapView style={{ flex: 1 }} initialRegion={initialRegion} showsUserLocation={true} zoomEnabled={true}
        scrollEnabled={true}>
            <Marker coordinate={location} />
            {/* <Polyline coordinates={routeCoords} strokeColor="blue" strokeWidth={4} /> */}
        </MapView>

        <View style={styles.card}>
          <Text>Driver Information</Text>
          <View style={{ flexDirection: 'row', alignItems: 'center', padding: 12 }}>
            <View style={{ flex: 1 }}>
              <Image source={require('../../../assets/images/MisterMatres.png')} resizeMode="contain" 
                style={{ borderRadius: 10, width: '100%', height: 150 }} />
            </View>
            <View style={{ flex: 1 }}>
              <Text style={{ fontSize: 16, fontWeight: '600', color: '#53346a' }}>Clement Djen</Text>
              <Text style={{ fontSize: 14, color: '#53346a' }}>Delivery Driver</Text>
            </View>
            <Pressable>
              <Ionicons name="call-outline" size={24} color="#53346a" style={{ marginRight: 16 }} />
            </Pressable>
            <Pressable>
              <Ionicons name="chatbubble-ellipses-outline" size={24} color="#53346a" />
            </Pressable>
          </View>
        </View>
    
    </SafeAreaView>

  )
} 

const styles = StyleSheet.create({
    card: {
    backgroundColor: '#ffffff',
    marginBottom: 10,
    padding: 20,
    paddingHorizontal: 25,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    
  },
})