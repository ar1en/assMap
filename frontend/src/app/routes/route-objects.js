import {Login, MainPage, ProtectedPage} from "../../pages";


const routeObjects = [
    {
        isPrivate: true,
        path:'/',
        element: <MainPage/>
    },
    {
        isPrivate: false,
        path: '/login',
        element: <Login />,
    },
    {
        isPrivate: true,
        path: '/page',
        element: <ProtectedPage />,
    },
    {
        isPrivate: true,
        path: '/reference',
        element: <ProtectedPage contentType='reference' contentSubType='' />,
    },
    {
        isPrivate: true,
        path: '/reference/businessProcess',
        element: <ProtectedPage contentType='reference' contentSubType='businessProcess' />,
    }
];

export default routeObjects;