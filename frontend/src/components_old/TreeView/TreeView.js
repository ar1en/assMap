import { useTreeState } from "./TreeContext";
const TreeNode = ({ node }) => {
    const { dispatch } = useTreeState();
    return (
        <div className="ms-1 ps-3"
            style={{ color: node.isHighlight ? "tomato" : "initial" }}>
            {node.children && (
                <button className="btn btn-light"
                        onClick={() =>
                        dispatch({
                            type: "TOGGLE_NODE",
                            id: node.id,
                            isExpanded: !node.isExpanded
                        })}>
                    {node.isExpanded ? <i className="bi bi-dash-lg"></i> : <i className="bi bi-plus-lg"></i>}
                </button>
            )}
            <span>{node.name.slice(0, 100)}</span>
            {node.isExpanded && <TreeView data={node?.children} />}
        </div>
    );
};
const TreeView = ({ data }) => {
    return (
        <div className="mb-1 ms-0 ps-4">
            {data?.map((node) => (
                <TreeNode key={node.id} node={node} />
            ))}
        </div>
    );
};
export default TreeView;