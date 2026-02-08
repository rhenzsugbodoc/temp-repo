import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';


export default function Interventions () {
    const assignmentData = [
        {
            assignment_id: '1',
            caregiver_first_name: 'Sarah',
            caregiver_last_name: 'Johnson',
            assignment_type: 'Primary',
            status: 'Active',
            shift_schedule: 'Monday-Friday: 8AM-4PM',
            start_date: '2026-01-15',
            end_date: '2026-06-15',
            specialization: 'Registered Nurse',
            caregiver_phone: '+1 (555) 123-4567',
            responsibilities: 'Medication management, vital signs monitoring, wound care, patient education'
        },
        {
            assignment_id: '2',
            caregiver_first_name: 'Michael',
            caregiver_last_name: 'Chen',
            assignment_type: 'Secondary',
            status: 'Active',
            shift_schedule: 'Weekends: 9AM-5PM',
            start_date: '2026-01-20',
            end_date: null,
            specialization: 'Physical Therapist',
            caregiver_phone: '+1 (555) 234-5678',
            responsibilities: 'Physical therapy exercises, mobility assistance, strength training'
        },
        {
            assignment_id: '3',
            caregiver_first_name: 'Emily',
            caregiver_last_name: 'Rodriguez',
            assignment_type: 'Emergency',
            status: 'Active',
            shift_schedule: 'On-call 24/7',
            start_date: '2026-02-01',
            end_date: '2026-05-01',
            specialization: 'Emergency Care Specialist',
            caregiver_phone: '+1 (555) 345-6789',
            responsibilities: 'Emergency response, critical care support, emergency medication administration'
        },
        {
            assignment_id: '4',
            caregiver_first_name: 'David',
            caregiver_last_name: 'Thompson',
            assignment_type: 'Temporary',
            status: 'Inactive',
            shift_schedule: 'Tuesday/Thursday: 2PM-8PM',
            start_date: '2026-01-10',
            end_date: '2026-01-31',
            specialization: 'Occupational Therapist',
            caregiver_phone: '+1 (555) 456-7890',
            responsibilities: 'Daily living activities, cognitive exercises, adaptive equipment training'
        },
        {
            assignment_id: '5',
            caregiver_first_name: 'Jessica',
            caregiver_last_name: 'Williams',
            assignment_type: 'Primary',
            status: 'Active',
            shift_schedule: 'Monday/Wednesday/Friday: 6AM-2PM',
            start_date: '2026-02-05',
            end_date: null,
            specialization: 'Home Health Aide',
            caregiver_phone: '+1 (555) 567-8901',
            responsibilities: 'Personal care assistance, meal preparation, light housekeeping, companionship'
        }
    ];

    const [refreshing, setRefreshing] = useState(false);

    const onRefresh = () => {
        setRefreshing(true);
        setTimeout(() => setRefreshing(false), 1000);
    };

    return (
        <SafeAreaView style={{
            flex: 1,
            backgroundColor: '#f4f7fa',
          }} edges={['top']}>
            
            {/* Header */}
            <View style={{ height: 90, backgroundColor: '#4454c3', justifyContent: 'center', paddingHorizontal: 30 }}>
                <Text style={{ color: 'white', fontFamily: 'poppins', fontSize: 25 }}>Caregiver Assignments</Text>
            </View>

            <ScrollView
                refreshControl={
                    <RefreshControl
                        refreshing={refreshing}
                        onRefresh={onRefresh}
                        colors={['#4454c3']}
                        tintColor="#4454c3"
                    />
                }
            >
                {assignmentData?.map(assignment => (
                    <View key={assignment.assignment_id} style={styles.card}>
                        {/* Caregiver Information */}
                        <View style={{ flexDirection: 'row', justifyContent: 'flex-start', gap: 10, marginBottom: 15 }}>
                            <View style={styles.logoContainer}>
                                <Ionicons name="person" size={24} color="#4454c3" />
                            </View>
                            <Text style={styles.cardTitle}>
                                {assignment.caregiver_first_name} {assignment.caregiver_last_name}
                            </Text>
                        </View>

                        {/* Assignment Type */}
                        <View style={styles.row}>
                            <Text style={styles.label}>Assignment Type:</Text>
                            <View style={styles.badge}>
                                <Text style={styles.badgeText}>{assignment.assignment_type}</Text>
                            </View>
                        </View>

                        {/* Status */}
                        <View style={styles.row}>
                            <Text style={styles.label}>Status:</Text>
                            <Text style={styles.value}>{assignment.status}</Text>
                        </View>

                        {/* Schedule */}
                        {assignment.shift_schedule && (
                            <View style={styles.row}>
                                <Text style={styles.label}>Schedule:</Text>
                                <Text style={styles.valueSmall}>{assignment.shift_schedule}</Text>
                            </View>
                        )}

                        {/* Start Date */}
                        <View style={styles.row}>
                            <Text style={styles.label}>Start Date:</Text>
                            <Text style={styles.value}>{assignment.start_date || 'N/A'}</Text>
                        </View>

                        {/* End Date */}
                        {assignment.end_date && (
                            <View style={styles.row}>
                                <Text style={styles.label}>End Date:</Text>
                                <Text style={styles.value}>{assignment.end_date}</Text>
                            </View>
                        )}

                        {/* Specialization */}
                        {assignment.specialization && (
                            <View style={styles.row}>
                                <Text style={styles.label}>Specialization:</Text>
                                <Text style={styles.valueSmall}>{assignment.specialization}</Text>
                            </View>
                        )}

                        {/* Phone */}
                        {assignment.caregiver_phone && (
                            <View style={styles.row}>
                                <Text style={styles.label}>Phone:</Text>
                                <Text style={styles.phoneText}>{assignment.caregiver_phone}</Text>
                            </View>
                        )}

                        {/* Responsibilities */}
                        {assignment.responsibilities && (
                            <View style={styles.section}>
                                <Text style={styles.label}>Responsibilities:</Text>
                                <Text style={styles.noteText}>{assignment.responsibilities}</Text>
                            </View>
                        )}
                    </View>
                ))}
            </ScrollView>
        </SafeAreaView>)
}


const styles = StyleSheet.create({
  card: {
    backgroundColor: '#ffffff',
    borderRadius: 15,
    padding: 20,
    marginHorizontal: 30,
    marginVertical: 10,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
  },
  cardTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#000000',
    fontFamily: 'poppins',
  },
  logoContainer: {
    alignItems: 'center',
    justifyContent: 'center',
    borderRadius: 20,
  },
  row: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    marginBottom: 10,
  },
  section: {
    marginBottom: 15,
  },
  label: {
    fontSize: 12,
    color: '#6b7280',
    fontFamily: 'poppins',
  },
  value: {
    fontSize: 14,
    color: '#000000',
    fontFamily: 'poppins',
    textAlign: 'right',
    flex: 1,
    marginLeft: 10,
  },
  valueSmall: {
    fontSize: 12,
    color: '#6b7280',
    fontFamily: 'poppins',
    textAlign: 'right',
    flex: 1,
    marginLeft: 10,
  },
  badge: {
    backgroundColor: '#4454c3',
    paddingHorizontal: 8,
    paddingVertical: 4,
    borderRadius: 12,
  },
  badgeText: {
    fontSize: 10,
    color: '#ffffff',
    fontFamily: 'poppins',
  },
  phoneText: {
    fontSize: 12,
    color: '#4454c3',
    fontFamily: 'poppins',
    marginTop: 4,
  },
  noteText: {
    fontSize: 12,
    color: '#000000',
    fontFamily: 'poppins',
    marginTop: 5,
    lineHeight: 18,
  },
});