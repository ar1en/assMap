import {observer} from "mobx-react-lite";
import {useStore} from "../../shared/store";
import {Header} from "../header";
import {Side} from "../../features";
import style from "./pageWrapper.module.css"

const Layout = observer( ({children}) => {
    const {isSideMenuCollapsed} = useStore().env;

    return (
        <div>
            {/*Header*/}
            <Header/>

            {/*LeftSide*/}
            <Side/>

            {/*Content*/}
            <div className={`${isSideMenuCollapsed ? style.content : style.contentCollapsed} p-0`}>
                {children}
            </div>
        </div>
    );
});

export {Layout}
