import { StyleSheet } from 'react-native';

export const companyListStyles = StyleSheet.create({

card: {
    backgroundColor: '#ffffff',
    borderRadius: 15,
    
    marginHorizontal: 5,
    marginVertical: 5,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowOffset: { width: 0, height: 2 },
    shadowRadius: 4,
    elevation: 2,
    alignItems: 'center',
},

headerContainer: {
    backgroundColor: '#4454c3',
    flexDirection: 'row',
    justifyContent: 'space-between',
    padding: 25,
    paddingVertical: 30,
    borderBottomLeftRadius: 25,
    borderBottomRightRadius: 25,
},

headerTitle: {
    color: 'white',
    fontSize: 30,
    fontWeight: 'bold',
    fontFamily: 'poppins'
},

headerIcons: {
    // position: 'absolute',
    // right: 20,
    // top: 20,
    flexDirection: 'row',
    gap: 15,
},

searchWrapper: {
    width: '100%',
    alignItems: 'center',
    marginTop: -20,
},

searchContainer: {
    width: '85%',
    backgroundColor: 'white',
    height: 40,
    borderRadius: 20,
    paddingHorizontal: 15,
    paddingVertical: 10,
    flexDirection: 'row',
    alignItems: 'center',
    elevation: 4,

},

searchInput: {
    flex: 1,
    fontSize: 16,
    height: 45,
},
pickerContainer: {
    backgroundColor: '#ffffff',
    flex: 1,
    height: 35,
    justifyContent: 'center',
    borderWidth: 0.1,
    borderRadius: 25,
    borderColor: '#ccc',
    overflow: 'hidden',
},
// create stylings for
pickerWrapper: {
    flexDirection: 'row',
    gap: 10,
    marginVertical: 12,
    paddingHorizontal: 40
},
pickerItem: {
    flex: 1,
    color: '#b7aac0'
},
companyContainer: {
    gap: 15,
    marginHorizontal: 20,
    justifyContent: 'center'
},
companyImage: { 
    borderRadius: 10,
    width: '100%', 
    height: 150
},
companyText1: {
    fontWeight: 'bold', 
    fontSize: 16, 
    marginBottom: 2, 
    color: '#434e79', 
    fontFamily: 'poppins'
},
companyText2: {
    color: '#cacaca', 
    fontSize: 12,
    marginBottom: 5, 
    fontFamily: 'poppins'
},
companyText3: {
    color: '#cbcbcb', 
    fontSize: 13, 
    fontFamily: 'poppins'
}
});


export const companyDetailStyles = StyleSheet.create({
// create stylings for
headerContainer: {
    backgroundColor: '#2b4aa2',
    justifyContent: 'center', 
    alignItems: 'center', 
    height: 200
},
companyHeaderTitle: {
    color: 'white' ,
    fontSize: 20,
    fontWeight: 'bold'
},
companyHeaderText: {
    color: 'white' ,
    fontSize: 14,
},
aboutUsContainer: {
    borderBottomColor: 'black', 
    borderBottomWidth: 1 , 
    padding: 25
},
aboutUsText: {
    color: '#15245c', 
    fontFamily: 'poppins'
},

categoryLabel: {
    color: '#424e78', 
    fontFamily: 'poppins', 
    fontWeight: 'bold'
},
grid: {
  flexDirection: 'row',
  flexWrap: 'wrap',
  marginTop: 15,
  justifyContent: 'space-between',
  gap: 12,
},
servicesOfferedContainer: {
    padding: 25
},
serviceTypeItem: {
  backgroundColor: '#2b4ba2',
  
  padding: 5,
  color: 'white',
  borderRadius: 20,
  justifyContent: 'center',
  width: '45%',
},
serviceTypeText: {
    color:'white', 
    textAlign: 'center'
},
requestButtonContainer: {
    marginTop: 'auto', 
    padding: 10
},
requestButton: {
    backgroundColor: '#2b4ba2', 
    padding: 10, 
    borderRadius: 20
},
requestButtonText: {
    color: 'white', 
    textAlign: 'center'
}
});

export const requestDetailStyles = StyleSheet.create({
headerContainer: {
    height: 80,
    backgroundColor: '#22449e',
    justifyContent: 'center',
    paddingHorizontal: 15,
},
headerTitle: {
    color: '#ffffff', 
    fontSize: 20,
    fontWeight: 'bold'
},
scheduleTypeContainer: {
    flexDirection: 'row', 
    gap: 5, 
    margin: 10
},
scheduleTypeButton: {
    borderRadius: 5,
    padding: 10,
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
    backgroundColor: '#ebe9ec', 
    padding: 10, 
    borderRadius: 8, 
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
});
//requestDetailStyles redundant style names
