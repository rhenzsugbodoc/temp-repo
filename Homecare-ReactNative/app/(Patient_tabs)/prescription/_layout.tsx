import { Stack } from "expo-router";

export default function RequestLayout() {
  return (
    <Stack>
      <Stack.Screen name="index" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />
    </Stack>
  );
}