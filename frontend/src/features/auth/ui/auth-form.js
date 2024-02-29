import React, {useState} from "react";
import {observer} from "mobx-react-lite";
import {useNavigate} from "react-router-dom";
import {Loader} from "../../../shared/ui-kit";
import {useStore} from "../../../shared/store";
import style from "./auth.module.css";

const AuthForm = observer(() => {
    const {login, logout, isAuthorised, isLoading, hasError} = useStore().auth;
    const [credentials, setCredentials] = useState({login: '', password: ''})
    const navigate = useNavigate();

    const loginHandler = (e) => {
        e.preventDefault();
        login(credentials);
    };
    const logoutHandler = () => {
        setCredentials({login: '', password: ''});
        logout();
    }

    const credentialsUpdate = (credential, value) => {
        setCredentials((state) => ({ ...state, [credential]: value }));
    };

    const loginForm = (
        <form onSubmit={loginHandler}>
            <div className="mb-2">
                <input className="form-control"
                       type="text"
                       id="userLogin"
                       placeholder="Логин"
                       onChange={(e) => credentialsUpdate('login', e.target.value)}/>
            </div>
            <div className="mb-2">
                <input className="form-control"
                       type="password"
                       id="pass"
                       placeholder="Пароль"
                       onChange={(e) => credentialsUpdate('password', e.target.value)}/>
            </div>
            <button className={`btn btn-primary ${style.button}`}>Авторизация</button>
        </form>
    );

    /*const logoutForm =(
        <span className="d-flex flex-column">
            <h6>Вы авторизованы</h6>
            <button className={`btn btn-primary ${style.button}`} onClick={logoutHandler}>Выход</button>
        </span>
    );*/

    return (
        <div className="d-flex justify-content-center bg-light rounded-4 p-3">
            {!isLoading ? (isAuthorised ? navigate('/page'): loginForm) : <Loader/>}
        </div>
    );
})

export {AuthForm};