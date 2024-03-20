import {Navbar, Nav, Breadcrumb, BreadcrumbItem, Dropdown, Container, Button ,Row ,Col, ButtonGroup} from "react-bootstrap";
import style from "./side.module.css";
import {useStore} from "../../shared/store"
import {useState} from "react"
import menuItems from "./MenuItems.json"


function Side (props) {

    const {CollapseSideMenu, ExpandSideMenu, isSideMenuCollapsed} = useStore().env;

    const [isCollapsed,setCollapsed] = useState(isSideMenuCollapsed)

    const toggleSideBarHandler = () =>{
        if (isSideMenuCollapsed) {
            setCollapsed(false)
            ExpandSideMenu();
        } else {
            setCollapsed(true)
            CollapseSideMenu();
        }

        props.onToggleSide();
    }

    return(
                <div className= { isCollapsed ? style.sidebarCollapsed : style.sidebarOpen }>
                    <div>
                         {
                             menuItems.mainMenu.map((item) => (
                                 // <ButtonGroup key={item.id + '_grp'}  className="me-2">
                                     <Button key={item.id + '_txt'} href={item.route}  variant="light">
                                        <div className={`${style.buttonMenu}`}>
                                           {item.description}
                                           <i className={item.icon}> </i>
                                        </div>
                                     </Button>
                                 // </ButtonGroup>
                             ))
                         }
                    </div>

                    <div className={style.hidePlace}>
                        <Button variant="light" onClick={toggleSideBarHandler}>
                            <div className={`${style.button_hide}`}>
                                {isCollapsed?">>":"<< свернуть"}
                            </div>
                        </Button>
                    </div>
                </div>
    );

}

export {Side};