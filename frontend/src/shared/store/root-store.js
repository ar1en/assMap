import {AuthStore} from "../../features";
import {EnvStore} from "../../features";

class RootStore {
    auth = new AuthStore();
    env = new EnvStore();
}

export {RootStore};