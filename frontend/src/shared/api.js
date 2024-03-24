import axios from 'axios';
import Cookies from 'js-cookie';

const baseUrl = "http://localhost:8876/api/v1/";

const saveToken = (token) => {
    Cookies.set('token', token, { expires: 1 });
};

const getToken = () => {
    return Cookies.get('token');
};

const removeToken = () => {
    Cookies.remove('token');
};

const authenticatedRequest = async (method, url, data) => {
    const token = getToken();

    if (!token) {
        console.error('No token available. User is not authenticated.');
        throw new Error('User is not authenticated');
    }

    try {
        const response = await axios({
            method,
            url: `${baseUrl}/${url}`,
            headers: {
                Authorization: `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
            data,
        });

        return response.data;
    } catch (error) {
        console.error('Authenticated request failed:', error);
        throw error;
    }
};

const logoutApi = () => {
    removeToken();
};

export {axios, saveToken, getToken, removeToken, baseUrl, authenticatedRequest};