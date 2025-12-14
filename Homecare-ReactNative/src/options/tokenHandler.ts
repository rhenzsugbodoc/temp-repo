import AsyncStorage from '@react-native-async-storage/async-storage';

export async function saveToken(token: string) {
  await AsyncStorage.setItem('auth_token', token);
}

export async function getToken(): Promise<string | null> {
  return await AsyncStorage.getItem('auth_token');
}

export async function removeToken() {
  await AsyncStorage.removeItem('auth_token');
}

export async function saveUserData(userData: any) {
  await AsyncStorage.setItem('user_data', JSON.stringify(userData));
}

export async function getUserData<T = any>(): Promise<T | null> {
  const userData = await AsyncStorage.getItem('user_data');
  return userData ? JSON.parse(userData) : null;
}

export async function removeUserData() {
  await AsyncStorage.removeItem('user_data');
  await AsyncStorage.removeItem('auth_token');
}

export async function getPatientID( ): Promise<string | null> {
  return await AsyncStorage.getItem('patientID');
}

export async function clearAuth() {
  await removeToken();
  await removeUserData();
}
