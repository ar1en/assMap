import {Header, Side} from "../../widgets";
import {Container, Row ,Col} from "react-bootstrap";
import style from "./main.module.css"

const MainPage = () => {

  return(
      <>
          <div className={style.header}>
              <Header/>
          </div>

          <Container className={style.middle}>
              <Row>
                  <Col ><Side/></Col>
                  <Col>
                      <div className={style.content}>
                          Content1<br/>Content2<br/>Content3<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                          Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
                      </div>

                  </Col>
              </Row>
          </Container>
      </>
  );
};

export {MainPage};