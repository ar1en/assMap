import React, {useEffect, useState} from "react"

const TableViewContext = React.createContext(
    {
        header: [],
        initialData: [],
        keyColumn: "",
        modifiedData: [],
        customizedData: [],
        isEditing: false,
        editCellName: "",
        currCellValue: "",
        filters: {},
        sortedColumn: "",
        sortOrder: "",
        error: false,

        onSortColumn: (event, columnName) => {},
        onFilterColumn: (event) => {},
        onStartEdit: (event, initData) => {},
        onFinishEdit: (event) => {},
        onError: (event) => {},
    }
)

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

function objectEquals(objectType, obj1, obj2){
    let result = false

    obj1 = (obj1 ===null || obj1 ===undefined)? '' : obj1
    obj2 = (obj2 ===null || obj2 ===undefined)? '' : obj2

    switch (objectType){
        case "date":

            result = obj1.toString().split(' ')[0] === obj2.toString().split(' ')[0]
            break;
        default:
            result = obj1 === obj2
    }

    return result;
}

export const TableViewContextProvider = (props) => {
    const [sortColumn, setSortColumn] = useState('');
    const [sortOrder, setSortOrder] = useState('asc');

    const [filters, setFilters] = useState({});

    const [isEditingCell, setIsEditingCell] = useState(false);
    const [editibleCellName, setEditibleCellName] = useState('');
    const [currCellValue, setCurrCellValue] = useState('');

    const [modifiedData, setModifiedData] = useState(props.data.length > 0 ? props.data.map((_arrayElement) => Object.assign({}, _arrayElement)) : [])

    const [error, setError] = useState(false);

    useEffect(() => {
        setModifiedData(props.data.length > 0 ? props.data.map((_arrayElement) => Object.assign({}, _arrayElement)) : [])
    }, [props.data])

    const sortColumnHandler = (event, columnName) => {
        setEditibleCellName('')
        setIsEditingCell(false)

        if (columnName === sortColumn) {
            switch (sortOrder){
                case '':
                    setSortOrder('asc'); break;
                case 'asc':
                    setSortOrder('desc'); break;
                case 'desc':
                    setSortOrder('')
                    setSortColumn('')
                    break;
            }
        } else {
            setSortColumn(columnName)
            setSortOrder('asc')
        }
    }

    const filterColumnHandler = (event, columnName) => {
        setFilters( prevFilters => {
                let newFilters =  Object.assign({}, prevFilters)

                if (Object.keys(newFilters).find(k => k === columnName)){
                    if (event.target.value === ''){
                        delete newFilters[columnName];
                    }else {
                        newFilters[columnName] = event.target.value;
                    }
                } else{
                    newFilters[columnName] = event.target.value;
                }

                return newFilters
            }
        )

        setEditibleCellName('')
        setIsEditingCell(false)
    }

    const startEditCellHandler = (event, initData, rowId, columnName) => {
        if ( columnName === props.keyColumn) {
           setError({
              title: "Предупреждение",
              message: "Данный столбец нельзя редактировать!"
           });
        }  else {
            setIsEditingCell(true);
            setEditibleCellName(rowId + "#" + columnName);
            setCurrCellValue(initData);
        }
    }

    const editCellFinishedHandler = (event) => {
        setIsEditingCell(false);
        setEditibleCellName('');

        const objIndex = modifiedData.findIndex(obj => obj[props.keyColumn] === editibleCellName.split('#')[0])
        const objIndexInitial = props.data.findIndex(obj => obj[props.keyColumn] === editibleCellName.split('#')[0])
        const headerIndex = props.header.findIndex(obj => obj['key'] === editibleCellName.split('#')[1])

        const newValue = event.target.value
        const propName = editibleCellName.split('#')[1]

        if (objIndex > -1) {
            setModifiedData(prevModifiedData => {
                let newData = prevModifiedData;
                newData[objIndex][propName] = newValue;

                if (objIndexInitial > -1) {

                    if (objectEquals(props.header[headerIndex]["type"], newData[objIndex][propName], props.data[objIndexInitial][propName])){
                        delete newData[objIndex]['change_' + propName];
                        if (!Object.keys(newData[objIndex]).find(k => k.includes('change_'))){
                            delete newData[objIndex]['change'];
                        }
                    } else {
                        newData[objIndex]['change'] = 'edit'
                        newData[objIndex]['change_'+propName] = 'edit'
                    }

                    // newData[objIndex]['change'] = (newData[objIndex][propName] === props.data[objIndexInitial][propName]) ?  '' : 'edit';
                }

                return newData; })
        }
    }

    const errorHandler = (event) => {
        setError(false);
    }

    let customizedData= modifiedData.map((_arrayElement) => Object.assign({}, _arrayElement))

    Object.keys(filters).map(fColumn => {
        customizedData = customizedData.filter((dataRow) => dataRow[fColumn].includes(filters[fColumn]))
    })

    // customizedData   = (filterColumn === '' || filterValue === '') ? customizedData : customizedData.filter((dataRow) => dataRow[filterColumn].includes(filterValue));

    customizedData = (sortColumn ==='' ? customizedData : customizedData.sort(dynamicSort(sortOrder==='desc' ? '-' + sortColumn : sortColumn)));


    return (

           <TableViewContext.Provider value={
                {
                   header: props.header,
                   initialData: props.data,
                   keyColumn: props.keyColumn,
                   modifiedData: modifiedData,
                   customizedData: customizedData,
                   isEditing: isEditingCell,
                   editCellName: editibleCellName,
                   currCellValue: currCellValue,
                   filters: filters,
                   sortColumn: sortColumn,
                   sortOrder: sortOrder,
                   error: error,
                   onSortColumn: sortColumnHandler,
                   onFilterColumn: filterColumnHandler,
                   onStartEdit: startEditCellHandler,
                   onFinishEdit: editCellFinishedHandler,
                   onError: errorHandler
               }
           }>
               {props.children}
           </TableViewContext.Provider>
  )

}

export default TableViewContext
