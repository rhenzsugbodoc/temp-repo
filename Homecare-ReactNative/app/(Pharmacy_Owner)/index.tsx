import React, { useState, useRef } from 'react';
import { View, Animated, ScrollView, Pressable, StyleSheet, Text, ActivityIndicator, TextInput, TouchableWithoutFeedback, Dimensions } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useGetMedicines, useGetInventory, useUpdateInventoryMutation, useCreateInventoryMutation } from '@/src/options/PrescriptionQueryOptions';
import { useLogoutMutation } from '@/src/options/authenticationQueryOptions';
import { useRouter } from 'expo-router';
import Ionicons from '@expo/vector-icons/build/Ionicons';
const { height } = Dimensions.get('window');

export default function PharmacyDashboard() {
  const { data: medicinesData, isLoading: medicinesLoading } = useGetMedicines();
  const { data: inventoryData, isLoading: inventoryLoading } = useGetInventory();
  const [createInventoryVisible, setCreateInventoryVisible] = useState<boolean>(false);
  const [updateInventoryVisible, setUpdateInventoryVisible] = useState<boolean>(false);
  const createInventoryMutation = useCreateInventoryMutation();
  const updateInventoryMutation = useUpdateInventoryMutation();
  const scaleAnim = useRef(new Animated.Value(0.8)).current;
  const logoutMutation = useLogoutMutation();
  const router = useRouter();
  
  const handleLogout = async () => {
    try {
      await logoutMutation.mutateAsync();
      router.replace('/login');
    } catch (error) {
      console.error('Logout failed:', error);
      // Still navigate to login even if API call fails
      router.replace('/login');
    }
  };

  const [selectedMedicineId, setSelectedMedicineId] = useState<string>('');
  const [formData, setFormData] = useState({
    stock_quantity: '',
    price: '',
    low_inventory: '',
  });

  const openPopup = (type: 'create' | 'update', medicineId: string = '') => {
    setSelectedMedicineId(medicineId);
    setFormData({ stock_quantity: '', price: '', low_inventory: '' });

    if (type === 'create') {
      setCreateInventoryVisible(true);
    } else {
      setUpdateInventoryVisible(true);

      const existingItem = inventoryData?.data?.find(
        item => item.medicine_id === medicineId
      );

      if (existingItem) {
        setFormData({
          stock_quantity: existingItem.stock_quantity ?? '',
          price: existingItem.price ?? '',
          low_inventory: existingItem.low_inventory ?? '',
        });
      }
    }

    
    scaleAnim.setValue(0.9); 
    Animated.spring(scaleAnim, {
      toValue: 1,
      friction: 5,
      useNativeDriver: true,
    }).start();
  };


  const closePopup = () => {
    Animated.spring(scaleAnim, {
      toValue: 0.8,
      friction: 5,
      useNativeDriver: true,
    }).start(() => {
      setCreateInventoryVisible(false);
      setUpdateInventoryVisible(false);
      setSelectedMedicineId('');
      setFormData({ stock_quantity: '', price: '', low_inventory: '' });
    });
  };

  const handleCreateInventory = async () => {
    try {
      await createInventoryMutation.mutateAsync({
        medicine_id: selectedMedicineId,
        stock_quantity: formData.stock_quantity,
        low_inventory: formData.low_inventory,
        price: formData.price,
      });
      closePopup();
    } catch (error) {
      console.error('Failed to create inventory:', error);
    }
  };

  const handleUpdateInventory = async () => {
    try {
      await updateInventoryMutation.mutateAsync({
        medicineId: selectedMedicineId,
        updateData: {
          stock_quantity: formData.stock_quantity,
          low_inventory: formData.low_inventory,
          price: formData.price,
        },
      });
      closePopup();
    } catch (error) {
      console.error('Failed to update inventory:', error);
    }
  };

  return (
    <SafeAreaView style={styles.container} edges={['top']}>
      <ScrollView>
      <View style={{justifyContent: 'flex-end', alignItems: 'flex-end', padding: 10}}>
        <Pressable style={styles.iconCircle} onPress={handleLogout}>
          <Ionicons name="log-out-outline" size={24} color="#4454c3" />
        </Pressable>
      </View>
        {medicinesLoading ? (
          <ActivityIndicator size="large" color="#007AFF" style={{ marginTop: 20 }} />
        ) : (
          medicinesData?.data?.map((medicine) => {
            const existsInInventory = inventoryData?.data?.some(
              (item) => item.medicine_id === medicine.medicine_id
            );

            return (
              <View key={medicine.medicine_id} style={styles.card}>
                <Text style={{ fontSize: 16, fontWeight: 'bold' }}>{medicine.name}</Text>
                <Text style={{ marginTop: 5 }}>Description: {medicine.description}</Text>
                <Text style={{ marginTop: 5 }}>Type: {medicine.medication_type}</Text>

                {existsInInventory ? (
                  <Pressable
                    style={styles.button}
                    onPress={() => openPopup('update', medicine.medicine_id)}
                    disabled={updateInventoryMutation.isPending}
                  >
                    <Text style={styles.buttonText}>
                      {updateInventoryMutation.isPending ? 'Updating...' : 'Update Inventory Details'}
                    </Text>
                  </Pressable>
                ) : (
                  <Pressable
                    style={[styles.button, styles.createButton]}
                    onPress={() => openPopup('create', medicine.medicine_id)}
                    disabled={createInventoryMutation.isPending}
                  >
                    <Text style={styles.buttonText}>
                      {createInventoryMutation.isPending ? 'Creating...' : 'Create Inventory Item'}
                    </Text>
                  </Pressable>
                )}
              </View>
            );
          })
        )}
      </ScrollView>

      {/* Create Inventory Popup */}
      {createInventoryVisible && (
        <TouchableWithoutFeedback onPress={closePopup}>
          <View style={styles.overlay}>
            <TouchableWithoutFeedback>
              <Animated.View style={[styles.popup, { transform: [{ scale: scaleAnim }] }]}>
                <Text style={styles.popupTitle}>Create Inventory Item</Text>

                <Text style={styles.label}>Stock Quantity</Text>
                <TextInput
                  style={styles.input}
                  placeholder="Enter stock quantity"
                  keyboardType="numeric"
                  value={formData.stock_quantity}
                  onChangeText={(text) => setFormData({ ...formData, stock_quantity: text })}
                />

                <Text style={styles.label}>Price</Text>
                <TextInput
                  style={styles.input}
                  placeholder="Enter price"
                  keyboardType="numeric"
                  value={formData.price}
                  onChangeText={(text) => setFormData({ ...formData, price: text })}
                />

                <Text style={styles.label}>Low Inventory Threshold (Optional)</Text>
                <TextInput
                  style={styles.input}
                  placeholder="Enter low inventory threshold"
                  keyboardType="numeric"
                  value={formData.low_inventory}
                  onChangeText={(text) => setFormData({ ...formData, low_inventory: text })}
                />

                <View style={styles.popupButtons}>
                  <Pressable style={[styles.popupButton, styles.cancelButton]} onPress={closePopup}>
                    <Text style={styles.popupButtonText}>Cancel</Text>
                  </Pressable>
                  <Pressable
                    style={[styles.popupButton, styles.submitButton]}
                    onPress={handleCreateInventory}
                    disabled={createInventoryMutation.isPending}
                  >
                    <Text style={styles.popupButtonText}>
                      {createInventoryMutation.isPending ? 'Creating...' : 'Create'}
                    </Text>
                  </Pressable>
                </View>
              </Animated.View>
            </TouchableWithoutFeedback>
          </View>
        </TouchableWithoutFeedback>
      )}

      {/* Update Inventory Popup */}
      {updateInventoryVisible && (
        <TouchableWithoutFeedback onPress={closePopup}>
          <View style={styles.overlay}>
            <TouchableWithoutFeedback>
              <Animated.View style={[styles.popup, { transform: [{ scale: scaleAnim }] }]}>
                <Text style={styles.popupTitle}>Update Inventory Item</Text>

                <Text style={styles.label}>Stock Quantity</Text>
                <TextInput
                  style={styles.input}
                  placeholder="Enter stock quantity"
                  keyboardType="numeric"
                  value={formData.stock_quantity}
                  onChangeText={(text) => setFormData({ ...formData, stock_quantity: text })}
                />

                <Text style={styles.label}>Price</Text>
                <TextInput
                  style={styles.input}
                  placeholder="Enter price"
                  keyboardType="numeric"
                  value={formData.price}
                  onChangeText={(text) => setFormData({ ...formData, price: text })}
                />

                <Text style={styles.label}>Low Inventory Threshold (Optional)</Text>
                <TextInput
                  style={styles.input}
                  placeholder="Enter low inventory threshold"
                  keyboardType="numeric"
                  value={formData.low_inventory}
                  onChangeText={(text) => setFormData({ ...formData, low_inventory: text })}
                />

                <View style={styles.popupButtons}>
                  <Pressable style={[styles.popupButton, styles.cancelButton]} onPress={closePopup}>
                    <Text style={styles.popupButtonText}>Cancel</Text>
                  </Pressable>
                  <Pressable
                    style={[styles.popupButton, styles.submitButton]}
                    onPress={handleUpdateInventory}
                    disabled={updateInventoryMutation.isPending}
                  >
                    <Text style={styles.popupButtonText}>
                      {updateInventoryMutation.isPending ? 'Updating...' : 'Update'}
                    </Text>
                  </Pressable>
                </View>
              </Animated.View>
            </TouchableWithoutFeedback>
          </View>
        </TouchableWithoutFeedback>
      )}
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f5f7fa',
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
  button: {
    backgroundColor: '#007AFF',
    borderRadius: 8,
    padding: 12,
    marginTop: 15,
    alignItems: 'center',
  },
  createButton: {
    backgroundColor: '#6366f1',
  },
  buttonText: {
    color: 'white',
    fontSize: 14,
    fontWeight: '600',
  },
  overlay: {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    backgroundColor: 'rgba(0, 0, 0, 0.5)',
    justifyContent: 'center',
    alignItems: 'center',
  },
  popup: {
    backgroundColor: 'white',
    borderRadius: 20,
    padding: 20,
    width: '90%',
    maxWidth: 400,
    shadowColor: '#000',
    shadowOpacity: 0.25,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 10,
    elevation: 5,
  },
  popupTitle: {
    fontSize: 20,
    fontWeight: 'bold',
    marginBottom: 20,
    textAlign: 'center',
  },
  label: {
    fontSize: 14,
    fontWeight: '600',
    marginTop: 10,
    marginBottom: 5,
    color: '#333',
  },
  input: {
    borderWidth: 1,
    borderColor: '#ddd',
    borderRadius: 8,
    padding: 12,
    fontSize: 16,
    backgroundColor: '#f9f9f9',
  },
  popupButtons: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginTop: 20,
    gap: 10,
  },
  popupButton: {
    flex: 1,
    padding: 12,
    borderRadius: 8,
    alignItems: 'center',
  },
  cancelButton: {
    backgroundColor: '#FF3B30',
  },
  submitButton: {
    backgroundColor: '#34C759',
  },
  popupButtonText: {
    color: 'white',
    fontSize: 16,
    fontWeight: '600',
  },
  iconCircle: {
    padding: 5,
    borderRadius: 25,
  },
});