import {Route, Navigate} from "react-router-dom";
import {useStore} from "../../shared/store";

const PrivateRoute = ({element, ...restProps}) => {
    const {isAuthorised} = useStore().auth;

    return(
        <Route
            {...restProps}
            element={isAuthorised ? element : <Navigate to="/login"/>}
        />
    );
};

export default PrivateRoute;