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
import React, {useContext, useEffect} from "react";
import TableContent from "./TableContent";
import TableViewContext, {TableViewContextProvider} from "./table-context";
import TableHead from "./TableHead";
import ErrorModal from "../alert";


const TableView = ({data: {header, data}, keyColumn}) => {

    return (
            <TableViewContextProvider data={data} header={header} keyColumn={keyColumn}>
                <table className='table'>
                    <TableHead/>
                    <TableContent/>
                </table>
            </TableViewContextProvider>
    )
}

export {TableView}