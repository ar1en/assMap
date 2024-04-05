import {Navbar, Nav, Dropdown} from "react-bootstrap";
import {useStore} from "../../shared/store"
import styles from "./header.module.css"

function Header (props) {

    const {logout} = useStore().auth

    return (
        <Navbar className={styles.headerSize + " sticky-top p-0"} bg="light">
            <div className="container-fluid">
                <Navbar.Brand className="d-flex flex-row align-items-center p-0" href="">
                    <i className="bi bi-box-fill fs-1 text-primary ms-2 me-2"></i>
                    Карта гарантий
                </Navbar.Brand>
                {/*<Breadcrumb className="mx-auto">
                <BreadcrumbItem href="/">Главная</BreadcrumbItem>
                <BreadcrumbItem href="#">Текущая страница</BreadcrumbItem>
            </Breadcrumb>*/}
                <Navbar.Collapse className="justify-content-end">
                    <Nav>
                        <Nav.Item>
                            <Dropdown>
                                <Dropdown.Toggle className="d-flex flex-row align-items-center me-2 p-0 ps-2 pe-2"
                                                 variant="outline"
                                                 id="dropdown-basic">
                                    <i className="bi bi-person-circle fs-1 me-2"></i>
                                    yaddemidov1
                                </Dropdown.Toggle>
                                <Dropdown.Menu>
                                    <Dropdown.Item className="pb-0 pt-0" href="#">Профиль</Dropdown.Item>
                                    <Dropdown.Divider className="m-1"/>
                                    <Dropdown.Item className="pb-0 pt-0" href="/" onClick={logout}>Выйти</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </Nav.Item>
                    </Nav>
                </Navbar.Collapse>
            </div>
        </Navbar>
    );
}

export {Header};