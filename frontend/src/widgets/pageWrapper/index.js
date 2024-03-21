import {observer} from "mobx-react-lite";
import {useStore} from "../../shared/store";
import {Header} from "../../widgets";
import {Side} from "../../features";
import style from "./pageWrapper.module.css"

const PageWrapper = observer( (props) => {
    const {isSideMenuCollapsed} = useStore().env;

    return (
        <div>
            {/*Header*/}
            <Header/>

            {/*LeftSide*/}
            <Side/>

            {/*Content*/}
            <div className={`${isSideMenuCollapsed ? style.content : style.contentCollapsed}`}>
                {props.children}
            </div>
        </div>
    );
});

export default PageWrapper
