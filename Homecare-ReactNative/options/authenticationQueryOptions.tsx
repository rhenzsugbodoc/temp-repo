
import { queryOptions } from "@tanstack/react-query";
import axios from 'axios';

export function loginUserOptions (email_address : string, password : string) {
    return queryOptions({
        queryKey: ['patients'],
        queryFn: () => loginUser(email_address, password)
    });
};

export function registerUserOptions (firstName : string, middleName : string, lastName : string, emailAddress : string, password : string) {
    return queryOptions({
        queryKey: ['patients'],
        queryFn: () => registerPatient(firstName, middleName, lastName, emailAddress, password)
    });
};

const loginUser = async (email_address: string, password: string) => {
    
    const response = await axios.post(
        'http://localhost/homecare_ci3-hmvc/api/login',
        { email_address: email_address, password: password },
        { headers: { 'Content-Type': 'application/json' } }
    );
    return await response.data;
};

const registerPatient = async (user: any) => {
    const response = await axios.post(
        'http://localhost/homecare_ci3-hmvc/api/register', user , { headers: { 'Content-Type': 'application/json' } }
    );
    return await response.data;
};
