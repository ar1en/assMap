import {Route, Routes} from "react-router-dom";
import routeObjects from "./route-objects";

const routes = () => {
    return(
        <Routes>
            {routeObjects.map( (route) => (
                route.isPrivate
                )
            )}
        </Routes>
    );
}

export {routes};