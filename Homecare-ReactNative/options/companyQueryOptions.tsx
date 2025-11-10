
import { queryOptions } from "@tanstack/react-query";
import axios from 'axios';

export function getCompanyListOptions () {
    return queryOptions({
        queryKey: ['companies'],
        queryFn: getCompanyList
    });
};

export function getCompanyOptions (id: number) {
    return queryOptions({
        queryKey: ['company', id],
        queryFn: () => getCompanyList(id)
    });
};

const getCompanyList = async () => {
    const response = await axios.get(`https://jsonplaceholder.typicode.com/todos/`);
    return response.data;
};

const getCompany = async (id: number) => {
    const response = await axios.get(`https://jsonplaceholder.typicode.com/todos/${id}`);
    return response.data;
}