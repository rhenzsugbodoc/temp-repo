
import { queryOptions } from "@tanstack/react-query";
import axios from 'axios';


export function loginUserOptions (emailAddress : string, password : string) {
    return queryOptions({
        queryKey: ['patients'],
        queryFn: () => loginUser(emailAddress, password)
    });
};

export function registerUserOptions (firstName : string, middleName : string, lastName : string, emailAddress : string, password : string) {
    return queryOptions({
        queryKey: ['patients'],
        queryFn: () => registerPatient(firstName, middleName, lastName, emailAddress, password)
    });
};

const loginUser = async (emailAddress: string, password: string) => {
    const response = await axios.post(
        'https://api.example.com/login',
        { emailAddress: emailAddress, password: password },
        { headers: { 'Content-Type': 'application/json' } }
    );
    return await response.data;
};

const registerPatient = async (firstName: string, middleName: string, lastName: string, emailAddress: string, password: string) => {
    const response = await axios.post(
        'https://api.example.com/register',
        { firstName: firstName, middleName: middleName, lastName: lastName, emailAddress: emailAddress, password: password },
        { headers: { 'Content-Type': 'application/json' } }
    );
    return await response.data;
};
