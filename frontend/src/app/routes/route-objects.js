import {Login, MainPage, ProtectedPage} from "../../pages";
import References from "../../pages/references";
import BusinessProcess from "../../pages/references/BusinessProcess";


const routeObjects = [
    {
        isPrivate: true,
        path:'/',
        element: <MainPage/>
    },
    {
        isPrivate: false,
        path: '/login',
        element: <Login />
    },
    {
        isPrivate: true,
        path: '/page',
        element: <ProtectedPage />
    },
    {
        isPrivate: true,
        path: '/reference',
        element: <References />
    },
    {
        isPrivate: true,
        path: '/businessProcess',
        element: <BusinessProcess />
    }
];

export default routeObjects;