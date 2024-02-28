import {createContext, useContext} from "react";
import RootStore from "./root-store"

export const RootStoreContext = createContext(null);

export const useStore = () => {
    return useContext(RootStoreContext);
}