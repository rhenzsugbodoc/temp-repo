import { Stack } from "expo-router";

export default function RequestLayout() {
  return (
    <Stack>
      <Stack.Screen name="index" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />
      <Stack.Screen name="[id]" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />
      <Stack.Screen name="interventions" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />

    </Stack>
  );
}