import {AuthStore} from "../../features/auth";
import {EnvStore} from "../../features/env/store/env-store";

class RootStore {
    auth = new AuthStore();
    env = new EnvStore();
}

export {RootStore};