import React, { useEffect, useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, ActivityIndicator, RefreshControl } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import { useAuth } from '@/src/context/AuthContext';
import dashboardService, { DashboardData } from '@/src/services/dashboardService';

export default function PatientDashboard() {
  const router = useRouter();
  const { logoutUser, loggedInUser, refreshUserData } = useAuth();
  const [dashboardData, setDashboardData] = useState<DashboardData | null>(null);
  const [isLoadingDashboard, setIsLoadingDashboard] = useState(true);
  const [refreshing, setRefreshing] = useState(false);

  useEffect(() => {
    loadDashboard();
  }, []);

  const loadDashboard = async () => {
    try {
      setIsLoadingDashboard(true);
      const data = await dashboardService.getPatientDashboard();
      setDashboardData(data);
    } catch (error: any) {
      console.error('Failed to load dashboard:', error);
      // If dashboard API fails, we can still show basic UI with user data
    } finally {
      setIsLoadingDashboard(false);
    }
  };

  const onRefresh = async () => {
    setRefreshing(true);
    try {
      await refreshUserData();
      await loadDashboard();
    } catch (error) {
      console.error('Refresh failed:', error);
    } finally {
      setRefreshing(false);
    }
  };

  const handleLogout = async () => {
    try {
      await logoutUser();
      router.replace('/login');
    } catch (error) {
      console.error('Logout failed:', error);
      // Still navigate to login even if API call fails
      router.replace('/login');
    }
  };

  const items = [
    { id: 1, name: 'heart-outline', label: 'Health Records', route: 'health_records' },
    { id: 2, name: 'time-outline', label: 'Visit History', route: 'visit_history' },
    { id: 3, name: 'people-outline', label: 'Care Providers', route: 'care_team' },
    { id: 4, name: 'document-text-outline', label: 'Clinical Notes', route: 'clinical_notes' },
    { id: 5, name: 'home-outline', label: 'Services', route: 'services' },
    { id: 6, name: 'calendar-outline', label: 'Calendar', route: 'calendar' },
    { id: 7, name: 'folder-outline', label: 'Files', route: 'files' },
    { id: 8, name: 'card-outline', label: 'Bills', route: 'bills' },
  ];

  // Use dashboard care team data or fallback to mock data
  const careTeamMembers = dashboardData?.care_team || [];

  // Show loading spinner initially
  if (isLoadingDashboard && !dashboardData) {
    return (
      <SafeAreaView style={styles.container} edges={['top']}>
        <View style={styles.loadingContainer}>
          <ActivityIndicator size="large" color="#4454c3" />
          <Text style={styles.loadingText}>Loading dashboard...</Text>
        </View>
      </SafeAreaView>
    );
  }

  return (
    <SafeAreaView style={styles.container} edges={['top']}>
      <View style={styles.header}>
        <Image
          source={require('@/assets/images/Homecare_Logo.png')}
          style={{ width: 50, height: 40, marginLeft: 15 }}
          resizeMode="contain"
        />

        <Text style={styles.greetingText}>
          Hello {loggedInUser?.first_name || 'User'}!
        </Text>

        <Pressable style={styles.iconCircle} onPress={handleLogout}>
          <Ionicons name="log-out-outline" size={24} color="#4454c3" />
        </Pressable>
      </View>

      <ScrollView
        style={{ paddingHorizontal: 15 }}
        refreshControl={
          <RefreshControl refreshing={refreshing} onRefresh={onRefresh} colors={['#4454c3']} />
        }
      >
        <Text style={styles.categoryLabel}>Today's Schedule</Text>

        {dashboardData?.today_schedule && dashboardData.today_schedule.length > 0 ? (
          <View style={styles.card}>
            {dashboardData.today_schedule.map((item, index) => (
              <View key={index} style={styles.scheduleItem}>
                <View style={styles.scheduleIconContainer}>
                  <Ionicons
                    name={
                      item.type === 'appointment' ? 'calendar' :
                      item.type === 'medication' ? 'medical' :
                      'time'
                    }
                    size={24}
                    color="#4454c3"
                  />
                </View>
                <View style={styles.scheduleContent}>
                  <Text style={styles.scheduleTitle}>{item.title}</Text>
                  {item.description && (
                    <Text style={styles.scheduleDescription}>{item.description}</Text>
                  )}
                  <Text style={styles.scheduleTime}>{item.scheduled_time}</Text>
                </View>
                <View style={[
                  styles.statusBadge,
                  { backgroundColor: item.status === 'completed' ? '#34C759' : '#FF9500' }
                ]}>
                  <Text style={styles.statusText}>{item.status}</Text>
                </View>
              </View>
            ))}
          </View>
        ) : (
          <View style={[styles.card, { backgroundColor: '#4454c3' }]}>
            <Text style={{ color: 'white' }}>No plans for today</Text>
          </View>
        )}

        <View style={styles.card}>
          <View style={styles.grid}>
            {items.map((item, index) => (
              <View key={index} style={styles.item}>
                <Pressable
                  style={styles.iconCircle}
                  onPress={() => router.push(`/(Patient_tabs)/dashboard/${item.route}`)}
                >
                  <Ionicons name={item.name as any} size={30} color="#6366f1" />
                </Pressable>
                <Text style={styles.label}>{item.label}</Text>
              </View>
            ))}
          </View>
        </View>

        <Text style={styles.categoryLabel}>Care Team</Text>

        {careTeamMembers.length > 0 ? (
          <ScrollView
            horizontal
            showsHorizontalScrollIndicator={false}
            contentContainerStyle={{ flexDirection: 'row', gap: 10 }}
          >
            {careTeamMembers.map((member) => (
              <View key={member.provider_id} style={[styles.card, styles.careTeamCard]}>
                <View style={styles.careTeamAvatar}>
                  {member.profile_picture ? (
                    <Image
                      source={{ uri: member.profile_picture }}
                      style={styles.avatarImage}
                    />
                  ) : (
                    <Ionicons name="person-outline" size={30} color="#6366f1" />
                  )}
                </View>
                <Text style={styles.careTeamName} numberOfLines={2}>
                  {member.name}
                </Text>
                <Text style={styles.careTeamRole}>{member.role}</Text>
                {member.specialization && (
                  <Text style={styles.careTeamSpecialization} numberOfLines={1}>
                    {member.specialization}
                  </Text>
                )}
              </View>
            ))}
          </ScrollView>
        ) : (
          <View style={styles.card}>
            <Text style={styles.emptyText}>No care team members assigned yet</Text>
          </View>
        )}

        {/* Display profile: for backend connection verification */}
        <Text style={styles.categoryLabel}>Your Profile</Text>
        {loggedInUser && (
          <View style={styles.card}>
            
            <View style={styles.profileInfo}>
              <Text style={styles.profileLabel}>Name:</Text>
              <Text style={styles.profileValue}>
                {loggedInUser.first_name} {loggedInUser.middle_name || ''} {loggedInUser.last_name}
              </Text>
            </View>
            <View style={styles.profileInfo}>
              <Text style={styles.profileLabel}>Email:</Text>
              <Text style={styles.profileValue}>{loggedInUser.email_address}</Text>
            </View>
            <View style={styles.profileInfo}>
              <Text style={styles.profileLabel}>Role:</Text>
              <Text style={styles.profileValue}>{loggedInUser.role}</Text>
            </View>
            {loggedInUser.phone_number && (
              <View style={styles.profileInfo}>
                <Text style={styles.profileLabel}>Phone:</Text>
                <Text style={styles.profileValue}>{loggedInUser.phone_number}</Text>
              </View>
            )}
          </View>
        )}

        <View style={{ height: 30 }} />
      </ScrollView>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f5f7fa',
  },
  loadingContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  loadingText: {
    marginTop: 12,
    fontSize: 16,
    color: '#666',
  },
  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    padding: 20,
    marginHorizontal: 15,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },
  header: {
    height: 60,
    alignItems: 'center',
    flexDirection: 'row',
    marginVertical: 10,
    gap: 10,
  },
  greetingText: {
    color: '#8c82c6',
    fontWeight: 'bold',
    fontSize: 16,
    flex: 1,
  },
  categoryLabel: {
    color: '#434e79',
    fontSize: 20,
    margin: 10,
    fontWeight: 'bold',
  },
  grid: {
    flexDirection: 'row',
    flexWrap: 'wrap',
    justifyContent: 'space-between',
  },
  item: {
    width: '22%',
    alignItems: 'center',
    marginVertical: 10,
  },
  iconCircle: {
    borderRadius: 25,
    padding: 10,
    backgroundColor: '#eef2ff',
  },
  label: {
    fontSize: 12,
    color: '#4b5563',
    textAlign: 'center',
    marginTop: 6,
  },
  scheduleItem: {
    flexDirection: 'row',
    alignItems: 'center',
    paddingVertical: 12,
    borderBottomWidth: 1,
    borderBottomColor: '#f0f0f0',
  },
  scheduleIconContainer: {
    width: 40,
    height: 40,
    borderRadius: 20,
    backgroundColor: '#eef2ff',
    alignItems: 'center',
    justifyContent: 'center',
    marginRight: 12,
  },
  scheduleContent: {
    flex: 1,
  },
  scheduleTitle: {
    fontSize: 16,
    fontWeight: '600',
    color: '#1a1a1a',
    marginBottom: 2,
  },
  scheduleDescription: {
    fontSize: 13,
    color: '#666',
    marginBottom: 4,
  },
  scheduleTime: {
    fontSize: 12,
    color: '#999',
  },
  statusBadge: {
    paddingHorizontal: 10,
    paddingVertical: 4,
    borderRadius: 12,
  },
  statusText: {
    color: 'white',
    fontSize: 11,
    fontWeight: '600',
    textTransform: 'capitalize',
  },
  careTeamCard: {
    width: 140,
    alignItems: 'center',
  },
  careTeamAvatar: {
    width: 60,
    height: 60,
    borderRadius: 30,
    backgroundColor: '#eef2ff',
    alignItems: 'center',
    justifyContent: 'center',
    marginBottom: 8,
  },
  avatarImage: {
    width: 60,
    height: 60,
    borderRadius: 30,
  },
  careTeamName: {
    fontSize: 14,
    fontWeight: '600',
    color: '#1a1a1a',
    textAlign: 'center',
    marginBottom: 4,
  },
  careTeamRole: {
    fontSize: 12,
    color: '#6366f1',
    fontWeight: '500',
    marginBottom: 2,
  },
  careTeamSpecialization: {
    fontSize: 11,
    color: '#999',
    textAlign: 'center',
  },
  emptyText: {
    textAlign: 'center',
    color: '#999',
    fontSize: 14,
  },
  profileInfo: {
    flexDirection: 'row',
    paddingVertical: 8,
    borderBottomWidth: 1,
    borderBottomColor: '#f0f0f0',
  },
  profileLabel: {
    fontSize: 14,
    fontWeight: '600',
    color: '#666',
    width: 80,
  },
  profileValue: {
    fontSize: 14,
    color: '#1a1a1a',
    flex: 1,
  },
});