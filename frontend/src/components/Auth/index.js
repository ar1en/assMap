import React, {useState} from "react";
import {useDispatch, useSelector} from "react-redux";
import {login, logout} from "../../store/auth-slice";

import style from "./Auth.module.css";

export default function AuthForm(props) {

    const isAuthenticated = useSelector((state)=>state.auth.isAuthenticated);

    const [userLogin, setUserLogin] = useState('');
    const [password, setPassword] = useState('');
    const dispatch = useDispatch();
    const loginHandler = (e) => {
        e.preventDefault();

        dispatch(login({login: userLogin, password}))
            .then()
            .catch()
    };
    const logoutHandler = () => {
        dispatch(logout());
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
            {isAuthenticated ? logoutForm : loginForm}
        </div>
    );
};