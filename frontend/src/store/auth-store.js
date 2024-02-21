import {makeAutoObservable} from "mobx";
import {loginApi} from '../services/api';

class AuthStore {
    isAuthorised = false;
    isLoading = true;
    hasError = false;

    constructor() {
        makeAutoObservable(this);
    }

    login = (login, password) => {
        this.setIsLoading(true);
        loginApi({login, password})
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

export default new AuthStore();