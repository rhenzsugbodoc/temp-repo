// src/services/api.ts
import axios from 'axios';
import { getToken, removeToken } from '../options/tokenHandler';
import {useRouter} from 'expo-router';

const router = useRouter();
// const BASE_URL = 'http://54.221.189.210/'; //direct IP for mobile devices
const BASE_URL = 'http://192.168.254.149/temp-repo/'; //direct IP for mobile devices
const api = axios.create({
  baseURL: BASE_URL,
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
  },
  timeout: 10000, // 10 seconds
});


api.interceptors.request.use(
  async (config) => {
    try {
      const token = await getToken();
      if (token) {
        config.headers.Authorization = `Bearer ${token}`;
      }
    } catch (error) {
      console.error('Error getting token:', error);
    }
    return config;
  },
  (error) => {
    return Promise.reject(error);
  }
);


api.interceptors.response.use(
  (response) => response,
  async (error) => {
    if (error.response?.status === 401) {
      await removeToken();
      router.replace('/login');
    }
    return Promise.reject(error);
  }
);

export default api;