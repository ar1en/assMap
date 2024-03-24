const Tree = () => {

    return (
        <ul className="list-group">
            <li className="list-group-item pt-0 pb-0">
                1
            </li>
            <li className="list-group-item pt-0 pb-0">
                <details>
                    <summary>2</summary>
                    <ul className="list-group-flush">
                        <li className="list-group-item border-0 pt-0 pb-0">
                            2.1
                        </li>
                        <li className="list-group-item border-0 pt-0 pb-0">
                            <details>
                                <summary>2.2</summary>
                                <ul className="list-group-flush">
                                    <li className="list-group-item border-0 pt-0 pb-0">2.2.1</li>
                                    <li className="list-group-item border-0 pt-0 pb-0">2.2.2</li>
                                    <li className="list-group-item border-0 pt-0 pb-0">2.2.3</li>
                                </ul>
                            </details>
                        </li>
                        <li className="list-group-item border-0 pt-0 pb-0">
                            2.3
                        </li>
                    </ul>
                </details>
            </li>
            <li className="list-group-item pt-0 pb-0">
                3
            </li>
        </ul>
    );
}

export {Tree};