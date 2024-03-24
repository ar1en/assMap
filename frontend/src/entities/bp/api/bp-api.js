import {authenticatedRequest} from "../../../shared/api.js";
import data from "./dummy.json";

const getBPData = () => {
    const data = authenticatedRequest("GET", "processes/", "?per-page=1000")
        .then(() =>
            console.log(data)
        );
}

const getBP = () => {
    return data;
}

export {getBP, getBPData};