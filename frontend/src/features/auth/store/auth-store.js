import {makeAutoObservable, autorun} from "mobx";
import {loginApi} from '../api/auth-api';

class AuthStore {
    isAuthorised = false;
    isLoading = false;
    hasError = false;

    constructor() {
        makeAutoObservable(this);
        // При создании хранилища пытаемся восстановить его из localstorage
        this.restoreFromLocalStorage();
        //При изменении состояния сохраняем его в localstorage
        autorun(() => {
            this.saveToLocalStorage();
        });
    }

    login = (credentials) => {
        this.isLoading = true;
        loginApi(credentials)
            .then(()=>{
                this.setIsAuthorised(true);
                this.setIsLoading(false);
            })
            .catch(()=>{
                this.setIsAuthorised(false);
                this.setIsLoading(false);
                this.setHasError(true);
            })
    }
    logout = () => {
        this.setIsAuthorised(false);
    }

    setIsAuthorised = (value) =>{
        this.isAuthorised = value;
    }

    setIsLoading = (value) =>{
        this.isLoading = value;
    }

    setHasError = (value) =>{
        this.hasError = value;
    }

    /*Сохранение и восстановление состояния*/
    saveToLocalStorage = () =>{
        const authData = {
            isAuthorised: this.isAuthorised,
        }

        localStorage.setItem('authData', JSON.stringify(authData));
    }

    restoreFromLocalStorage = () => {
        const authData = localStorage.getItem('authData');

        if (authData) {
            const parsedAuthData = JSON.parse(authData);

            this.isAuthorised = parsedAuthData.isAuthorised;
        }
    }
}

export {AuthStore};