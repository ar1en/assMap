import {RootStoreContext, RootStore} from "./shared/store";
import {BrowserRouter as Router } from "react-router-dom";
import {RoutesElement} from "./app/routes";

/*import {AuthForm} from "./features/auth";*/

/*import { TreeProvider, useTreeState } from "./components/TreeView/TreeContext";
import TreeView from "./components/TreeView/TreeView";
import Cookies from "js-cookie";*/

export default function App() {

    return (
        <RootStoreContext.Provider value={new RootStore}>
            <Router>
                <RoutesElement/>
            </Router>
        </RootStoreContext.Provider>
    );
}


/*function MainApp() {
    const [authKey, setAuthKey] = useState([]);
    const [processes, setProcesses] = useState([]);

    const { state, dispatch } = useTreeState();
    const [searchQuery, setSearchQuery] = useState("");

    const onHandleSearch = (e) => {
        const query = e.target.value;
        setSearchQuery(query);

        // Perform search and update filtered state
        dispatch({ type: "SEARCH", query });
    };

    useEffect(() => {
        fetchData().then((data) => {
            dispatch({ type: "INIT_DATA", data });
        });
    }, [processes]);

    function fetchData() {
        return new Promise((resolve) => {
            setTimeout(resolve, 0, processes);
        });
    }

    async function getProcessesHandler() {

        const response = await fetch('http://localhost:8876/api/v1/processes?per-page=1000',
            {
                method: 'GET',
                // body: JSON.stringify(logPass),
                headers: {'Content-Type': 'application/json',
                          'Authorization': "Bearer" + ' ' + Cookies.get('token')
                }

            });

        let data = await response.json();

        let res = data.data.reduce((acc, curr, index, orig) => {
            if (curr.parentProcess) {
                let parent = orig.find(item => {
                    return item.id === curr.parentProcess;
                });

                (parent.children = parent.children || []).push(curr);
                return acc;
            } else {
                acc.push(curr);
                return acc;
            }
        }, []);

        setProcesses(res);

        fetchData();

    }

  return (
     <div className="" >
         <div className="mb-4"></div>
         <div className="d-flex justify-content-center mb-3">
            <Auth />
         </div>

         <h5>{authKey.access_token}</h5>

         <div className="d-flex flex-column justify-content-center p-3 m-3 bg-light rounded-4">
             <h3>Древовидный справочник</h3>
             <div className="d-flex flex-row mb-3">
                 <div className="btn-group me-3">
                    <button className="btn btn-outline-primary" onClick={getProcessesHandler}>
                        <i className="bi bi-arrow-clockwise"></i>
                    </button>
                     <button className="btn btn-outline-primary"
                             onClick={() => dispatch({ type: "EXPAND_ALL" })}>
                         <i className="bi bi-plus-lg"></i>
                     </button>
                     <button className="btn btn-outline-primary"
                             onClick={() => dispatch({ type: "COLLAPSE_ALL" })}>
                         <i className="bi bi-dash-lg"></i>
                     </button>
                 </div>
                 <input className="form-control"
                        type="text"
                        placeholder="Поиск..."
                        value={searchQuery}
                        onChange={onHandleSearch}
                 />
             </div>
             <TreeView data={state}/>
         </div>
    </div>
  );
}*/

