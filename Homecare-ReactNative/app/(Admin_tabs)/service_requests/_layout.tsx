import { Stack } from "expo-router";
import {CarePlanProvider} from '@/src/context/Admin-CarePlanContext';
export default function RequestLayout() {
  return (
    <CarePlanProvider>
    <Stack>
      <Stack.Screen name="index" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />
      <Stack.Screen name="create_careplan" options={{  headerShown: false, title: "Create Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />

    </Stack>
    </CarePlanProvider>
  );
}