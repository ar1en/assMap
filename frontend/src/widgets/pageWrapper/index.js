import {RootStore, useStore} from "../../shared/store";
import React, {useState} from "react";
import {Header} from "../../widgets";
import {Side} from "../../features";
import style from "./pageWrapper.module.css"

const PageWrapper = (props) => {
    let isSideMenuCollapsed = useStore().env.isSideMenuCollapsed;
    const [isSideCollapsed, setIsSideCollapsed] = useState(isSideMenuCollapsed)

    const toggleSideHandler = ()=>{
        setIsSideCollapsed(!isSideCollapsed)
    }

    return (
                <div className={style.appContainer}>
                    <Header/>

                    <div className={style.mainContainer}>
                        <div className={style.sideMenu}>
                            <Side onToggleSide={toggleSideHandler}/>
                        </div>
                        <div className={isSideCollapsed ? style.content : style.contentCollapsed}>
                            {props.children}
                        </div>
                    </div>

                </div>
            );
}

export default  PageWrapper
