import React, { useState } from 'react';
import { View, ScrollView, Image, Pressable, StyleSheet, Text, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';

export default function DayCalendar() {
    const [selectedDay, setSelectedDay] = useState('')
    const scheduleList = [
    { id: 1, date: '2025-11-20', startTime: '09:00 AM', endTime: '10:40 AM', activity: 'Doctor Appointment' },
    { id: 2, date: '2025-11-20', startTime: '11:00 AM', endTime: '11:30 AM', activity: 'Blood Pressure Check' },
    { id: 3, date: '2025-11-20', startTime: '03:00 PM', endTime: '03:15 PM', activity: 'Medication Reminder' },
    { id: 4, date: '2025-11-21', startTime: '10:30 AM', endTime: '12:00 PM', activity: 'Nurse Follow-up Visit' },
    { id: 5, date: '2025-11-21', startTime: '01:00 PM', endTime: '02:00 PM', activity: 'Physical Therapy Session' },
    { id: 6, date: '2025-11-22', startTime: '08:00 AM', endTime: '08:30 AM', activity: 'Morning Vital Signs Check' },
    { id: 7, date: '2025-11-22', startTime: '02:00 PM', endTime: '02:30 PM', activity: 'Wound Care Assessment' }
    ];
    const getDayName = (dateString: string) => {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', { weekday: 'short' }); 
    };
    const getMonthDays = ()=> {
        const now = new Date();
        const year = now.getFullYear();
        const month = now.getMonth();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        return daysInMonth
    }
    const weekDayList = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    const renderDayList = () => {
        const now = new Date();
        const year = now.getFullYear();
        const month = now.getMonth();

        const monthDays = Array.from({ length: getMonthDays() }, (_, i) => i + 1);
       
        return (
            <>
            {monthDays.map(day => {
                // for mapping to scheduleList
                const dateString = `${year}-${String(month + 1).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
                //checks if at least one Schedule exists
                const hasSchedule = scheduleList.some(item => item.date === dateString); 
                return (
                <View key={day} style={[styles.card, { width: '14.28%', alignItems: "center" }]}>
                    <Pressable onPress={() => setSelectedDay(dateString)} style={{ alignItems: "center", backgroundColor: selectedDay === dateString ? "#7251f5" : "transparent", padding: 10, borderRadius: 10 }}>
                        <View style= {{flexDirection: 'row',}}></View>
                        <Text>{getDayName(dateString)}</Text>
                        <Text>{day}</Text>
                        <Text>{month}</Text>
                    </Pressable>
                </View>
                );

            })}
            </>
        );
    };
    return <SafeAreaView style={{
    flex: 1,
    backgroundColor: '#f5f7fa',
    paddingHorizontal: 15
    }} edges={['top']}>

    <Text style={styles.categoryLabel}>
        This Month's Schedule</Text>
    
    <ScrollView>
        <View style= {{flexDirection: 'row', justifyContent: 'space-evenly', flexWrap: 'wrap'}}>
            {renderDayList()}
        </View>
    </ScrollView>
        
    </SafeAreaView>;
}


const styles = StyleSheet.create({

    card: {
    backgroundColor: 'white',
    borderRadius: 10,
    padding: 10,
    marginHorizontal:15,
    paddingVertical: 15,
    },
    header:{
    height: 60, 
    alignItems: 'center',  
    flexDirection: 'row',
    marginVertical:10,
    gap: 10
    },
    categoryLabel:{
    color: '#434e79', 
    fontSize: 20, 
    margin:10,
    fontWeight: 'bold'
    },
});

