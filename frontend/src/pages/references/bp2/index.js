import {Layout} from "../../../widgets";
import {Tree} from "../../../shared/ui-kit";
import {bpToTree} from "../../../entities";
import {useEffect, useState} from "react";
import {authenticatedRequest} from "../../../shared/api";

const BP2 = (props) =>{

    /*КОСЫЛЬ ДЛЯ ЗАМЕНЫ-->*/
    const [data, setData] = useState();

    useEffect(() => {
        authenticatedRequest("GET", "/processes/?per-page=1000")
            .then(response =>{
                setData(bpToTree(response.data));
            })
            .catch(error => {
                throw error;
            });
    }, []);
    /*<--КОСТЫЛЬ ДЛЯ ЗАМЕНЫ*/

    return (
      <Layout>
          <h2>Справочник бизнес-процессов</h2>
          <Tree data={data}/>
      </Layout>
  )
};

export {BP2}