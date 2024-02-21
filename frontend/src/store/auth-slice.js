import {createSlice} from "@reduxjs/toolkit";
import {loginApi} from '../services/api';

const initialState = {
    isAuthenticated: false,
    user: null,
    loading: false,
    error: false,
    token: null,
};

const authSlice = createSlice({
    name: 'auth',
    initialState,
    reducers: {
        loginStart: (state) => {
            state.loading = true;
            state.error = false;
        },
        loginSuccess: (state, action) => {
            state.isAuthenticated = true;
            state.user = action.payload;
            state.loading = false;
            state.error = false;
            state.token = action.payload['access_token']
        },
        loginFailure: (state) => {
            state.loading = false;
            state.error = true;
        },
        logout: (state) => {
            state.isAuthenticated = false
            state.user = null;
            state.loading = false;
            state.error = false;
            state.token = null;
        }
    }
})

export const login = (credentials) => (dispatch) => {
    dispatch(loginStart());

    return loginApi(credentials)
        .then((data) => dispatch(loginSuccess(data)))
        .catch(() => dispatch(loginFailure()))
};
export const {loginStart, loginFailure, loginSuccess, logout} = authSlice.actions;
export default authSlice.reducer;