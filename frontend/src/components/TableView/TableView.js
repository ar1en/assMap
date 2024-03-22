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
//
// }
import React, {useState} from "react";
import {Button} from "react-bootstrap";

function dynamicSort(property) {
    let sortOrder = 1;
    if(property[0] === "-") {
        sortOrder = -1;
        property = property.substring(1);
    }

    return function (a,b) {
        let result = (a[property] < b[property]) ? -1 : (a[property] > b[property]) ? 1 : 0;
        return result * sortOrder;
    }
}

function applyChanges(baseArr, changeArr, keyColumnName){

    changeArr.map(change => {

        if (change.type === 'edit') {
           let objIndex = baseArr.findIndex(obj => obj[keyColumnName] === change['rowId'])

           if (objIndex > -1) {
               baseArr[objIndex].keys.map(propName =>{
                   if (propName!=='rowId'){
                       baseArr[objIndex][propName] = change[propName]
                   }
               })
           }
        }
    })

}

function trackChange(changeArr, rowId, propName, newValue) {
    const resultArray = [...changeArr];

    let objIndex = resultArray.findIndex(obj => obj['rowId'] === rowId)

    if (objIndex>-1){
        resultArray[objIndex][propName] = newValue
    } else {
        let newChange = {rowId: rowId}
        newChange[propName] = newValue
        resultArray.push(newChange)
    }

    return resultArray

}

const TableView = (props) => {

    const [sortColumn, setSortColumn] = useState('');
    const [sortOrder, setSortOrder] = useState('asc');

    const [filterColumn, setFilterColumn] = useState('');
    const [filterValue, setFilterValue] = useState('');

    const [isEditingCell, setIsEditingCell] = useState(false);
    const [editibleCellName, setEditibleCellName] = useState('');
    const [currCellValue, setCurrCellValue] = useState('');

    const [diffData, setDiffData] = useState([])

    let customizedData = (filterColumn ==='' || filterValue ==='') ? props.data : props.data.filter((dataRow) => dataRow[filterColumn].includes(filterValue));

    customizedData = sortColumn ==='' ? customizedData : customizedData.sort(dynamicSort(sortOrder==='desc' ? '-' + sortColumn : sortColumn));

    const sortColumnHandler = (event) => {
        const field = event.target.accessKey==='' ? '' : event.target.accessKey.replace('btnSort_','')

        setEditibleCellName('')
        setIsEditingCell(false)

        if (field=== sortColumn) {
            if (sortOrder==='asc') {
                setSortOrder('desc')
            } else {
                setSortOrder('asc')
            }
        } else {
            setSortColumn(field)
            setSortOrder('asc')
        }
    }

    const filterColumnHandler = (event) => {
        setFilterColumn(event.target.accessKey.replace('filter_',''))
        setFilterValue(event.target.value)

        setEditibleCellName('')
        setIsEditingCell(false)
    }

    const startEditCellHandler = (initData,event) => {
      // if (event.target.accessKey[1] === props.keyColumn) {
      //     alert ("Ключевой столбец нельзя редактировать!")
      // }  else {
      setIsEditingCell(true)
      setEditibleCellName(event.target.accessKey)
      setCurrCellValue(initData)
    // }
     }

    const editCellFinishedHandler = (event) => {
        console.log(editibleCellName)
        console.log(event.target.value)
        // setDiffData((prevDiffData)=>{ trackChange(prevDiffData,editibleCellName.split('#')[0],editibleCellName.split('#')[1],event.target.value ) })

        setIsEditingCell(false)
        setEditibleCellName('')

    }

    const editCellHandler = (event) => {
       setCurrCellValue(event.target.value)
    }

    const options = (props.options === null || props.options === undefined) ? {
        isShowRowCounter: true
    } : props.options

    let rowCounter = 0

    return (
        <React.Fragment>
            <table className="table table-hover">

                <thead>
                  <tr>
                      {/* столбец для порядкового номера строк */}
                       <th key='_rwCnt' hidden={!options.isShowRowCounter}>№</th>

                       {
                           props.headers.map((col)=>(
                              <th key={col.fieldKey}>
                                 {col.fieldName}

                                  <Button key={'sort_' + col.fieldKey}
                                          accessKey={'btnSort_' + col.fieldKey}
                                          onClick={sortColumnHandler}
                                          className={ col.fieldKey === sortColumn ? ('btn btn-primary ' + (sortOrder ==='asc' ? 'bi bi-sort-alpha-down' : 'bi bi-sort-alpha-down-alt')) : 'btn btn-secondary bi bi-arrow-down-up'}
                                          size="sm"
                                  />
                              </th>
                           ))
                       }
                  </tr>

                  <tr>
                      {/* столбец для порядкового номера строк */}
                      <th key='_rwCntFilter' hidden={!options.isShowRowCounter}></th>

                      {
                          props.headers.map((col)=>(
                              <th key={'filter_' + col.fieldKey}>
                                  <input key={'filter_' + col.fieldKey} accessKey={'filter_'+col.fieldKey} onInput={filterColumnHandler}></input>
                              </th>
                          ))
                      }
                  </tr>
                </thead>

                <tbody>
                {
                    customizedData.map((row)=>(
                        <tr key={'rw_'+ row[props.keyColumn]}>
                            {/* счетчик порядкового номера строк */}
                            <th key={'rwCnt_' + row[props.keyColumn]} hidden={!options.isShowRowCounter}> {rowCounter+=1} </th>

                            {
                                props.headers.map((cell)=>(
                                    <td key={'td_' + row[props.keyColumn] + '_' + cell.fieldKey} accessKey={row[props.keyColumn] + '#' +cell.fieldKey} onDoubleClick={(event)=> startEditCellHandler(row[cell.fieldKey], event)}>
                                        { (isEditingCell &&
                                            editibleCellName === row[props.keyColumn] + '#' +cell.fieldKey )?
                                            <input onBlur={editCellFinishedHandler} onInput={editCellHandler} value={currCellValue}/>
                                            : row[cell.fieldKey] }
                                    </td>
                                ))
                            }
                        </tr>
                    ))
                }

                </tbody>
            </table>

        </React.Fragment>
    )

}

export default TableView