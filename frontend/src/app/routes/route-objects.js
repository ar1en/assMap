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
];

export default routeObjects;