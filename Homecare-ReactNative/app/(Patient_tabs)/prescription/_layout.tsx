import { Stack } from "expo-router";

export default function RequestLayout() {
  return (
    <Stack>
      <Stack.Screen name="index" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />
      <Stack.Screen name="cart" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />
      <Stack.Screen name="tracking" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />
      <Stack.Screen name="location" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />

    </Stack>
  );
}