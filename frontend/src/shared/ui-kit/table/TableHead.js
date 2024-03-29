import React, {useCallback, useContext, useEffect, useRef, useState} from "react";
import {Button} from "react-bootstrap";
import TableViewContext from "./table-context";
import styles from "./table.module.css"

const TableHead = (props) => {

    const ctx = useContext(TableViewContext)



    return (
        <thead className="table table-primary">

        <tr>
            {/* столбец для порядкового номера строк */}
            {/*<th key='_rwCnt' hidden={!options.isShowRowCounter}>№</th>*/}

            <th key='_rwCnt'>№</th>

            {
                  ctx.header.length>0 && ctx.header.map((col) => (
                    <th key={col.key}  align='center'>
                            {col.name}
                    </th>
                ))
            }
        </tr>

        <tr>
            {/* столбец для порядкового номера строк */}
            {/*<th key='_rwCntFilter' hidden={!options.isShowRowCounter}></th>*/}
            <th key='_rwCntFilter'></th>

            {
                ctx.header.length>0 && ctx.header.map((col) => (
                    <th key={'filter_' + col.key}>
                        <div className='d-flex justify-content-between align-items-center'>
                            <input className={styles.filterBox} key={'filter_' + col.key} accessKey={'filter_' + col.key}
                                   onInput={ctx.onFilterColumn}></input>


                            <Button key={'sort_' + col.key}
                                    accessKey={'btnSort_' + col.key}
                                    onClick={ctx.onSortColumn}
                                    className={col.key === ctx.sortColumn ? ("btn btn-primary " + (ctx.sortOrder === "asc" ? "bi bi-sort-alpha-down" : "bi bi-sort-alpha-down-alt")) : "btn btn-secondary bi bi-arrow-down-up"}
                                    size="sm"
                            />
                        </div>
                    </th>
                ))
            }
        </tr>
        </thead>
    )
}

export default TableHead