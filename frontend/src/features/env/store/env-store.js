import {makeAutoObservable, autorun} from "mobx";
// import {loginApi} from '../api/auth-api';

class EnvStore {
    isSideMenuCollapsed = false;

    constructor() {
        makeAutoObservable(this);
        // При создании хранилища пытаемся восстановить его из localstorage
        this.restoreFromLocalStorage();
        //При изменении состояния сохраняем его в localstorage
        autorun(() => {
            this.saveToLocalStorage();
        });
    }

    ExpandSideMenu = () => {
        this.isSideMenuCollapsed = false;
    }
    CollapseSideMenu = () => {
        this.isSideMenuCollapsed = true;
    }

    /*Сохранение и восстановление состояния*/
    saveToLocalStorage = () =>{
        const envData = {
            isSideMenuCollapsed: this.isSideMenuCollapsed,
        }

        localStorage.setItem('envData', JSON.stringify(envData));
    }

    restoreFromLocalStorage = () => {
        const envData = localStorage.getItem('envData');

        if (envData) {
            const parsedEnvData = JSON.parse(envData);

            this.isSideMenuCollapsed = parsedEnvData.isSideMenuCollapsed;
        }
    }
}

export {EnvStore};