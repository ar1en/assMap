import {Navigate, Route, Routes} from "react-router-dom";
import routeObjects from "./route-objects";
import {useStore} from "../../shared/store";

const RoutesElement = () => {
    const {isAuthorised} = useStore().auth;

    return(
        <Routes>
            {routeObjects.map( (route) => (
                createRoute(route, isAuthorised)
                )
            )}
        </Routes>
    );
}

const createRoute = ({isPrivate, path, element}, isAuthorised) => {
    if (isPrivate) {
        return(
            <Route
                key={path}
                path={path}
                element={isAuthorised ? element : <Navigate to="/login"/>}
            />
        );
    } else {
        return(
            <Route
                key={path}
                path={path}
                element={element}
            />
        );
    }
}

export {RoutesElement};