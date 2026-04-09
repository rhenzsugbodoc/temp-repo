import React, { useState, useEffect } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions, Modal } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import Animated, { useAnimatedStyle, useSharedValue, withSpring, withTiming } from 'react-native-reanimated';
import { getPatientID } from '@/src/options/tokenHandler';
import { useOneTimeRequests, useRoutineRequests } from '@/src/options/carePlanQueryOptions';

// FLOW
//      renderDayList  
// getMonthDays generates total number of days within current month
// creates undefined array from monthDays and maps, showing cards with day of the week (getDayName), date, and month
// Updates selectedDay onPress
//      renderDaySchedule
// filter based on selectedDay
// creates a scroll view direction row containing hours of the day on left side and schedule cards on right side
// schedule cards positioned absolutely with offset and height
// based on startTime and endTime converted to minutes via getMinutes function
//
// helper funcs: getMinutes, getMonthDays, getDayName,
// render funcs: renderDayList, renderDaySchedule
export default function DayCalendar() {
    const now = new Date();
    const [patientID, setPatientID] = useState<number | null>(null);
    const [currentMonth, setCurrentMonth] = useState(now.getMonth());
    const [currentYear, setCurrentYear] = useState(now.getFullYear());
    const [selectedDay, setSelectedDay] = useState(
        `${now.getFullYear()}-${String(now.getMonth() + 1).padStart(2, "0")}-${String(now.getDate()).padStart(2, "0")}`
    );
    const [selectedSchedule, setSelectedSchedule] = useState<any>(null);
    const [isModalVisible, setIsModalVisible] = useState(false);
    
    const translateY = useSharedValue(1000);
    const opacity = useSharedValue(0);
    
    const { data: oneTimeData } = useOneTimeRequests(patientID || 0, undefined, !!patientID);
    const { data: routineData } = useRoutineRequests(patientID || 0, undefined, !!patientID);

    useEffect(() => {
        const fetchPatientID = async () => {
            const id = await getPatientID();
            setPatientID(parseInt(id || '0'));
        };
        fetchPatientID();
    }, []);

    const formatTo12Hour = (rawTime: string) => {
        const [hoursString, minutesString = '00'] = rawTime.split(':');
        const hours24 = parseInt(hoursString, 10);
        const minutes = parseInt(minutesString, 10);

        const period = hours24 >= 12 ? 'PM' : 'AM';
        const hours12 = hours24 % 12 === 0 ? 12 : hours24 % 12;
        return `${hours12.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')} ${period}`;
    };

    const addOneHour = (rawTime: string) => {
        const [hoursString, minutesString = '00', secondsString = '00'] = rawTime.split(':');
        const date = new Date();
        date.setHours(parseInt(hoursString, 10), parseInt(minutesString, 10), parseInt(secondsString, 10), 0);
        date.setHours(date.getHours() + 1);

        return `${date.getHours().toString().padStart(2, '0')}:${date.getMinutes().toString().padStart(2, '0')}:00`;
    };

    const scheduleList = [...(oneTimeData || []), ...(routineData || [])]
        .filter((item) => item.preferred_date && item.preferred_time)
        .map((item) => {
            const startRaw = item.preferred_time as string;
            const endRaw = addOneHour(startRaw);

            return {
                id: Number(item.request_id),
                date: item.preferred_date as string,
                startTime: formatTo12Hour(startRaw),
                endTime: formatTo12Hour(endRaw),
                activity: item.service_name || 'Service',
            };
        });
    
    const monthNames = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
    ];
    
    const changeMonth = (direction: 'forward' | 'backward') => {
        if (direction === 'forward') {
            if (currentMonth === 11) {
                setCurrentMonth(0);
                setCurrentYear(currentYear + 1);
            } else {
                setCurrentMonth(currentMonth + 1);
            }
        } else {
            if (currentMonth === 0) {
                setCurrentMonth(11);
                setCurrentYear(currentYear - 1);
            } else {
                setCurrentMonth(currentMonth - 1);
            }
        }
    };

    const getDayName = (dateString: string) => {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', { weekday: 'short' }); 
    };

    const getMinutes= (rawTime: string) => {
        const [time, modifier] = rawTime.split(' ');
        let [hour, minutes]= time.split(':').map(Number);
        if(modifier === 'AM' && hour === 12){
            hour = 0
        }   
        if(modifier === 'PM' && hour !== 12){
            hour +=12
        }   
        const totalMinutes = hour * 60 + minutes;
        return totalMinutes; 
    }
    
    const getMonthDays = ()=> {
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        return daysInMonth
    }


    const renderHeader = () => {
    return (
        <View style={[styles.headerContainer, { alignItems: 'center', marginBottom: 10 }]}>
        <Text style={styles.categoryLabel}>Calendar</Text>

        <View style={styles.monthContainer}>
            <Pressable onPress={() => changeMonth('backward')}>
            <Ionicons name="chevron-back" size={22} color="white" />
            </Pressable>

            <Text style={{ fontSize: 15, color: 'white' }}>
            {`${monthNames[currentMonth]} ${currentYear}`}
            </Text>

            <Pressable onPress={() => changeMonth('forward')}>
            <Ionicons name="chevron-forward" size={22} color="white" />
            </Pressable>
        </View>
        </View>
    );
    };



    const renderDayList = () => {
        const monthDays = Array.from({ length: getMonthDays() }, (_, i) => i + 1);

        return (
            <>
            {monthDays.map(day => {
                // for mapping to scheduleList
                const dateString = `${currentYear}-${String(currentMonth + 1).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
                //checks if at least one Schedule exists
                const hasSchedule = scheduleList.some(item => item.date === dateString); 
                
                return (
                <View key={day} style={[styles.card, { paddingHorizontal: 0, height: 80, width: 60, alignItems: "center", justifyContent: 'center', backgroundColor: selectedDay === dateString ? "#4454c3" : "white", }]}>
                    <Pressable onPress={() => setSelectedDay(dateString)} style={{ alignItems: "center", justifyContent: 'center',  padding: 10, borderRadius: 10 }}>
                        <Text style={{color: selectedDay === dateString ? "white" : '#818181', fontSize: 12}}>{getDayName(dateString)}</Text>
                        <Text style={{color: selectedDay === dateString ? "white" : "black", fontWeight: 'bold', fontSize: 20}}>{day}</Text>
                        
                    </Pressable>
                </View>
                );

            })}
            </>
        );
    };
    
    const renderDaySchedule = (date: string) => {
        if (!date) return null;
        const daySchedules = scheduleList.filter(item => item.date === date)
        .sort((sched1, sched2) => getMinutes(sched1.startTime) - getMinutes(sched2.startTime));

        if (daySchedules.length === 0) return null;
        
            return (
                
                <View style={{ flexDirection: 'row', flex: 1 }}>
                    <View style={{ position: 'absolute', left: 0, right: 0, top: 0, bottom: 0, zIndex: 0 }}>
                        {Array.from({ length: 24 }, (_, i) => (
                        <View key={i} style={{ position: 'absolute', top: i * 60, left: 0, right: 0, height: 1, backgroundColor: '#e2e2e2' }} />
                        ))}
                    </View>
                    <View style={{ width: 60 }}>
                        {Array.from({ length: 24 }, (_, i) => (
                        <Text key={i} style={{ height: 60, textAlign: 'left', fontSize: 11, color: '#818181'  }}>
                            {i>12 ?  (i-12).toString().padStart(2, '0') : i.toString().padStart(2, '0')}:00 {i < 12 ? 'AM' : 'PM'}
                        </Text>
                        ))}
                    </View>
                    <View style={{ flex: 1, position: 'relative' }}>
                        {daySchedules.map(item => {
                        const startMinutes = getMinutes(item.startTime);
                        const endMinutes = getMinutes(item.endTime);
                        const height = (endMinutes - startMinutes) * 1;
                            
                        return (
                            <Pressable key={item.id} onPress={() => openScheduleDetails(item)}>
                                <View style={[styles.card, {borderLeftWidth: 8, borderColor: '#4454c3', justifyContent: 'center', position: 'absolute', top: startMinutes * 1, left: 0, right: 0, height}]}>
                                    <Text style={{ color: 'black', fontWeight: 'bold', fontSize: 11 }}>{item.activity}</Text>
                                    {height >= 31 && <Text style={{ color: 'black', fontSize: 11 }}>
                                        {item.startTime} - {item.endTime}
                                    </Text>}
                                </View>
                            </Pressable>
                        );
                        })}
                    </View>
                </View>
            );
        
    };

            const hasSchedulesForSelectedDay = scheduleList.some(item => item.date === selectedDay);

    const openScheduleDetails = (schedule: any) => {
        setSelectedSchedule(schedule);
        setIsModalVisible(true);
        translateY.value = withSpring(0, { damping: 20, stiffness: 90 });
        opacity.value = withTiming(1, { duration: 300 });
    };

    const closeScheduleDetails = () => {
        translateY.value = withTiming(1000, { duration: 300 });
        opacity.value = withTiming(0, { duration: 300 });
        setTimeout(() => {
            setIsModalVisible(false);
            setSelectedSchedule(null);
        }, 300);
    };

    const renderScheduleDetails = () => {
        if (!selectedSchedule) return null;

        const animatedModalStyle = useAnimatedStyle(() => ({
            transform: [{ translateY: translateY.value }],
        }));

        const animatedBackdropStyle = useAnimatedStyle(() => ({
            opacity: opacity.value,
        }));

        return (
            <Modal
                visible={isModalVisible}
                transparent
                animationType="none"
                onRequestClose={closeScheduleDetails}
            >
                <View style={styles.modalContainer}>
                    <Animated.View style={[styles.backdrop, animatedBackdropStyle]}>
                        <Pressable style={{ flex: 1 }} onPress={closeScheduleDetails} />
                    </Animated.View>
                    
                    <Animated.View style={[styles.modalContent, animatedModalStyle]}>
                        <View style={styles.modalHeader}>
                            <Text style={styles.modalTitle}>Schedule Details</Text>
                            <Pressable onPress={closeScheduleDetails}>
                                <Ionicons name="close" size={28} color="#4454c3" />
                            </Pressable>
                        </View>

                        <View style={styles.detailRow}>
                            <Ionicons name="calendar-outline" size={24} color="#4454c3" />
                            <View style={{ marginLeft: 15 }}>
                                <Text style={styles.detailLabel}>Date</Text>
                                <Text style={styles.detailValue}>
                                    {new Date(selectedSchedule.date).toLocaleDateString('en-US', { 
                                        weekday: 'long', 
                                        year: 'numeric', 
                                        month: 'long', 
                                        day: 'numeric' 
                                    })}
                                </Text>
                            </View>
                        </View>

                        <View style={styles.detailRow}>
                            <Ionicons name="time-outline" size={24} color="#4454c3" />
                            <View style={{ marginLeft: 15 }}>
                                <Text style={styles.detailLabel}>Time</Text>
                                <Text style={styles.detailValue}>
                                    {selectedSchedule.startTime} - {selectedSchedule.endTime}
                                </Text>
                            </View>
                        </View>

                        <View style={styles.detailRow}>
                            <Ionicons name="clipboard-outline" size={24} color="#4454c3" />
                            <View style={{ marginLeft: 15 }}>
                                <Text style={styles.detailLabel}>Activity</Text>
                                <Text style={styles.detailValue}>{selectedSchedule.activity}</Text>
                            </View>
                        </View>

                        <Pressable style={styles.closeButton} onPress={closeScheduleDetails}>
                            <Text style={styles.closeButtonText}>Close</Text>
                        </Pressable>
                    </Animated.View>
                </View>
            </Modal>
        );
    };

return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa',
    }} edges={['top']}>

    {renderHeader()}    
    {/* not map */}
    <ScrollView horizontal showsHorizontalScrollIndicator={false} 
    contentContainerStyle={{flexDirection: 'row' ,justifyContent: 'space-between', marginBottom: 40,  marginHorizontal: 15}}>
        {renderDayList()}
    </ScrollView>
        

        {hasSchedulesForSelectedDay ? (
            <ScrollView contentContainerStyle= {[styles.card, {marginTop: 10, paddingTop: 10,  marginHorizontal: 15 }]} style={{paddingTop: 20}}>
                    {renderDaySchedule(selectedDay)}
            </ScrollView>
        ) : (
            <View style={{ flex: 1, alignItems: 'center', justifyContent: 'flex-start' }}>
                <Ionicons name="happy-outline" size={40} color="#818181" />
                <Text style={{ marginTop: 8, color: '#818181', fontSize: 14, textAlign: 'center' }}>No appointments today</Text>
            </View>
        )}

    {renderScheduleDetails()}

  </SafeAreaView>;
}


const styles = StyleSheet.create({
    headerContainer: {
        borderBottomLeftRadius: 20,
        borderBottomRightRadius: 20,
        paddingVertical: 15,
        backgroundColor: '#4454c3',
    },
  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    paddingHorizontal: 10,
    marginHorizontal:5,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 3,
  },
  header:{
    height: 60, 
    alignItems: 'center',  
    flexDirection: 'row',
    marginVertical:10,
    gap: 10
  },
  monthContainer: {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-between', 
    paddingHorizontal: 10,
    marginVertical: 10,
    gap: 15
  },
  categoryLabel:{
    color: 'white', 
    fontSize: 30, 
    
    margin:10,
    fontWeight: 'bold'
  },
  modalContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  backdrop: {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    backgroundColor: 'rgba(0, 0, 0, 0.5)',
  },
  modalContent: {
    backgroundColor: 'white',
    borderRadius: 20,
    padding: 20,
    width: '90%',
    maxWidth: 400,
    shadowColor: '#000',
    shadowOpacity: 0.25,
    shadowOffset: { width: 0, height: 4 },
    shadowRadius: 8,
    elevation: 5,
  },
  modalHeader: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    marginBottom: 20,
    paddingBottom: 15,
    borderBottomWidth: 1,
    borderBottomColor: '#e2e2e2',
  },
  modalTitle: {
    fontSize: 22,
    fontWeight: 'bold',
    color: '#4454c3',
  },
  detailRow: {
    flexDirection: 'row',
    alignItems: 'flex-start',
    marginVertical: 15,
    paddingVertical: 10,
  },
  detailLabel: {
    fontSize: 12,
    color: '#818181',
    marginBottom: 5,
  },
  detailValue: {
    fontSize: 16,
    color: '#000',
    fontWeight: '600',
  },
  closeButton: {
    backgroundColor: '#4454c3',
    borderRadius: 10,
    padding: 15,
    alignItems: 'center',
    marginTop: 20,
  },
  closeButtonText: {
    color: 'white',
    fontSize: 16,
    fontWeight: 'bold',
  },
});
