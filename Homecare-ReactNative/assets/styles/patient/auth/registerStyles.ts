import { StyleSheet } from 'react-native';

export const registerCommonStyles = StyleSheet.create({
  topContent: {
    alignItems: 'flex-start',
    marginTop: 40,
    paddingHorizontal: 24,
  },
  logoImage: {
    width: 80,
    height: 80,
    marginBottom: 10,
    resizeMode: 'contain',
  },
  headerText1: {
    color: 'black',
    fontSize: 28,
    fontWeight: 'bold',
  },
  headerText2: {
    color: '#717171', 
    fontSize: 24,
    fontWeight: 'bold',
  },
  form: {
    marginTop: 40,
    paddingHorizontal: 40,
  },
  formTextInput: {
    backgroundColor: '#ffffff',
    borderWidth: 1,
    borderColor: '#ccc',
    borderRadius: 10,
    paddingHorizontal: 10,
    paddingVertical: 10,
    marginBottom: 16,
    color: '#c2c2c2',
    fontSize: 16,
  },
  dobRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
  },
  dobInput: {
    flex: 1,
    marginRight: 8,
  },
  genderRow: {
    flexDirection: 'row',
    justifyContent: 'center',
    alignItems: 'center',
    marginVertical: 16,
  },
  genderButton: {
    flex: 1,
    paddingVertical: 8,
    marginHorizontal: 8,
    borderRadius: 8,
    backgroundColor: '#4b5cbe',
    alignItems: 'center',
  },
  genderSelected: {
    backgroundColor: '#9bc3da',
  },
  genderText: {
    color: 'white',
    fontWeight: 'bold',
  },

  signupButton: {
    backgroundColor: '#4b5cbe',
    borderRadius: 10,
    paddingVertical: 14,
    alignItems: 'center',
    marginTop: 8,
  },
  signupButtonText: {
    color: 'white',
    fontWeight: 'bold',
    fontSize: 16,
  },

  altLogin: {
    marginTop: 30,
    alignItems: 'center',
  },
  altText: {
    color: '#aaa',
    marginBottom: 12,
  },
  socialRow: {
    flexDirection: 'row',
    gap: 20,
    marginBottom: 20,
  },
  socialButton: {
    width: 40,
    height: 40,
    borderRadius: 20,
    backgroundColor: '#333',
    alignItems: 'center',
    justifyContent: 'center',
  },

  loginText: {
    color: '#717171',
    marginTop: 8,
  },
  loginLink: {
    color: '#0575e6',
    fontWeight: 'bold',
  },
});


export const register1Styles = StyleSheet.create({

  genderRow: {
    flexDirection: 'row',
    justifyContent: 'center',
    marginVertical: 16,
  },
  genderButton: {
    flex: 1,
    paddingVertical: 12,
    marginHorizontal: 8,
    borderRadius: 10,
    backgroundColor: '#4454C3',
    alignItems: 'center',
  },
  genderSelected: {
    backgroundColor: '#0575e6',
  },
  genderText: {
    color: 'white',
    fontWeight: 'bold',
  },

});