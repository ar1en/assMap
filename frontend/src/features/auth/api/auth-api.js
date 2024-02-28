import {axios, baseUrl, saveToken} from "../../shared/api"
export const loginApi = async ({login, password}) => {
    try {
        const response = await axios.post(`${baseUrl}auth/login`, { login: login, password: password });

        const token = response.data["access_token"];

        saveToken(token);

        return response.data;
    } catch (error) {
        console.error('Login failed:', error);
        throw error;
    }
};

export default loginApi;
