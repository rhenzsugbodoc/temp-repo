import { Stack } from "expo-router";
import {FacilityProvider} from '@/src/context/FacilityContext';
import {RequestServiceProvider} from '@/src/context/RequestContext';
export default function RequestLayout() {
  return (
    <FacilityProvider>
    <RequestServiceProvider>
      <Stack>
        <Stack.Screen name="index" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />
        <Stack.Screen name="[id]" options={{  headerShown: false, title: "Service Details",  headerStyle: { backgroundColor: "blue"  } }} />
        <Stack.Screen name="payment" options={{ headerShown: false, title: "Payment",  headerStyle: { backgroundColor: "blue" } }} />
        <Stack.Screen name="confirm" options={{ headerShown: false, title: "Confirm",  headerStyle: { backgroundColor: "blue" } }} />
        <Stack.Screen name="requesting_service" options={{ headerShown: false, title: "Requestiong_service",  headerStyle: { backgroundColor: "blue" } }} />
      </Stack>
    </RequestServiceProvider>

    </FacilityProvider>
  );
}