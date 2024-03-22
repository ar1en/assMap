import PageWrapper from "../../../widgets/pageWrapper";
import React from "react";
import TableView from "../../../components/TableView/TableView";

const headersArr = [
    {
       fieldKey: 'k1',
       fieldName: 'Колонка 1'
    },
    {
        fieldKey: 'k2',
        fieldName: 'Колонка 2'
    },
    {
        fieldKey: 'k3',
        fieldName: 'Колонка 2'
    },
]


const testData = [
    {
        k1: 'key 111',
        k2: 'eata 12',
        k3: 'data 13'
    },
    {
        k1: 'key 112',
        k2: 'aata 22',
        k3: 'pata 23'
    },
    {
        k1: 'key 132',
        k2: 'nata 32',
        k3: 'aata 33'
    }

]

const BusinessProcess = () =>{

  return (
      <PageWrapper>

          <TableView headers={headersArr} data={testData} keyColumn='k1'/>

      </PageWrapper>
  )

}

export default BusinessProcess