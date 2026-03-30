import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { getNotifications, markAsRead, deleteNotification } from '../services/Notification_Service';


export const useNotifications =(enabled: boolean = true) => {
    return useQuery({
        queryKey: ["notifications"],
        queryFn: getNotifications,
        staleTime: 5 * 60 * 1000,
        enabled: enabled
    });
};

export const useMarkAsReadMutation = () => {
    const queryClient = useQueryClient();

    return useMutation({
        mutationFn: (notification_id: string | number) => markAsRead(notification_id),
        onSuccess: () => {
            queryClient.invalidateQueries({ queryKey: ["notifications"] });
        }
    });
};

export const useDeleteNotificationMutation = () => {
    const queryClient = useQueryClient();

    return useMutation({
        mutationFn: (notification_id: string | number) => deleteNotification(notification_id),
        onSuccess: () => {
            queryClient.invalidateQueries({ queryKey: ["notifications"] });
        }
    });
};