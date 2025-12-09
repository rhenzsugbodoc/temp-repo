import * as SecureStore from "expo-secure-store";

export async function saveToken(token: string) {
  await SecureStore.setItemAsync("jwt_token", token);
}

export async function getToken(): Promise<string | null> {
  return await SecureStore.getItemAsync("jwt_token");
}

export async function removeToken() {
  await SecureStore.deleteItemAsync("jwt_token");
}
