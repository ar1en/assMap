import {authenticatedRequest} from "../../../shared/api.js";
import data from "./dummy.json";

const getBPData = () => {
    authenticatedRequest("GET", "/processes/")
        .then(response =>{
                return(response.data);
        })
        .catch(error => {
            throw error;
        });
}

const getBP = () => {
    return data;
}

export {getBP, getBPData};