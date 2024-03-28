import {authenticatedRequest} from "../../../shared/api.js";
import data from "./dummy.json";

// const getBPData = () => {
//     return authenticatedRequest("GET", "/processes/", "?per-page=1000")
// }


const getBPData = async () => {
    authenticatedRequest("GET", "/processes/")
        .then(response =>{
            // console.log(response.data)
            return({ header: data.header,
                     data: response.data});
        })
        .catch(error => {
            console.error(error);
            return({ header: data.header,
                     data: []});
        });
};


const getBP = () => {
    return data;
}

export {getBP, getBPData};