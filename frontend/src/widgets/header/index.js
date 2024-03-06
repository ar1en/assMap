import {Navbar, Nav, Breadcrumb, BreadcrumbItem, Dropdown} from "react-bootstrap";
import style from "./header.module.css";
import {useStore} from "../../shared/store"

function Header (props) {

    const {logout} = useStore().auth

    return (
        <Navbar bg="light">
            <Navbar.Brand className="d-flex flex-row align-items-center" href="">
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
                            <Dropdown.Toggle className="d-flex flex-row align-items-center me-2"
                                             variant="outline"
                                             id="dropdown-basic">
                                <i className="bi bi-person-circle fs-1 me-2"></i>
                                yaddemidov1
                            </Dropdown.Toggle>
                            <Dropdown.Menu>
                                <Dropdown.Item href="#">Профиль</Dropdown.Item>
                                <Dropdown.Divider />
                                <Dropdown.Item href="/" onClick={logout}>Выйти</Dropdown.Item>
                            </Dropdown.Menu>
                        </Dropdown>
                    </Nav.Item>
                </Nav>
            </Navbar.Collapse>
        </Navbar>
    );
}

export {Header};