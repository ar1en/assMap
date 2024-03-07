import {Navbar, Nav, Breadcrumb, BreadcrumbItem, Dropdown, Container, Button ,Row ,Col, ButtonGroup} from "react-bootstrap";
import style from "./side.module.css";
import {useStore} from "../../shared/store"
import {useState} from "react"
import menuItems from "./MenuItems.json"


function Side (props) {
    const {CollapseSideMenu, ExpandSideMenu, isSideMenuCollapsed} = useStore().env;

    const [isCollapsed, setCollapsed] = useState(isSideMenuCollapsed);

    const expandCollapseHandler = () =>{
       if (isCollapsed) {
           setCollapsed(false)
           ExpandSideMenu();
       } else {
           setCollapsed(true)
           CollapseSideMenu();
       }
    }

    return(
                <div className= {isCollapsed ? style.side_menu : style.side_menu_active}>

                    <div>
                         {
                             menuItems.mainMenu.map((item) => (
                                 <ButtonGroup className="me-2">
                                     <Button key={item.id} href={item.route} className={`${style.buttonMenuText}`} variant="light">
                                         {item.description}
                                     </Button>

                                     <Button key={item.id} href={item.route} className={`${style.buttonMenuIcon}`} variant="light">
                                         <i className={item.icon}> </i>
                                     </Button>
                                 </ButtonGroup>
                             ))
                         }
                    </div>
                    <div className={style.hidePlace}>
                        <Button className={`btn-light ${style.button_hide}`}  onClick={expandCollapseHandler}>
                             {isCollapsed?">":"<"}
                         </Button>
                    </div>
                </div>
    );

}

export {Side};