// props structure
//----------------------------------------
// headers: [
// {
//    fieldKey: name field from dataset,
//    fieldName: displayed column name
// },
// ]
//
// data: []
// keyColumn : 'name of column contains key values'
// options: {
//            isShowRowCounter: display row counter or not
// }
import React from "react";
import TableContent from "./TableContent";
import {TableViewContextProvider} from "./table-context";
import TableHead from "./TableHead";


const TableView = ({data: {header, data}, keyColumn}) => {

    return (
            <TableViewContextProvider data={data} header={header} keyColumn={keyColumn}>
                <table className='table table-hover'>
                    <TableHead/>
                    <TableContent/>
                </table>
            </TableViewContextProvider>
    )
}

export {TableView}