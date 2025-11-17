import { StyleSheet } from 'react-native';

export const loginStyles = StyleSheet.create({
  topContent: {
    alignItems: 'flex-start',
    marginTop: 60,
    paddingLeft:50
  },
  logoImage: {
    width: 80,
    height: 80,
    marginBottom: 10,
    resizeMode: 'contain',
  },
  logoTitle: {
    color: '#333333',
    fontSize: 28,
    fontWeight: 'bold',
    fontFamily: 'poppins',
  },

  loginInput: {
    marginTop: 60,
    paddingHorizontal: 24,
  },
  input: {
    borderColor: '#f0f0f0',
    marginHorizontal:15,
    borderRadius: 25,
    borderWidth: 1.5,
    paddingHorizontal: 16,
    paddingVertical: 14,
    marginBottom: 16,
    color: 'black',
    fontFamily: 'poppins',
    fontSize: 16,
  },
  loginButton: {
    backgroundColor: '#4454c3',
    borderRadius: 25,
    paddingVertical: 14,
    marginHorizontal: 15,
    alignItems: 'center',
    marginTop: 8,
  },
  loginButtonText: {
    color: 'white',
    fontWeight: 'bold',
    fontFamily: 'poppins',
    fontSize: 16,
  },

  altLogin: {
    marginTop: 40,
    alignItems: 'center',
  },
  altText: {
    color: '#aaa',
    marginBottom: 12,
    fontFamily: 'poppins',
  },
  socialRow: {
    flexDirection: 'row',
    gap: 20,
    marginBottom: 20,
  },
  socialButton: {
    width: 40,
    height: 40,
    borderRadius: 25,
    backgroundColor: '#039be5',
    alignItems: 'center',
    justifyContent: 'center',
  },
  socialText: {
    color: 'white',
    fontSize: 18,
    fontWeight: 'bold',
    fontFamily: 'poppins',
  },
  signupText: {
    color: '#a6a6a6',
    marginTop: 8,
  },
  signupLink: {
    color: '#a7cff6',
    fontWeight: 'bold',
    fontFamily: 'poppins',
  },
});
