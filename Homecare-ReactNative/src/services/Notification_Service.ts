import api from './api';

export interface notificationDetails {
    notification_id: string | number ,
    user_id: string | number,
    notification_type: string ,
    title: string,
    message: string,
    is_read: number,
    created_at: string,
    updated_at: string
}
export const getNotifications = async(): Promise<notificationDetails[]> => {
    try{
        const res = await api.get('/api/notifications');
        return res?.data.data || []
    }
    catch (error: any) {
      console.error('Getting notifications error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to retrieve user notifications' };
    }
};

export const markAsRead = async(id: string | number) => {
    try{
        const res = await api.put(`/api/notifications/${id}/mark-read`);
        return res?.data.data
    }
    catch (error: any) {
      console.error('Marking as read error:', error.response?.data || error.message);
      throw error.response?.data || { success: false, message: 'Failed to mark notifications as read' };
    }
};

export const deleteNotification = async(id: string | number) => {
        try{
                const res = await api.delete(`/api/notifications/${id}`);
                return res?.data.data;
        }
        catch (error: any) {
            console.error('Deleting notification error:', error.response?.data || error.message);
            throw error.response?.data || { success: false, message: 'Failed to delete notification' };
        }
};