import { Stack } from "expo-router";
import {CarePlanProvider} from '@/src/context/CarePlanContext';
import {CarePlanProvider as AdminCarePlanProvider} from '@/src/context/Admin-CarePlanContext';
export default function RequestLayout() {
  return (
    <AdminCarePlanProvider>
      <CarePlanProvider>
        <Stack>
          <Stack.Screen name="index" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />
          <Stack.Screen name="interventions" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />
          <Stack.Screen name="one-time" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />
          <Stack.Screen name="routine" options={{  headerShown: false, title: "My Plans" , headerStyle: { backgroundColor: "#4454c3"},  }} />
        </Stack>
      </CarePlanProvider>
    </AdminCarePlanProvider>
  );
}