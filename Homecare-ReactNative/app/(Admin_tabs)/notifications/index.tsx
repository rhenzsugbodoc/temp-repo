import React, { useState, useMemo } from 'react';
import { View, Pressable, StyleSheet, Text, FlatList, RefreshControl, Animated, PanResponder, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';
import { useNotifications, useMarkAsReadMutation, useDeleteNotificationMutation } from '@/src/options/Notifications_QueryOptions';
import { notificationDetails } from '@/src/services/Notification_Service';
import { patientDetailStyles } from '@/assets/styles/admin/patient_worklist/patientWorklistStyles';

type NotificationFilter = 'All' | 'Unread' | 'Read';
type SectionedNotificationRow =
    | { type: 'header'; title: 'This Week' | 'Last Week' | 'Older'; key: string }
    | { type: 'notification'; notification: notificationDetails; key: string };

const ACTION_WIDTH = 72;
const FULL_SWIPE_THRESHOLD = 120;
const { width: screenWidth } = Dimensions.get('window');

const getNotificationIcon = (type: string): keyof typeof Ionicons.glyphMap => {
    switch(type) {
        case 'Medication': return 'medical';
        case 'Appointment': return 'calendar';
        case 'Service': return 'construct';
        case 'Billing': return 'card';
        case 'General': return 'notifications';
        default: return 'information-circle';
    }
};

const formatShortDate = (dateString: string) => {
    const date = new Date(dateString);
    if (Number.isNaN(date.getTime())) {
        return dateString;
    }
    return `${date.getMonth() + 1}/${date.getDate()}`;
};

export default function Notifications() {
    const [selectedFilter, setSelectedFilter] = useState<NotificationFilter>('All');
    const [locallyDeletedIds, setLocallyDeletedIds] = useState<Set<string>>(new Set());
    const {data: notificationList, isFetching, refetch} = useNotifications();
    const markAsReadMutation = useMarkAsReadMutation();
    const deleteNotificationMutation = useDeleteNotificationMutation();
    const translateXMap = React.useRef<Record<string, Animated.Value>>({}).current;

    const getNotificationId = (notification: notificationDetails) => String(notification.notification_id);
    const getTranslateX = (notificationId: string) => {
        if (!translateXMap[notificationId]) {
            translateXMap[notificationId] = new Animated.Value(0);
        }
        return translateXMap[notificationId];
    };

    const filteredNotifications = useMemo(() => {
        const notifications = notificationList || [];
        if (selectedFilter === 'Unread') {
            return notifications.filter((notification) => Number(notification.is_read) === 0);
        }
        if (selectedFilter === 'Read') {
            return notifications.filter((notification) => Number(notification.is_read) === 1);
        }
        return notifications;
    }, [notificationList, selectedFilter]);

    const visibleNotifications = useMemo(() => {
        return filteredNotifications.filter((notification) => !locallyDeletedIds.has(getNotificationId(notification)));
    }, [filteredNotifications, locallyDeletedIds]);

    const getWeekBoundary = () => {
        const now = new Date();
        const startOfToday = new Date(now.getFullYear(), now.getMonth(), now.getDate());
        const dayOfWeek = (startOfToday.getDay() + 6) % 7;
        const startOfThisWeek = new Date(startOfToday);
        startOfThisWeek.setDate(startOfToday.getDate() - dayOfWeek);
        const startOfLastWeek = new Date(startOfThisWeek);
        startOfLastWeek.setDate(startOfThisWeek.getDate() - 7);

        return { startOfThisWeek, startOfLastWeek };
    };

    const sectionedData = useMemo(() => {
        const { startOfThisWeek, startOfLastWeek } = getWeekBoundary();

        const thisWeek: notificationDetails[] = [];
        const lastWeek: notificationDetails[] = [];
        const older: notificationDetails[] = [];

        visibleNotifications.forEach((notification) => {
            const createdAt = new Date(notification.created_at);
            if (createdAt >= startOfThisWeek) {
                thisWeek.push(notification);
            } else if (createdAt >= startOfLastWeek) {
                lastWeek.push(notification);
            } else {
                older.push(notification);
            }
        });

        const rows: SectionedNotificationRow[] = [];
        const appendSection = (title: 'This Week' | 'Last Week' | 'Older', notifications: notificationDetails[]) => {
            if (!notifications.length) return;
            rows.push({ type: 'header', title, key: `header-${title}` });
            notifications.forEach((notification) => {
                rows.push({
                    type: 'notification',
                    notification,
                    key: `notification-${notification.notification_id}`,
                });
            });
        };

        appendSection('This Week', thisWeek);
        appendSection('Last Week', lastWeek);
        appendSection('Older', older);

        return rows;
    }, [visibleNotifications]);

    const handlePressNotification = (notification: notificationDetails) => {
        if (Number(notification.is_read) === 0) {
            markAsReadMutation.mutate(notification.notification_id);
        }
    };

    const handleDeleteNotification = (notification: notificationDetails) => {
        const notificationId = getNotificationId(notification);
        setLocallyDeletedIds((prev) => new Set(prev).add(notificationId));

        deleteNotificationMutation.mutate(notification.notification_id, {
            onError: () => {
                setLocallyDeletedIds((prev) => {
                    const next = new Set(prev);
                    next.delete(notificationId);
                    return next;
                });
            },
        });
    };

    const animateAndDelete = (notification: notificationDetails) => {
        const notificationId = getNotificationId(notification);
        const translateX = getTranslateX(notificationId);

        Animated.timing(translateX, {
            toValue: -screenWidth,
            duration: 220,
            useNativeDriver: true,
        }).start(() => {
            handleDeleteNotification(notification);
            translateX.setValue(0);
        });
    };

    const renderNotification = ({ item }: { item: SectionedNotificationRow }) => {
        if (item.type === 'header') {
            return <Text style={styles.sectionHeader}>{item.title}</Text>;
        }

        const notification = item.notification;
        const notificationId = getNotificationId(notification);
        const translateX = getTranslateX(notificationId);
        const isRead = Number(notification.is_read) === 1;

        const panResponder = PanResponder.create({
            onMoveShouldSetPanResponder: (_, gestureState) => selectedFilter === 'Read' && Math.abs(gestureState.dx) > 8,
            onPanResponderMove: (_, gestureState) => {
                if (selectedFilter !== 'Read') return;
                const dragX = Math.min(0, gestureState.dx);
                translateX.setValue(dragX);
            },
            onPanResponderRelease: (_, gestureState) => {
                if (selectedFilter !== 'Read') return;

                if (gestureState.dx <= -FULL_SWIPE_THRESHOLD) {
                    animateAndDelete(notification);
                    return;
                }

                const shouldOpen = gestureState.dx <= -ACTION_WIDTH / 2;
                Animated.spring(translateX, {
                    toValue: shouldOpen ? -ACTION_WIDTH : 0,
                    useNativeDriver: true,
                    friction: 8,
                }).start();
            },
            onPanResponderTerminate: () => {
                Animated.spring(translateX, {
                    toValue: 0,
                    useNativeDriver: true,
                    friction: 8,
                }).start();
            },
        });

        return (
            <View style={styles.swipeRowContainer}>
                {selectedFilter === 'Read' && (
                    <View style={styles.deleteRevealArea}>
                        <Pressable style={styles.deleteRevealPressable} onPress={() => animateAndDelete(notification)}>
                            <Ionicons name="trash" size={18} color="white" />
                        </Pressable>
                    </View>
                )}

                <Animated.View
                    style={[styles.notificationRow, { transform: [{ translateX }] }]}
                    {...(selectedFilter === 'Read' ? panResponder.panHandlers : {})}
                >
                    <Pressable style={styles.notificationPressable} onPress={() => handlePressNotification(notification)}>
                        <Ionicons 
                            name={getNotificationIcon(notification.notification_type)} 
                            size={24} 
                            color={isRead ? '#888' : '#4454c3'} 
                            style={styles.icon}
                        />
                        <View style={styles.messageRow}>
                            <Text style={[styles.message, isRead && styles.readMessage]} numberOfLines={2}>
                                {notification.message}
                            </Text>
                            <View style={styles.metaRow}>
                                <Text style={[styles.timestamp, isRead && styles.readTimestamp]}>
                                    {formatShortDate(notification.created_at)}
                                </Text>
                            </View>
                        </View>
                    </Pressable>
                </Animated.View>
            </View>
        );
    };

    return(
        <SafeAreaView style={styles.container}>
            <View style={styles.headerBar}>
                <Text style={styles.headerTitle}>Notifications</Text>
            </View>

            <View style={[styles.selectorCard, {borderRadius: 0}]}> 
                <View style={patientDetailStyles.scheduleTypeContainer}>
                    {(['All', 'Unread', 'Read'] as NotificationFilter[]).map((filterType) => {
                        const isSelected = selectedFilter === filterType;

                        return (
                            <Pressable
                                key={filterType}
                                onPress={() => setSelectedFilter(filterType)}
                                style={[
                                    patientDetailStyles.scheduleTypeButton,
                                    {
                                        backgroundColor: isSelected ? '#4454c3' : 'transparent',
                                        borderRadius: 20,
                                        borderBottomWidth: 0,
                                    },
                                ]}
                            >
                                <Text style={{ textAlign: 'center', color: isSelected ? 'white' : 'black' }}>{filterType}</Text>
                            </Pressable>
                        );
                    })}
                </View>
            </View>

            <FlatList
                data={sectionedData}
                renderItem={renderNotification}
                keyExtractor={(item) => item.key}
                contentContainerStyle={styles.listContainer}
                refreshControl={
                    <RefreshControl
                        refreshing={isFetching}
                        onRefresh={refetch}
                        colors={['#4454c3']}
                        tintColor="#4454c3"
                    />
                }
            />
        </SafeAreaView>
    )
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#f4f7fa',
    },
    headerBar: {
        height: 90,
        backgroundColor: '#4454c3',
        justifyContent: 'center',
        paddingHorizontal: 30,
    },
    headerTitle: {
        color: 'white',
        fontFamily: 'poppins',
        fontSize: 25,
    },
    selectorCard: {
        paddingHorizontal: 10,
        paddingVertical: 10,
        alignItems: 'flex-start',
        justifyContent: 'center',
        borderRadius: 8,
        backgroundColor: 'white',
        marginVertical: 5,
        shadowColor: '#000',
        shadowOpacity: 0.05,
        shadowOffset: { width: 0, height: 2 },
        shadowRadius: 4,
        elevation: 1,
    },
    listContainer: {
        paddingVertical: 8,
    },
    sectionHeader: {
        fontSize: 14,
        color: '#6b7280',
        fontWeight: '600',
        paddingHorizontal: 20,
        paddingTop: 12,
        paddingBottom: 6,
    },
    notificationRow: {
        backgroundColor: '#f4f7fa',
        paddingVertical: 0,
        paddingHorizontal: 20,
        borderBottomWidth: 1,
        borderBottomColor: '#e0e0e0',
    },
    swipeRowContainer: {
        position: 'relative',
        overflow: 'hidden',
    },
    deleteRevealArea: {
        position: 'absolute',
        right: 0,
        top: 0,
        bottom: 0,
        width: ACTION_WIDTH,
        backgroundColor: '#dc2626',
    },
    deleteRevealPressable: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
    },
    notificationPressable: {
        flexDirection: 'row',
        alignItems: 'center',
        paddingVertical: 15,
    },
    icon: {
        marginRight: 15,
    },
    messageRow: {
        flex: 1,
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
        gap: 10,
    },
    message: {
        flex: 1,
        fontSize: 15,
        color: '#000',
        fontWeight: '500',
    },
    readMessage: {
        color: '#888',
        fontWeight: '400',
    },
    timestamp: {
        fontSize: 11,
        color: '#4454c3',
    },
    readTimestamp: {
        color: '#888',
    },
    metaRow: {
        flexDirection: 'row',
        alignItems: 'center',
        gap: 8,
    },
});