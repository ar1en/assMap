import {useStore} from "../../shared/store";
import {useState} from "react";
import {Header} from "../header";
import {Side} from "../side";
import style from "./pageWrapper.module.css"


const PageWrapper = (props) => {

    const {CollapseSideMenu, ExpandSideMenu, isSideMenuCollapsed} = useStore().env;

    const [isSidebarCollapsed, setCollapsed] = useState(isSideMenuCollapsed);

    const toggleSideBarHandler = () =>{

        console.log(isSidebarCollapsed)
        if (isSidebarCollapsed) {
            setCollapsed(false)
            ExpandSideMenu();
        } else {
            setCollapsed(true)
            CollapseSideMenu();
        }
    }

    return (

        <div className={style.appContainer}>

            <div className={style.hdr}>
                <Header/>
            </div>

            <div className={style.mainContainer}>
                <Side isCollapsed={isSidebarCollapsed} toggleSideBar={toggleSideBarHandler} />
                <div className={isSidebarCollapsed ? style.content : style.contentCollapsed}>
                    {props.children}
                </div>
            </div>
        </div>


    );


}

export default  PageWrapper
