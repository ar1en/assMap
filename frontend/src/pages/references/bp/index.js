import {Layout} from "../../../widgets";
import {Table} from "../../../shared/ui-kit";
import {getBP} from "../../../entities";

const BP = (props) =>{
    const data = getBP();

    return (
      <Layout>
          <Table data={data} keyColumn='id'/>
      </Layout>
  )
};

export {BP}