import {LoginPage} from "../../pages/login/login-page";
import {ProtectedPage} from "../../pages/protected-page";


const routeObjects = [
    {
        isPrivate: false,
        path: '/login',
        element: <LoginPage />,
    },
    {
        isPrivate: true,
        path: '/page',
        element: <ProtectedPage />,
    },
];

export default routeObjects;