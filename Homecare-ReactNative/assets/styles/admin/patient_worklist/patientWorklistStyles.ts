import { StyleSheet } from 'react-native';

export const addPatientStyles = StyleSheet.create({
headerContainer: {
    backgroundColor: '#4454c3',
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    padding: 25,
    paddingVertical: 30,
    marginBottom: 15,
    borderBottomLeftRadius: 25,
    borderBottomRightRadius: 25,
},
headerTitle: {
    color: 'white',
    fontSize: 17,
    fontWeight: 'bold',
    fontFamily: 'poppins'
},
scheduleTypeContainer: {
    flexDirection: 'row', 
    gap: 5, 
    margin: 10
},
scheduleTypeButton: {
    borderRadius: 10,
    padding: 9,
    justifyContent: 'center',
    flex: 1,
},
scheduleTypeText: {
    //not yet
},
datePickerWrapper: {
    flexDirection: 'row', 
    padding:10, 
    gap: 10, 
    marginVertical: 8
},
datePickerContainer: {
    flex: 1,
},
datePickerButton: {
    borderRadius: 10, 
    borderWidth: 1, 
    borderColor: '#ccc',
    padding: 10, 
    height: 40, 
    alignItems: 'center'
},
datePickerText: {
    color: '#79618a', 
    fontWeight: 'bold'
},
serviceTypeContainer: {
    padding: 10, 
    gap: 8
},
serviceToggleItem: {
    borderRadius: 10, borderWidth: 1, borderColor: '#ccc', overflow: 'hidden' 
},
descriptionContainer: {
    padding: 10, 
    gap: 8
},
descriptionInput: {
    borderRadius: 10, 
    borderWidth: 1, 
    borderColor: '#ccc'
},
fileInput: {
    padding: 20, 
    borderRadius: 10, 
    borderWidth: 1, 
    borderColor: '#ccc'
},
submitButton: {
    backgroundColor: '#22449e',
    padding: 15,
    paddingHorizontal: 20,
    borderRadius: 20,
    alignItems: 'center',
    margin: 10, 
    justifyContent: 'flex-end',   
},
fieldLabel: {
    color: '#5a6489'
}
});


export const patientDetailStyles = StyleSheet.create({
  card: {
    backgroundColor: 'white',
    borderBottomLeftRadius: 10,
    borderBottomRightRadius: 10,
    marginBottom: 30,
    alignItems: 'center',
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 1,
  },
headerTitle: {
    color: 'white',
    fontSize: 17,
    fontWeight: 'bold',
    fontFamily: 'poppins'
},
scheduleTypeContainer: {
    flexDirection: 'row',
   
    justifyContent: 'center',
    alignItems: 'center',
   
    
},
scheduleTypeButton: {
    borderRadius: 0,
    padding: 12,
    justifyContent: 'center',
    flex: 1,
},
scheduleTypeText: {
    //not yet
},
datePickerWrapper: {
    flexDirection: 'row', 
    padding:10, 
    gap: 10, 
    marginVertical: 8
},
datePickerContainer: {
    flex: 1,
},
datePickerButton: {
    borderRadius: 10, 
    borderWidth: 1, 
    borderColor: '#ccc',
    padding: 10, 
    height: 40, 
    alignItems: 'center'
},
datePickerText: {
    color: '#79618a', 
    fontWeight: 'bold'
},
serviceTypeContainer: {
    padding: 10, 
    gap: 8
},
serviceToggleItem: {
    borderRadius: 10, borderWidth: 1, borderColor: '#ccc', overflow: 'hidden' 
},

descriptionInput: {
    borderRadius: 10, 
    borderWidth: 1, 
    borderColor: '#ccc'
},
fileInput: {
    padding: 20, 
    borderRadius: 10, 
    borderWidth: 1, 
    borderColor: '#ccc'
},
submitButton: {
    backgroundColor: '#22449e',
    padding: 15,
    paddingHorizontal: 20,
    borderRadius: 20,
    alignItems: 'center',
    margin: 10, 
    justifyContent: 'flex-end',   
},
fieldLabel: {
    color: '#5a6489'
},
interventionText: {
fontSize: 13,
color: '#53346a'
}
});