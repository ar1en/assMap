import styles from "./table.module.css";
import React, {Fragment, useContext, useEffect, useState} from "react";
import TableViewContext from "./table-context";
import ErrorModal from "../alert";

const TableContent = (props) => {

    const ctx = useContext(TableViewContext)

    let rowCounter = 0
    const editCellHandler = (event) => {
        event.target.style.height = event.target.scrollHeight + 'px';
    }

    const initCellHandler = (event) => {
        event.target.style.height = event.target.scrollHeight + 'px';
        event.target.style.width = ctx.currCellWidth + 'px';
    }

    return (
        <>
           { ctx.error && <ErrorModal title={ctx.error.title} message={ctx.error.message} onCloseModal={ctx.onError}/>}

            <tbody>
            {
                ctx.customizedData.length>0 && ctx.customizedData.map((row)=>(

                    <tr key={'rw_' + row[ctx.keyColumn]}
                        className={(row['change'] === "edit") ? "table table-warning" : ""}>

                        <th key={'rwCnt_' + row[ctx.keyColumn]}
                            className="p-0">
                                  {rowCounter += 1}
                        </th>

                        {
                            ctx.header.length>0 && ctx.header.map((cell) => (
                                <td key={'td_' + row[ctx.keyColumn] + '_' + cell.key}
                                    onDoubleClick={(event) => ctx.onStartEdit(event, row[cell.key], row[ctx.keyColumn],cell.key)}
                                    className={(row['change_'+cell.key] === "edit") ? "text-bg-warning p-0" : "p-0"}>

                                    {/*для редактирования текста*/}
                                    {(ctx.isEditing &&
                                      ctx.editCellName === row[ctx.keyColumn] + '#' + cell.key) &&
                                      cell.type === 'text' &&

                                        <div contentEditable suppressContentEditableWarning={true} onBlur={ctx.onFinishEdit}
                                                  // defaultValue={ctx.currCellValue}
                                                  className={styles.textEdit}

                                                  // onMouseOver={initCellHandler}
                                                  // onInput={editCellHandler}
                                        >
                                            {ctx.currCellValue}
                                        </div>}

                                    {/*для редактирования дат*/}
                                    {(ctx.isEditing &&
                                            ctx.editCellName === row[ctx.keyColumn] + '#' + cell.key) &&
                                        cell.type === 'date' &&

                                        <input  type="date"
                                                onBlur={ctx.onFinishEdit}
                                                defaultValue={(ctx.currCellValue === null || ctx.currCellValue === undefined || ctx.currCellValue === '') ? '' : ctx.currCellValue.toString().split(' ')[0]}

                                        />}

                                    {/*отображение в режиме просмотра*/}
                                    {(!ctx.isEditing ||
                                      ctx.editCellName !== row[ctx.keyColumn] + '#' + cell.key) &&

                                    (cell.type === "date" ?
                                        ((row[cell.key] === '' || row[cell.key] === null || row[cell.key] === undefined)  ? '' : row[cell.key].toString().split(' ')[0].slice(0,10).split('-').reverse().join('.'))
                                        :
                                        row[cell.key])
                                    }

                                </td>
                            ))
                        }
                    </tr>
                ))
            }

            </tbody>
        </>

    )

}

export default TableContent