import {Button} from "react-bootstrap";
import styles from "./references.module.css";
import PageWrapper from "../../widgets/pageWrapper";


const References = () => {

    return (
        <PageWrapper>
            <ul className={styles.ul}>
                <li >
                    <Button href='/businessProcess' >
                            Бизнес-процессы
                    </Button>
                </li>
            </ul>
        </PageWrapper>
    );

}

export default References