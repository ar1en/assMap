import React, { Component } from "react";
import { Navigate } from "react-router-dom";
import LoginForm from "../components/LoginForm/LoginForm";
interface LoginPageProps {}

interface LoginPageState {
    error: string;
    isAuthenticated: boolean;
}

class LoginPage extends Component<LoginPageProps, LoginPageState> {
    state = {
        error: "",
        isAuthenticated: false,
    };

    handleLoginFormSubmit = async (username: string, password: string) => {
        const url = "http://localhost:8876/api/v1/auth/login";
        const data = { login: username, password: password };
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
            },
            body: JSON.stringify(data),
        });
        const result = await response.json();
        localStorage.setItem('token', JSON.stringify(result));
        //alert(result);
        // Перенаправляем пользователя на страницу Dashboard
        this.setState({ isAuthenticated: true });
    };

    render() {
        const { error, isAuthenticated } = this.state;

        // Если пользователь уже авторизован, перенаправляем его на страницу Dashboard
        if (isAuthenticated) {
            return <Navigate to="/testpage/" />;
        }

        return (
            <div>
                <h2>Login</h2>
                <LoginForm onSubmit={this.handleLoginFormSubmit} />
                {error && <p>{error}</p>}
            </div>
        );
    }
}

export default LoginPage;
