import { Stack } from "expo-router";

export default function RequestLayout() {
  return (
    <Stack>
      <Stack.Screen name="index" options={{ title: "Services" }} />
      <Stack.Screen name="company[id]" options={{ title: "Service Details" }} />
    </Stack>
  );
}