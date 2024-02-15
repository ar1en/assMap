import React, { useRef } from "react";
import styles from "./Auth.module.css";


function AddAuth(props) {
    const loginRef = useRef("");
    const passRef = useRef("");

    function submitHandler(event) {
        event.preventDefault();

        const authData = {
            login: loginRef.current.value,
            password: passRef.current.value
        };

        props.onAuth(authData);
    }

    return (
        <form onSubmit={submitHandler}>
            <div className={styles.control}>
                <label htmlFor="login">Логин</label>
                <input type="text" id="login" ref={loginRef} />
            </div>
            <div className={styles.control}>
                <label htmlFor="pass">Пароль</label>
                <input type="text" id="pass" ref={passRef} />
            </div>
            <button>Авторизация</button>
        </form>
    );
}

export default AddAuth;