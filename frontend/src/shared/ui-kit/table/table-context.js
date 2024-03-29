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
        filters: [],
        sortedColumn: "",
        sortOrder: "asc",

        onSortColumn: (event) => {},
        onFilterColumn: (event) => {},
        onStartEdit: (initData,event) => {},
        onFinishEdit: (event) => {}
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

export const TableViewContextProvider = (props) => {
    const [sortColumn, setSortColumn] = useState('');
    const [sortOrder, setSortOrder] = useState('asc');

    const [filterColumn, setFilterColumn] = useState('');
    const [filterValue, setFilterValue] = useState('');

    const [isEditingCell, setIsEditingCell] = useState(false);
    const [editibleCellName, setEditibleCellName] = useState('');
    const [currCellValue, setCurrCellValue] = useState('');

    const [modifiedData, setModifiedData] = useState(props.data.length > 0 ? props.data.map((_arrayElement) => Object.assign({}, _arrayElement)) : [])


    useEffect(() => {
        setModifiedData(props.data.length > 0 ? props.data.map((_arrayElement) => Object.assign({}, _arrayElement)) : [])
    }, [props.data])

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
        if ( event.target.accessKey.split('#')[1] === props.keyColumn) {
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

        const objIndex = modifiedData.findIndex(obj => obj[props.keyColumn] === editibleCellName.split('#')[0])
        const objIndexInitial = props.data.findIndex(obj => obj[props.keyColumn] === editibleCellName.split('#')[0])

        const newValue = event.target.value
        const propName = editibleCellName.split('#')[1]

        if (objIndex > -1) {
            setModifiedData(prevModifiedData => {
                let newData = prevModifiedData;
                newData[objIndex][propName] = newValue;

                if (objIndexInitial > -1){
                    if (newData[objIndex][propName] === props.data[objIndexInitial][propName]){
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


    let customizedData = (filterColumn === '' || filterValue === '') ? modifiedData : modifiedData.filter((dataRow) => dataRow[filterColumn].includes(filterValue));
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
                   filters: [],
                   sortColumn: sortColumn,
                   sortOrder: sortOrder,
                   onSortColumn: sortColumnHandler,
                   onFilterColumn: filterColumnHandler,
                   onStartEdit: startEditCellHandler,
                   onFinishEdit: editCellFinishedHandler
               }
           }>
               {props.children}
           </TableViewContext.Provider>
  )

}

export default TableViewContext
