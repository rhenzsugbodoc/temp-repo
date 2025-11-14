import { Stack } from "expo-router";

export default function RequestLayout() {
  return (
    <Stack>
      <Stack.Screen name="index" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />
      <Stack.Screen name="[id]" options={{  headerShown: false, title: "Service Details",  headerStyle: { backgroundColor: "blue"  } }} />
      <Stack.Screen name="payment" options={{ headerShown: false, title: "Payment",  headerStyle: { backgroundColor: "blue" } }} />
      <Stack.Screen name="confirm" options={{ headerShown: false, title: "Confirm",  headerStyle: { backgroundColor: "blue" } }} />
      <Stack.Screen name="requesting_service" options={{ headerShown: false, title: "Requestiong_service",  headerStyle: { backgroundColor: "blue" } }} />

    </Stack>
  );
}