import {View, FlatList, SafeAreaView, Animated, Dimensions, Text, Pressable, StyleSheet} from 'react-native'
import {useAvailableServices, useServiceToFacilityMutation} from  '../../../../src/options/Admin_patientsQueryOptions'
import {useState, useRef} from 'react'
import { Ionicons } from '@expo/vector-icons'

export default function ServiceList() {
    const {width} = Dimensions.get('window');
    const [form, setForm] = useState<number[]>([]);
    const {data: servicesList} = useAvailableServices();
    const {mutate} = useServiceToFacilityMutation();

    // Group services by category
    const groupedServices = servicesList?.reduce((acc: any, service: any) => {
        const category = service.category_name || 'Uncategorized';
        if (!acc[category]) {
            acc[category] = [];
        }
        acc[category].push(service);
        return acc;
    }, {}) || {};

    // Sort categories
    const sortedCategories = Object.keys(groupedServices).sort();

    const getCategoryIcon = (categoryName: string) => {
        switch(categoryName) {
            case 'Assisted Living': return 'home';
            case 'Nursing Care': return 'medical';
            case 'Companionship': return 'people';
            case 'Therapy': return 'fitness';
            default: return 'ellipse';
        }
    };

    const toggleService = (serviceId: number) => {
        setForm(prev => {
            if (prev.includes(serviceId)) {
                return prev.filter(id => id !== serviceId);
            } else {
                return [...prev, serviceId];
            }
        });
    };

    const handleSubmit = async () => {
        for (const serviceId of form) {
            await mutate(serviceId);
        }
        setForm([]);
    };

    const ServiceItem = ({service}: any) => {
        const isSelected = form.includes(service.service_id);
        const rippleOpacity = useRef(new Animated.Value(1)).current;

        const handlePress = () => {
            rippleOpacity.setValue(0.5);
            
            Animated.timing(rippleOpacity, {
                toValue: isSelected ? 1 : 0,
                duration: 100,
                useNativeDriver: false,
            }).start();

            toggleService(service.service_id);
        };

        return (
            <Animated.View style={[
                styles.serviceItem,
                {
                    backgroundColor: isSelected ? '#ebf6ff' : 'white',
                    opacity: rippleOpacity,
                }
            ]}>
                <Pressable onPress={handlePress} style={styles.pressableContent}>
                    <Text style={styles.serviceName}>{service.name}</Text>
                    <View style={styles.iconContainer}>
                        <View style={[styles.iconCircle, isSelected && styles.selectedItem]}>
                            <Ionicons 
                                name={isSelected ? 'checkmark' : getCategoryIcon(service.category_name)} 
                                size={24} 
                                color={isSelected ? '#4F46E5' : '#4a5cbe'} 
                            />
                        </View>
                    </View>
                </Pressable>
            </Animated.View>
        );
    };

    return (
        <SafeAreaView style={styles.container} edges={['top']}>
            <FlatList
                data={sortedCategories}
                keyExtractor={(category) => category}
                renderItem={({item: category}) => (
                    <View style={styles.categorySection}>
                        <Text style={styles.categoryTitle}>{category.toUpperCase()}</Text>
                        {groupedServices[category].map((service: any) => (
                            <ServiceItem key={service.service_id} service={service} />
                        ))}
                    </View>
                )}
            />
            
            {form.length > 0 && (
                <Pressable onPress={handleSubmit} style={styles.submitButton}>
                    <Ionicons name="checkmark-done" size={30} color="white" />
                </Pressable>
            )}
        </SafeAreaView>
    );
}

const styles = StyleSheet.create({
    container: {
        // flex: 1,
        // backgroundColor: '#f4f7fa',
        marginTop: 30
    },
    categorySection: {
        marginTop: 20,
        paddingHorizontal: 20,
    },
    categoryTitle: {
        fontSize: 16,
        fontWeight: 'bold',
        color: '#434e79',
        marginBottom: 10,
    },
    serviceItem: {
        backgroundColor: 'white',
        overflow: 'hidden',
    },
    pressableContent: {
        padding: 15,
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
    },
    serviceName: {
        fontSize: 16,
        fontWeight: 'bold',
        color: '#424e78',
        flex: 1,
    },
    iconContainer: {
        position: 'relative',
        justifyContent: 'center',
        alignItems: 'center',
    },
    iconCircle: {
        width: 50,
        height: 50,
        borderRadius: 25,
        backgroundColor: '#eef2ff',
        justifyContent: 'center',
        alignItems: 'center',
    },
    selectedItem: {
        backgroundColor: '#d4e3ff',
    },
    ripple: {
        position: 'absolute',
        width: 50,
        height: 50,
        backgroundColor: '#4a5cbe',
        width: 60,
        height: 60,
        borderRadius: 30,
        justifyContent: 'center',
        alignItems: 'center',
        elevation: 5,
        shadowColor: '#000',
        shadowOpacity: 0.3,
        shadowOffset: { width: 0, height: 2 },
        shadowRadius: 4,
    },
});

