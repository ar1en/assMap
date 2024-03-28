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
import React, {useEffect, useState} from "react";
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

const TableView = ({data: {header, data}, keyColumn}) => {
    const [sortColumn, setSortColumn] = useState('');
    const [sortOrder, setSortOrder] = useState('asc');

    const [filterColumn, setFilterColumn] = useState('');
    const [filterValue, setFilterValue] = useState('');

    const [isEditingCell, setIsEditingCell] = useState(false);
    const [editibleCellName, setEditibleCellName] = useState('');
    const [currCellValue, setCurrCellValue] = useState('');

    const [modifyData, setModifyData] = useState(data.length > 0 ? data.map((_arrayElement) => Object.assign({}, _arrayElement)) : [])

    useEffect(() => {
        setModifyData(data.length > 0 ? data.map((_arrayElement) => Object.assign({}, _arrayElement)) : [])
    }, [data])

    // console.log(modifyData)

    let customizedData = (filterColumn === '' || filterValue === '') ? modifyData : modifyData.filter((dataRow) => dataRow[filterColumn].includes(filterValue));
    customizedData = (sortColumn ==='' ? customizedData : customizedData.sort(dynamicSort(sortOrder==='desc' ? '-' + sortColumn : sortColumn)));

    // console.log(customizedData)

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
        if ( event.target.accessKey.split('#')[1] === keyColumn) {
            alert ("Ключевой столбец нельзя редактировать!")
        }  else {
            setIsEditingCell(true);
            setEditibleCellName(event.target.accessKey);
            setCurrCellValue(initData);
        }
    }

    const editCellFinishedHandler = (event) => {
        setIsEditingCell(false);
        setEditibleCellName('');

        const objIndex = modifyData.findIndex(obj => obj[keyColumn] === editibleCellName.split('#')[0])
        const objIndexInitial = data.findIndex(obj => obj[keyColumn] === editibleCellName.split('#')[0])

        const newValue = event.target.value
        const propName = editibleCellName.split('#')[1]

        if (objIndex > -1) {
           setModifyData(prevModifyData => {
                                                  let newData = prevModifyData;
                                                  newData[objIndex][propName] = newValue;

                                                  if (objIndexInitial > -1){
                                                      newData[objIndex]['change'] = (newData[objIndex][propName] === data[objIndexInitial][propName]) ?  '' : 'edit';
                                                  }

                                                  return newData; })
        }
    }

    /*const options = (props.options === null || props.options === undefined) ? {
        isShowRowCounter: true
    } : props.options*/
    // const options = {};

    let rowCounter = 0

    return (
        <React.Fragment>
            <table className="table table-hover">

                <thead>
                <tr>
                    {/* столбец для порядкового номера строк */}
                    {/*<th key='_rwCnt' hidden={!options.isShowRowCounter}>№</th>*/}
                    <th key='_rwCnt'>№</th>

                    {
                        header.length>0 && header.map((col) => (
                            <th key={col.key}>

                               <div className="d-flex justify-content-between align-items-center">
                                   {col.name}

                                   <Button key={'sort_' + col.key}
                                           accessKey={'btnSort_' + col.key}
                                           onClick={sortColumnHandler}
                                           className={col.key === sortColumn ? ('btn btn-primary ' + (sortOrder === 'asc' ? 'bi bi-sort-alpha-down' : 'bi bi-sort-alpha-down-alt')) : 'btn btn-secondary bi bi-arrow-down-up'}
                                           size="sm"
                                   />
                               </div>

                            </th>
                        ))
                    }
                </tr>

                <tr>
                    {/* столбец для порядкового номера строк */}
                    {/*<th key='_rwCntFilter' hidden={!options.isShowRowCounter}></th>*/}
                    <th key='_rwCntFilter'></th>

                    {
                        header.length>0 && header.map((col) => (
                            <th key={'filter_' + col.key}>
                                <input key={'filter_' + col.key} accessKey={'filter_' + col.key}
                                       onInput={filterColumnHandler}></input>
                            </th>
                        ))
                    }
                </tr>
                </thead>

                <tbody>
                {
                    customizedData.length>0 && customizedData.map((row)=>(
                        <tr key={'rw_' + row[keyColumn]}
                        className={row['change'] === 'edit' ? 'table-warning' : ''}
                        >
                            {/* счетчик порядкового номера строк */}
                            {/*<th key={'rwCnt_' + row[keyColumn]} hidden={!options.isShowRowCounter}> {rowCounter+=1} </th>*/}
                            <th key={'rwCnt_' + row[keyColumn]}> {rowCounter += 1} </th>

                            {
                                header.length>0 && header.map((cell) => (
                                    <td key={'td_' + row[keyColumn] + '_' + cell.key}
                                        accessKey={row[keyColumn] + '#' + cell.key}
                                        onDoubleClick={(event) => startEditCellHandler(row[cell.key], event)}>
                                        {(isEditingCell &&
                                            editibleCellName === row[keyColumn] + '#' + cell.key) ?
                                            <textarea onBlur={editCellFinishedHandler}  //onInput={editCellHandler}
                                                   defaultValue={currCellValue}
                                                      rows="auto"
                                            />
                                            : row[cell.key]}
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

export {TableView}