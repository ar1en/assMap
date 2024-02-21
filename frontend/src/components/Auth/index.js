import React, {useState} from "react";
import {observer} from "mobx-react-lite";
import AuthStore from "../../store/auth-store";

import style from "./Auth.module.css";

const AuthForm = observer(() => {
    const {login, logout, isAuthorised, isLoading, hasError} = AuthStore;
    const [userLogin, setUserLogin] = useState('');
    const [password, setPassword] = useState('');

    const loginHandler = (e) => {
        e.preventDefault();
        login(userLogin, password);
    };
    const logoutHandler = () => {
        setUserLogin('');
        setPassword('')
        logout();
    }

    const loginForm = (
        <form onSubmit={loginHandler}>
            <div className="mb-2">
                <input className="form-control"
                       type="text"
                       id="userLogin"
                       placeholder="Логин"
                       onChange={(e) => setUserLogin(e.target.value)}/>
            </div>
            <div className="mb-2">
                <input className="form-control"
                       type="password"
                       id="pass"
                       placeholder="Пароль"
                       onChange={(e) => setPassword(e.target.value)}/>
            </div>
            <button className={`btn btn-primary ${style.button}`}>Авторизация</button>
        </form>
    );

    const logoutForm =(
        <span className="d-flex flex-column">
            <h6>Вы авторизованы</h6>
            <button className={`btn btn-primary ${style.button}`} onClick={logoutHandler}>Выход</button>
        </span>
    );

    return (
        <div className="d-flex justify-content-center bg-light rounded-4 p-3">
            {isAuthorised ? logoutForm : loginForm}
        </div>
    );
})

export default AuthForm;