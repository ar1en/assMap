import {Header, Side} from "../../widgets";
import {Container, Row ,Col} from "react-bootstrap";
import style from "./main.module.css"
import {useStore} from "../../shared/store";
import {useState} from "react";
import PageWrapper from "../../widgets/pageWrapper"


const MainPage = () => {

  // return(
  //     <>
  //         <div className={style.header}>
  //             <Header/>
  //         </div>
  //
  //         <div className={style.middle}>
  //                 <div ><Side/></div>
  //                 <div className={`${style.content}`}>
  //                         Content1<br/>Content2<br/>Content3<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                         Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>Content<br/>
  //                 </div>
  //         </div>
  //     </>
  // );

        // const [isSidebarCollapsed, setSidebarCollapsed] = useState(false);



        // const toggleSidebar = () => {
        //         setSidebarCollapsed(!isSidebarCollapsed);
        // };

        return (
           <PageWrapper>
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
            </PageWrapper>
        );
};

export {MainPage};