import { Stack } from "expo-router";

export default function RequestLayout() {
  return (
    <Stack>
      <Stack.Screen name="index" options={{ title: "Services" , headerStyle: { backgroundColor: "blue" , color:'white'},  }} />
      <Stack.Screen name="[id]" options={{ title: "Service Details",  headerStyle: { backgroundColor: "blue" , color:'white'} }} />
      <Stack.Screen name="payment" options={{ title: "Payment",  headerStyle: { backgroundColor: "blue" , color:'white'} }} />

    </Stack>
  );
}