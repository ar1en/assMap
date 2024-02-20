import React, { useState } from "react";
import {useDispatch, useSelector} from "react-redux";
import {authActions} from "../../store/auth";

import style from "./Auth.module.css";
import {login, logout} from "../../services/api"


export default function AuthForm(props) {

    const isLogin = useSelector((state)=>state.auth.isLogin);

    const [isAuthorized, setIsAuthorized] = useState(false);
    const [hasError, setHasError] = useState(false);
    const [userLogin, setUserLogin] = useState('');
    const [password, setPassword] = useState('');

    const dispatchFunction = useDispatch();
    const loginHandler = (e) => {
        e.preventDefault();

        dispatchFunction(authActions.login());
        /*login(userLogin, password)
            .then(response => {
                setIsAuthorized(true);
            })
            .catch(error => {
                setHasError(true);
            });*/
    };
    const logoutHandler = () => {
        dispatchFunction(authActions.logout());
        /*logout();
        setIsAuthorized(false);*/
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
            {isLogin ? logoutForm : loginForm}
        </div>
    );
};