import {Button} from "react-bootstrap";
import styles from "./references.module.css";


const References = () => {

    return (
        <ul className={styles.ul}>
            <li >
                <Button href='/reference/businessProcess' >
                        Бизнес-процессы
                </Button>
            </li>
        </ul>
    );

}

export default References