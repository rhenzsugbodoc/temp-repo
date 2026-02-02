import { Stack } from "expo-router";
import { AdminPatientsProvider } from "@/src/context/Admin-PatientsContext";

export default function AdminPatientWorklist() {
  return (
    <AdminPatientsProvider>
      <Stack>
          <Stack.Screen name="add_patient" options={{  headerShown: false, title: "Services" , headerStyle: { backgroundColor: "blue" },  }} />
          <Stack.Screen name="index" options={{  headerShown: false, title: "Service Details",  headerStyle: { backgroundColor: "blue"  } }} />
          <Stack.Screen name="patient_details" options={{ headerShown: false, title: "Payment",  headerStyle: { backgroundColor: "blue" } }} />
      </Stack>
    </AdminPatientsProvider>
  );
}