import {Layout} from "../../widgets";
import {useNavigate} from "react-router-dom";

const References = () => {
    const navigate = useNavigate();

    return (
        <Layout>
            <ul className="list-group">
                <li className="list-group-item list-group-item-action" onClick={() => navigate("bp/")}>
                    Бизнес-процессы_Таблица
                </li>
                <li className="list-group-item list-group-item-action" onClick={() => navigate("bp2/")}>
                    Бизнес-процессы_Дерево
                </li>
                <li className="list-group-item list-group-item-action">Бизнес-процессы-1</li>
                <li className="list-group-item list-group-item-action">Бизнес-процессы-2</li>
            </ul>
        </Layout>
    );
}

export {References}