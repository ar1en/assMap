import {AuthStore} from "../../features/auth";

class RootStore {
    auth = new AuthStore();
}

export {RootStore};