import React, { createContext, useContext, useState, ReactNode } from 'react';


export type User = {
  first_name?: string;
  middle_name?: string;
  last_name?: string;
  phone_number?: string;
  email_address?: string;
  password?: string;
  confirm_password?: string;
  gender?: 'Male' | 'Female';
  dob?: Date;
  home_address?: string;
  medical_conditions?: string[];
  allergies?: string[];
  emergency_contact?: string;
  current_medications?: string[];

}

//defines shape of context (data and functions)  available to components
type AuthContextType = {

 
  loggedInUser: User | null;
  
  addUser: (user: User) => void;
  loginUser: (emailAddress: string, password: string) => boolean;
  logoutUser: () => void;
};

//Create context with default value of undefined
const AuthContext = createContext<AuthContextType | undefined>(undefined);

//defines the context component and passes do the children components via useToDo hook
export const AuthProvider = ({ children }: { children: ReactNode }) => {

  //Can define a useEffect to check authentication status on mouunt


  const [users, setUsers] = useState<User[]>([]);

  const [loggedInUser, setLoggedInUser] = useState<User | null>(null);

  const addUser = (user: User) => {
    setUsers(prev => [...prev, user]);
  };


  const loginUser = (emailAddress: string, password: string) => {
    const user = users.find(u => u.emailAddress === emailAddress && u.password === password);
    if (user) {
      setLoggedInUser(user);
      return true; 
    }
    return false; 
  };

  const logoutUser = () => {
    setLoggedInUser(null);
  };

  return (
    <AuthContext.Provider
      value={{
        loggedInUser,

        addUser,
        loginUser,
        logoutUser
      }}
    >
      {children}
    </AuthContext.Provider>
  );
};

export const useAuth = () => {
  const context = useContext(AuthContext);
  if (!context) throw new Error('useAuth must be used within a AuthProvider');
  return context;
};