// import logo from './logo.svg';
import './App.css';
import React, { useEffect, useState  } from 'react'
import Auth from "./components/Auth/Auth";


import TreeView from "./components/TreeView/TreeView";
import { TreeProvider, useTreeState } from "./components/TreeView/TreeContext";

function MainApp() {
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

    async function loginHandler(logPass) {

        console.log(logPass);

        const response = await fetch('http://localhost:8876/api/v1/auth/login',
            {
                method: 'POST',
                body: JSON.stringify(logPass),
                headers: {'Content-Type': 'application/json'}
            });

        let data = await response.json();

        setAuthKey(data);
        console.log(data);
    }

    async function getProcessesHandler() {

        console.log(authKey.token_type +  ' ' + authKey.access_token);

        const response = await fetch('http://localhost:8876/api/v1/processes?per-page=1000',
            {
                method: 'GET',
                // body: JSON.stringify(logPass),
                headers: {'Content-Type': 'application/json',
                          'Authorization': authKey.token_type + ' ' + authKey.access_token
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
     <div className="content" >
         <div className="App-auth">
            <Auth onAuth={loginHandler} />
            <p className='smallCaption'>{authKey.access_token}</p>
         </div>

         <p/>
         <div className="content">
             <button onClick={getProcessesHandler}>Загрузить дерево</button>
             <p/>


             <input className="input"
                 type="text"
                 placeholder="Поиск..."
                 value={searchQuery}
                 onChange={onHandleSearch}
             />

             <div>
                 <button onClick={() => dispatch({ type: "EXPAND_ALL" })}>
                     Развернуть все
                 </button>
                 <button onClick={() => dispatch({ type: "COLLAPSE_ALL" })}>
                     Свернуть все
                 </button>
             </div>

             <TreeView data={state} />
         </div>


    </div>
  );
}



export default function App() {
    return (
        <TreeProvider>
            <MainApp />
        </TreeProvider>
    );
}
