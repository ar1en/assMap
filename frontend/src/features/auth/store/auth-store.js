import {makeAutoObservable} from "mobx";
import {loginApi} from '../api/auth-api';

class AuthStore {
    isAuthorised = false;
    isLoading = false;
    hasError = false;

    constructor() {
        makeAutoObservable(this);
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
}

export {AuthStore};