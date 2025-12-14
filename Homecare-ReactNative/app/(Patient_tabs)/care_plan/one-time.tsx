import React, { useState, useEffect } from 'react';
import { View, ScrollView, StyleSheet, Text, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import AsyncStorage from '@react-native-async-storage/async-storage';
import { Ionicons } from '@expo/vector-icons';
import { useRequestDetails } from '@/src/options/carePlanQueryOptions';
import { useCarePlan } from '@/src/context/CarePlanContext';

export default function OneTimeServiceDetails() {
  const { requestID } = useCarePlan();
  const [patientID, setPatientID] = useState<number | null>(null);

  useEffect(() => {
    const fetchPatientID = async () => {
      const pID = await AsyncStorage.getItem('patientID');
      if (pID) setPatientID(parseInt(pID));
    };
    fetchPatientID();
  }, []);

  console.log('Request ID from context:', requestID);

  const { data: requestDetails, isLoading, isFetching, refetch } = useRequestDetails(requestID || 0,!!(requestID));

  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: '#f4f7fa' }} edges={['top']}>
      {/* Header */}
      <View style={{ height: 90, backgroundColor: '#4454c3', justifyContent: 'center', paddingHorizontal: 30 }}>
        <Text style={{ color: 'white', fontFamily: 'poppins', fontSize: 25 }}>Service Request Details</Text>
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
        {requestDetails && (
          <>
            {/* 1. Service Information */}
            <View style={styles.card}>
              <View style={{ flexDirection: 'row', justifyContent: 'flex-start', gap: 10, marginBottom: 15 }}>
                <View style={styles.logoContainer}>
                  <Ionicons name="information-circle" size={24} color="#4454c3" />
                </View>
                <Text style={styles.cardTitle}>Service Information</Text>
              </View>
              <View style={styles.row}>
                <Text style={styles.label}>Service Name:</Text>
                <Text style={styles.value}>{requestDetails.service_name || 'N/A'}</Text>
              </View>
              <View style={styles.row}>
                <Text style={styles.label}>Category:</Text>
                <Text style={styles.valueSmall}>{requestDetails.category_name || 'N/A'}</Text>
              </View>
              <View style={styles.row}>
                <Text style={styles.label}>Service Type:</Text>
                <View style={styles.badge}>
                  <Text style={styles.badgeText}>{requestDetails.service_type}</Text>
                </View>
              </View>
              <View style={styles.row}>
                <Text style={styles.label}>Status:</Text>
                <Text style={styles.value}>{requestDetails.status}</Text>
              </View>
            </View>

            {/* 2. Schedule */}
            <View style={styles.card}>
              <View style={{ flexDirection: 'row', justifyContent: 'flex-start', gap: 10, marginBottom: 15 }}>
                <View style={styles.logoContainer}>
                  <Ionicons name="calendar" size={24} color="#4454c3" />
                </View>
                <Text style={styles.cardTitle}>Schedule</Text>
              </View>
              <View style={styles.row}>
                <Text style={styles.label}>Preferred Date:</Text>
                <Text style={styles.value}>{requestDetails.preferred_date || 'N/A'}</Text>
              </View>
              <View style={styles.row}>
                <Text style={styles.label}>Preferred Time:</Text>
                <Text style={styles.value}>{requestDetails.preferred_time || 'N/A'}</Text>
              </View>
              {requestDetails.frequency && (
                <View style={styles.row}>
                  <Text style={styles.label}>Frequency:</Text>
                  <Text style={styles.value}>{requestDetails.frequency}</Text>
                </View>
              )}
              {requestDetails.duration_weeks && (
                <View style={styles.row}>
                  <Text style={styles.label}>Duration:</Text>
                  <Text style={styles.value}>{requestDetails.duration_weeks} weeks</Text>
                </View>
              )}
            </View>

            {/* 3. Caregiver Information */}
            <View style={styles.card}>
              <View style={{ flexDirection: 'row', justifyContent: 'flex-start', gap: 10, marginBottom: 15 }}>
                <View style={styles.logoContainer}>
                  <Ionicons name="people" size={24} color="#4454c3" />
                </View>
                <Text style={styles.cardTitle}>Caregiver Information</Text>
              </View>
              <View style={styles.section}>
                <Text style={styles.label}>Preferred Caregiver:</Text>
                <Text style={styles.value}>
                  {requestDetails.preferred_caregiver_first_name && requestDetails.preferred_caregiver_last_name
                    ? `${requestDetails.preferred_caregiver_first_name} ${requestDetails.preferred_caregiver_last_name}`
                    : 'Not specified'}
                </Text>
                {requestDetails.preferred_caregiver_phone && (
                  <Text style={styles.phoneText}>{requestDetails.preferred_caregiver_phone}</Text>
                )}
              </View>
              <View style={styles.section}>
                <Text style={styles.label}>Assigned Caregiver:</Text>
                <Text style={styles.value}>
                  {requestDetails.assigned_caregiver_first_name && requestDetails.assigned_caregiver_last_name
                    ? `${requestDetails.assigned_caregiver_first_name} ${requestDetails.assigned_caregiver_last_name}`
                    : 'Not assigned yet'}
                </Text>
                {requestDetails.assigned_caregiver_phone && (
                  <Text style={styles.phoneText}>{requestDetails.assigned_caregiver_phone}</Text>
                )}
              </View>
            </View>

            {/* 4. Facility */}
            <View style={styles.card}>
              <View style={{ flexDirection: 'row', justifyContent: 'flex-start', gap: 10, marginBottom: 15 }}>
                <View style={styles.logoContainer}>
                  <Ionicons name="business" size={24} color="#4454c3" />
                </View>
                <Text style={styles.cardTitle}>Facility</Text>
              </View>
              <View style={styles.row}>
                <Text style={styles.label}>Facility Name:</Text>
                <Text style={styles.valueMedium}>{requestDetails.facility_name || 'N/A'}</Text>
              </View>
              {requestDetails.facility_address && (
                <View style={styles.row}>
                  <Text style={styles.label}>Address:</Text>
                  <Text style={styles.valueSmall}>{requestDetails.facility_address}</Text>
                </View>
              )}
              {requestDetails.facility_phone && (
                <View style={styles.row}>
                  <Text style={styles.label}>Phone:</Text>
                  <Text style={styles.phoneText}>{requestDetails.facility_phone}</Text>
                </View>
              )}
            </View>

            {/* 5. Episode Progress (if exists) */}
            {requestDetails.episode && (
              <View style={styles.card}>
                <View style={{ flexDirection: 'row', justifyContent: 'flex-start', gap: 10, marginBottom: 15 }}>
                  <View style={styles.logoContainer}>
                    <Ionicons name="bar-chart" size={24} color="#4454c3" />
                  </View>
                  <Text style={styles.cardTitle}>Episode Progress</Text>
                </View>
                <View style={styles.row}>
                  <Text style={styles.label}>Episode Name:</Text>
                  <Text style={styles.valueMedium}>{requestDetails.episode.episode_name}</Text>
                </View>
                <View style={styles.row}>
                  <Text style={styles.label}>Episode Type:</Text>
                  <View style={styles.badge}>
                    <Text style={styles.badgeText}>{requestDetails.episode.episode_type}</Text>
                  </View>
                </View>
                <View style={styles.row}>
                  <Text style={styles.label}>Status:</Text>
                  <View style={styles.badge}>
                    <Text style={styles.badgeText}>{requestDetails.episode.status}</Text>
                  </View>
                </View>
                <View style={styles.row}>
                  <Text style={styles.label}>Date Range:</Text>
                  <Text style={styles.valueSmall}>
                    {requestDetails.episode.start_date} - {requestDetails.episode.end_date || 'Ongoing'}
                  </Text>
                </View>
                <View style={styles.progressSection}>
                  <View style={styles.statBox}>
                    <Text style={styles.statNumber}>{requestDetails.episode.completed_interventions}</Text>
                    <Text style={styles.statLabel}>Completed</Text>
                  </View>
                  <View style={styles.statBox}>
                    <Text style={styles.statNumber}>{requestDetails.episode.scheduled_interventions}</Text>
                    <Text style={styles.statLabel}>Scheduled</Text>
                  </View>
                  <View style={styles.statBox}>
                    <Text style={styles.statNumber}>{requestDetails.episode.total_interventions}</Text>
                    <Text style={styles.statLabel}>Total</Text>
                  </View>
                </View>
                <View style={styles.progressBarContainer}>
                  <View
                    style={[
                      styles.progressBar,
                      {
                        width: `${
                          (requestDetails.episode.completed_interventions / requestDetails.episode.total_interventions) * 100
                        }%`,
                      },
                    ]}
                  />
                </View>
              </View>
            )}

            {/* 6. Notes */}
            <View style={styles.card}>
              <View style={{ flexDirection: 'row', justifyContent: 'flex-start', gap: 10, marginBottom: 15 }}>
                <View style={styles.logoContainer}>
                  <Ionicons name="document-text" size={24} color="#4454c3" />
                </View>
                <Text style={styles.cardTitle}>Notes</Text>
              </View>
              <View style={styles.section}>
                <Text style={styles.label}>Patient Notes:</Text>
                <Text style={styles.noteText}>{requestDetails.notes || 'No notes provided'}</Text>
              </View>
              {requestDetails.admin_notes && (
                <View style={styles.section}>
                  <Text style={styles.label}>Admin Notes:</Text>
                  <Text style={styles.noteText}>{requestDetails.admin_notes}</Text>
                </View>
              )}
            </View>
          </>
        )}
      </ScrollView>
    </SafeAreaView>
  );
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
  valueMedium: {
    fontSize: 14,
    color: '#000000',
    fontWeight: '500',
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
  progressSection: {
    flexDirection: 'row',
    justifyContent: 'space-around',
    marginVertical: 15,
  },
  statBox: {
    alignItems: 'center',
  },
  statNumber: {
    fontSize: 24,
    fontWeight: '600',
    color: '#000000',
    fontFamily: 'poppins',
  },
  statLabel: {
    fontSize: 10,
    color: '#6b7280',
    fontFamily: 'poppins',
    marginTop: 4,
  },
  progressBarContainer: {
    height: 8,
    backgroundColor: '#e5e7eb',
    borderRadius: 4,
    overflow: 'hidden',
    marginTop: 10,
  },
  progressBar: {
    height: '100%',
    backgroundColor: '#4454c3',
  },
});