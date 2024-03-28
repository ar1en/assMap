import {Layout} from "../../../widgets";
import {TableView} from "../../../shared/ui-kit";

import {useEffect, useState} from "react";
import {authenticatedRequest} from "../../../shared/api";
import {getBP} from "../../../entities";


const BP = (props) =>{
    /*КОСТЫЛЬ ДЛЯ ЗАМЕНЫ-->*/
    const [data, setData] = useState(getBP());

    useEffect(() => {
        authenticatedRequest("GET", "/processes/?per-page=1000")
            .then(response =>{
                setData({ header: data.header,
                                data: response.data});
            })
            .catch(error => {
                setData(getBP().data[0].id="Ошибка при загрузке данных");
                console.error(error);
            });
    }, []);
    /*<--КОСТЫЛЬ ДЛЯ ЗАМЕНЫ*/

    return (
      <Layout>
          {/*<Table data={data} keyColumn='id'/>*/}

          <TableView data={data} keyColumn='id'/>
      </Layout>
  )
};

export {BP}