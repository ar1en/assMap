import {Login, MainPage, ProtectedPage, References, BP, BP2} from "../../pages";

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
        element: <References/>,
    },
    {
        isPrivate: true,
        path: '/reference/bp',
        element: <BP/>,
    },
    {
        isPrivate: true,
        path: '/reference/bp2',
        element: <BP2/>,
    }
];

export default routeObjects;