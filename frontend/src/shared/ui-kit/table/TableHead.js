import React, {useCallback, useContext, useEffect, useRef, useState} from "react";
import {Button} from "react-bootstrap";
import TableViewContext from "./table-context";
import styles from "./table.module.css";


const TableHead = (props) => {

    const ctx = useContext(TableViewContext)

    return (
        <thead className={styles.fixedHead}>

        <tr className="table table-primary">
            {/* столбец для порядкового номера строк */}
            {/*<th key='_rwCnt' hidden={!options.isShowRowCounter}>№</th>*/}

            <th key='_rwCnt'
                className="p-0 fs-6 text-center align-middle">
                №
            </th>

            {
                  ctx.header.length>0 && ctx.header.map((col) => (
                    <th className="p-0 fs-6 text-center align-middle"
                        key={col.key}
                        align='center'>
                             <div className={styles.headCaption}
                                  key={'sort_' + col.key}
                                  onClick={event => ctx.onSortColumn(event,col.key)}>

                                  {col.name}

                                  {
                                    (ctx.sortedColumn === col.key && ctx.sortOrder !== '') &&
                                        <i className={styles.smallIcon + " p-0" +  (ctx.sortOrder === "asc" ? " bi bi-arrow-down" : " bi bi-arrow-up")}/>
                                  }
                             </div>
                    </th>
                ))
            }
        </tr>

        <tr>
            {/* столбец для порядкового номера строк */}
            {/*<th key='_rwCntFilter' hidden={!options.isShowRowCounter}></th>*/}
            <th key='_rwCntFilter' className="p-0"></th>

            {
                ctx.header.length>0 && ctx.header.map((col) => (
                    <th key={'filter_' + col.key} className="p-0">
                        <div className='d-flex justify-content-between align-items-center p-0'>
                            <input className={styles.filterBox}
                                   key={'filter_' + col.key}
                                   onInput={event => ctx.onFilterColumn(event, col.key)}/>
                        </div>
                    </th>
                ))
            }
        </tr>
        </thead>
    )
}

export default TableHead