const Tree = () => {

    return (
        <ul className="list-group">
            <li className="list-group-item">
                1
            </li>
            <li className="list-group-item">
                2
                <ul className="list-group-flush">
                    <li className="list-group-item">
                        2.1
                    </li>
                    <li className="list-group-item">
                        2.2
                    </li>
                    <li className="list-group-item">
                        2.3
                    </li>
                </ul>
            </li>
            <li className="list-group-item">
                3
            </li>
        </ul>
    );
}

export default Tree;