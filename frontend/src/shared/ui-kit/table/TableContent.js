import styles from "./table.module.css";
import React, {useContext, useEffect, useState} from "react";
import TableViewContext from "./table-context";

const TableContent = (props) => {

    const ctx = useContext(TableViewContext)

    const [edt, setEdt] = useState(ctx.isEditing)

    let rowCounter = 0
    const editCellHandler = (event) => {
        event.target.style.height = event.target.scrollHeight + 'px';
    }

    return (
        <tbody>
        {
            ctx.customizedData.length>0 && ctx.customizedData.map((row)=>(

                <tr key={'rw_' + row[ctx.keyColumn]}
                    className={(row['change'] === "edit") ? "table table-warning" : ""}
                >
                     {/* счетчик порядкового номера строк */}
                    {/*<th key={'rwCnt_' + row[keyColumn]} hidden={!options.isShowRowCounter}> {rowCounter+=1} </th>*/}
                    <th key={'rwCnt_' + row[ctx.keyColumn]}> {rowCounter += 1} </th>

                    {
                        ctx.header.length>0 && ctx.header.map((cell) => (
                            <td key={'td_' + row[ctx.keyColumn] + '_' + cell.key}
                                accessKey={row[ctx.keyColumn] + '#' + cell.key}
                                onDoubleClick={(event) => ctx.onStartEdit(row[cell.key], event)}
                                className={(row['change_'+cell.key] === "edit") ? "text-bg-warning" : ""}>

                                    {(ctx.isEditing &&
                                        ctx.editCellName === row[ctx.keyColumn] + '#' + cell.key) ?
                                        <textarea onBlur={ctx.onFinishEdit}
                                                  defaultValue={ctx.currCellValue}
                                                  className={styles.textEdit}
                                                  onMouseOver={editCellHandler}
                                                  onInput={editCellHandler}
                                        />
                                        : row[cell.key]}

                            </td>
                        ))
                    }
                </tr>
            ))
        }

        </tbody>

    )

}

export default TableContent