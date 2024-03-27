
const TreeNode = ({nodeData:data}) => {
    return(
        <li className="list-group-item pt-0 pb-0 rounded-0 border-bottom">
            {data.children && (
                <details>
                    <summary>{data.name}</summary>
                    <Tree data={data.children}/>
                </details>
            )}
            {!data.children && data.name}
        </li>
    );
}
const Tree = ({data}) => {

    return (
        <ul className="list-group-flush">
            {data?.map((node) => (
                <TreeNode nodeData={node} key={node.id}/>
            ))}
        </ul>
    );
}

export {Tree};