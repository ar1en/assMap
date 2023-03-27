import React, { Component } from "react";
import { Navigate } from "react-router-dom";
import LoginForm from "../components/LoginForm/LoginForm";
interface LoginPageProps {}

interface LoginPageState {
    error: string;
    isAuthenticated: boolean;
}

class TestPage extends Component<LoginPageProps, LoginPageState> {
    state = {
        error: "",
        isAuthenticated: false,
    };

    render() {
        const { error, isAuthenticated } = this.state;
        const tokenJson = localStorage.getItem('token');
        const token = tokenJson ? JSON.parse(tokenJson) : null;

        // Если пользователь уже авторизован, перенаправляем его на страницу Dashboard
        //if (isAuthenticated) {
        //    return <Navigate to="/" />;
        //}

        return (
            <div>
                <h2>Ваш персональный токен: {token.access_token}</h2>
            </div>
        );
    }
}

export default TestPage;
