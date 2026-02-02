import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useCarePlan as useAdminCarePlan } from '@/src/context/Admin-CarePlanContext';
import { useAssignmentsByCarePlan } from '@/src/options/caregiverAssignmentQueryOptions';


export default function Interventions () {
    const { carePlanID } = useAdminCarePlan();
    const { data: assignmentData, isLoading, isFetching, refetch } = useAssignmentsByCarePlan(carePlanID || 0, !!carePlanID);

    console.log('=== Interventions Debug ===');
    console.log('carePlanID:', carePlanID);
    console.log('assignmentData:', assignmentData);
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
                        refreshing={isFetching}
                        onRefresh={refetch}
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