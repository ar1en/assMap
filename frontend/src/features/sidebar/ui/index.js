import {Button} from "react-bootstrap";
import style from "./side.module.css";
import {useStore} from "../../../shared/store"
import menuItems from "./MenuItems.json"
import {observer} from "mobx-react-lite";
import {useNavigate} from "react-router-dom";

const Side = observer( (props) => {

    const {ToggleSideMenu, isSideMenuCollapsed} = useStore().env;
    const navigate = useNavigate();

    const toggleSideHandler = ()=>{
        ToggleSideMenu();
    }

    return(
        <div className={`position-fixed bg-light ${style.menuWrapper}`}>
            <div className="list-group rounded-0">
                {menuItems.mainMenu.map((item) => (
                    <a className={`list-group-item list-group-item-action bg-light border-0 text-truncate ${style.listItem}`} key={item.id} onClick={()=> navigate(item.route)}>
                        <i className={item.icon}> </i>
                            {!isSideMenuCollapsed ? item.description : ""}
                    </a>
                ))}
                <hr className="m-3 mb-1 mt-1"/>
                <Button className="rounded-0" variant="light" onClick={toggleSideHandler}>
                    {isSideMenuCollapsed ? <i className="bi bi-arrow-bar-right"></i> : <i className="bi bi-arrow-bar-left"></i>}
                </Button>
            </div>
        </div>
    );
});

export {Side};