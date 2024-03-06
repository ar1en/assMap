import {Navbar, Nav, Breadcrumb, BreadcrumbItem, Dropdown, Container, Button ,Row ,Col, ButtonGroup} from "react-bootstrap";
import style from "./side.module.css";
import {useStore} from "../../shared/store"
import {useState} from "react"
import menuItems from "./MenuItems.json"

function Side (props) {

    const [isCollapsed, setCollapsed] = useState(false);

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
                        <Button className={`btn-light ${style.button_hide}`}  onClick={()=>setCollapsed(!isCollapsed)}>
                             {isCollapsed?">":"<"}
                         </Button>
                    </div>
                </div>
    );

}

export {Side};