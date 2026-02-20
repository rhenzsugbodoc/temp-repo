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
      
        {/* Header */}
        <View style={styles.header}>
          <View>
            <Text style={styles.status}>Driver is on the way</Text>
            <Text style={styles.address}>3131 Karikitan St, Manggahan</Text>
          </View>
          <Text style={styles.eta}>6 min</Text>
        </View>

        {/* Driver Row */}
        <View style={styles.driverRow}>
          <Image
            source={require('../../../assets/images/driver.png')}
            style={styles.avatar}
          />

          <View style={styles.driverInfo}>
            <View style={styles.nameRow}>
              <Text style={styles.name}>Rhenz Largo</Text>
              <Text style={styles.rating}>• 4.8 ⭐</Text>
            </View>
            <Text style={styles.vehicle}>
              Honda WW160P • D518RG • Mototaxi - NCR to Rizal
            </Text>
          </View>

          {/* Actions */}
          <View style={styles.actions}>
            <Pressable style={styles.iconBtn}>
              <Ionicons name="chatbubble-ellipses-outline" size={20} color="#555" />
            </Pressable>
            <Pressable style={styles.iconBtn}>
              <Ionicons name="call-outline" size={20} color="#555" />
            </Pressable>
          </View>
        </View>
      </View>
    
    </SafeAreaView>

  )
} 

const styles = StyleSheet.create({
  card: {
    backgroundColor: '#fff',
    position: 'absolute',
    bottom: 0,
    left: 0,
    right: 0,
    borderRadius: 14,
    padding: 20,
    paddingBottom: 30,
    margin: 15,
    shadowColor: '#000',
    shadowOpacity: 0.08,
    shadowRadius: 10,
    elevation: 4,
    
  },

  header: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginBottom: 12,
  },

  status: {
    fontSize: 16,
    fontWeight: '600',
    color: '#222',
  },

  address: {
    fontSize: 13,
    color: '#777',
    marginTop: 2,
  },

  eta: {
    fontSize: 14,
    fontWeight: '600',
    color: '#222',
  },

  driverRow: {
    flexDirection: 'row',
    alignItems: 'center',
  },

  avatar: {
    width: 48,
    height: 48,
    borderRadius: 24,
    marginRight: 12,
  },

  driverInfo: {
    flex: 1,
  },

  nameRow: {
    flexDirection: 'row',
    alignItems: 'center',
  },

  name: {
    fontSize: 15,
    fontWeight: '600',
    color: '#222',
  },

  rating: {
    fontSize: 14,
    color: '#444',
    marginLeft: 6,
  },
  
  vehicle: {
    fontSize: 12,
    color: '#666',
    marginTop: 4,
  },

  actions: {
    flexDirection: 'row',
    marginLeft: 8,
  },

  iconBtn: {
    width: 36,
    height: 36,
    borderRadius: 18,
    borderWidth: 1,
    borderColor: '#ddd',
    alignItems: 'center',
    justifyContent: 'center',
    marginLeft: 8,
  },
})