
import {View, Pressable, Text, ScrollView, TextInput, SafeAreaView} from 'react-native';
import {useCarePlan} from '@/src/context/Admin-CarePlanContext';
import {useFacilityCaregivers} from '@/src/options/serviceRequestOptions';
import {CreateAssignmentData} from '@/src/services/caregiverAssignmentService';
import { useState, useEffect } from 'react';
import {useCreateAssignment} from '@/src/options/caregiverAssignmentQueryOptions';
import {requestDetailStyles} from '@/assets/styles/patient/request/requestStyles';
import { Picker } from '@react-native-picker/picker';
import { useRouter } from 'expo-router';

export default function AssignCaregiver(){
    const router = useRouter();
    const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const { requestID, patientID, facilityID, carePlanID } = useCarePlan();
    const { data: facilityCaregivers} = useFacilityCaregivers(facilityID || 0,
        !!facilityID
    );
    const createAssignmentMutation = useCreateAssignment();

    const [assignments, setAssignments] = useState<CreateAssignmentData[]>([{
        patient_id: patientID || 0,
        caregiver_id: 0,
        care_plan_id: carePlanID || 0,
        assignment_type: "Primary",
        shift_schedule: null,
        responsibilities: null,
    }]);

    const addAssignment = () => {
        setAssignments([...assignments, {
            patient_id: patientID || 0,
            caregiver_id: 0,
            care_plan_id: carePlanID || 0,
            assignment_type: "Primary",
            shift_schedule: null,
            responsibilities: null,
        }]);
    };

    const updateAssignment = (index: number, field: keyof CreateAssignmentData, value: any) => {
        const updated = [...assignments];
        updated[index] = { ...updated[index], [field]: value };
        setAssignments(updated);
    };

    const removeAssignment = (index: number) => {
        setAssignments(assignments.filter((_, i) => i !== index));
    };

    const handleSubmit = async () => {
        try {
            // Submit each assignment one by one
            for (const assignment of assignments) {
                // Ensure all IDs are numbers
                const cleanedAssignment = {
                    ...assignment,
                    patient_id: Number(assignment.patient_id),
                    caregiver_id: Number(assignment.caregiver_id),
                    care_plan_id: Number(assignment.care_plan_id),
                };
                await createAssignmentMutation.mutateAsync(cleanedAssignment);
            }
            router.push('/(Admin_tabs)/dashboard');
        } catch (error) {
            console.error('Error submitting assignments:', error);
        }
    };
return(
        <SafeAreaView style={{
            flex: 1,
            backgroundColor: '#ffffff',
            padding: 10,
        }} edges={['top']}>

            <View style={requestDetailStyles.headerContainer}>
                <Text style={requestDetailStyles.headerTitle}>Assign Caregivers</Text>
            </View>

            {/* Add Assignment Button */}
            <Pressable 
                onPress={addAssignment} 
                style={{
                    backgroundColor: '#007AFF',
                    padding: 12,
                    borderRadius: 8,
                    alignItems: 'center',
                    marginVertical: 10,
                }}
            >
                <Text style={{ color: 'white', fontWeight: '600' }}>+ Add Assignment</Text>
            </Pressable>

            <ScrollView>
                {assignments.map((assignment, index) => (
                    <View 
                        key={index} 
                        style={{
                            backgroundColor: '#f8f8f8',
                            borderRadius: 12,
                            padding: 16,
                            marginBottom: 16,
                            borderWidth: 1,
                            borderColor: '#e0e0e0',
                        }}
                    >
                        
                        {assignments.length > 1 && (
                            <Pressable 
                                onPress={() => removeAssignment(index)}
                                style={{
                                    alignSelf: 'flex-end',
                                    padding: 4,
                                }}
                            >
                                <Text style={{ color: 'red', fontSize: 18 }}>✕</Text>
                            </Pressable>
                        )}

                        
                        <View style={requestDetailStyles.serviceTypeContainer}>
                            <Text>Select Caregiver</Text>
                            <View style={requestDetailStyles.serviceToggleItem}>
                                <Picker 
                                    selectedValue={assignment.caregiver_id} 
                                    onValueChange={(value) => updateAssignment(index, 'caregiver_id', value)}
                                >
                                    <Picker.Item label="Select a caregiver" value={0} />
                                    {facilityCaregivers?.map((caregiver) => (
                                        <Picker.Item 
                                            key={caregiver.caregiver_id} 
                                            label={caregiver.professional_display_name} 
                                            value={caregiver.caregiver_id} 
                                        />
                                    ))}
                                </Picker>
                            </View>
                        </View>

                        {/* Assignment Type */}
                        <View style={requestDetailStyles.serviceTypeContainer}>
                            <Text>Assignment Type</Text>
                            <View style={requestDetailStyles.serviceToggleItem}>
                                <Picker 
                                    selectedValue={assignment.assignment_type} 
                                    onValueChange={(value) => updateAssignment(index, 'assignment_type', value)}
                                >
                                    <Picker.Item label="Primary" value="Primary" />
                                    <Picker.Item label="Secondary" value="Secondary" />
                                    <Picker.Item label="Emergency" value="Emergency" />
                                    <Picker.Item label="Temporary" value="Temporary" />
                                </Picker>
                            </View>
                        </View>

                        <View style={requestDetailStyles.serviceTypeContainer}>
                            <Text>Shift Schedule</Text>
                            <View style={requestDetailStyles.serviceToggleItem}>
                                <Picker 
                                    selectedValue={assignment.shift_schedule} 
                                    onValueChange={(value) => updateAssignment(index, 'shift_schedule', value)}
                                >
                                    <Picker.Item label="Select shift schedule" value={null} />
                                    {days.map((day) => (
                                        <Picker.Item 
                                            key={day} 
                                            label={day} 
                                            value={day} 
                                        />
                                    ))}
                                </Picker>
                            </View>
                        </View>

                        
                        <View style={requestDetailStyles.descriptionContainer}>
                            <Text>Responsibilities</Text>
                            <TextInput
                                style={[requestDetailStyles.descriptionInput, {height: 80}]}
                                value={assignment.responsibilities || ''}
                                onChangeText={(text) => updateAssignment(index, 'responsibilities', text)}
                                placeholder="Enter responsibilities"
                                multiline
                            />
                        </View>
                    </View>
                ))}

                {/* Submit Button */}
                <View style={{ 
                    alignItems: 'stretch', 
                    backgroundColor: 'white',   
                    shadowColor: '#000',
                    shadowOffset: { width: 0, height: -2 },
                    shadowOpacity: 0.5,
                    shadowRadius: 4,
                    elevation: 20,
                    marginTop: 20,
                }}>
                    <Pressable onPress={handleSubmit} style={requestDetailStyles.submitButton}>
                        <Text style={{ color: 'white' }}>Submit All Assignments</Text>
                    </Pressable>
                </View>
            </ScrollView>
   
        </SafeAreaView>
)
}