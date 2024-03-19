import {Navbar, Nav, Breadcrumb, BreadcrumbItem, Dropdown, Container, Button ,Row ,Col, ButtonGroup} from "react-bootstrap";
import style from "./side.module.css";
import {useStore} from "../../shared/store"
import {useState} from "react"
import menuItems from "./MenuItems.json"


function Side (props) {


    return(
                <div className= {props.isCollapsed ? style.sidebarCollapsed : style.sidebarOpen}>

                    <div>
                         {
                             menuItems.mainMenu.map((item) => (
                                 <ButtonGroup key={item.id + '_grp'}  className="me-2">
                                     <Button key={item.id + '_txt'} href={item.route} className={`${style.buttonMenuText}`} variant="light">
                                         {item.description}
                                     </Button>

                                     <Button key={item.id + '_img'} href={item.route} className={`${style.buttonMenuIcon}`} variant="light">
                                         <i className={item.icon}> </i>
                                     </Button>
                                 </ButtonGroup>
                             ))
                         }
                    </div>
                    <div className={style.hidePlace}>
                        <button className={`${style.button_hide}`}  onClick={props.toggleSideBar}>
                             {props.isCollapsed?">":"<"}
                         </button>
                    </div>
                </div>
    );

}

export {Side};