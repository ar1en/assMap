import PageWrapper from "../../widgets/pageWrapper"
import References from "../references";
import BusinessProcess from "../references/business-process";

const ProtectedPage = (props) => {
    return(
      <PageWrapper>
          {props.contentType === 'reference' && props.contentSubType === '' && <References/>}
          {props.contentType === 'reference' && props.contentSubType === 'businessProcess' && <BusinessProcess/>}

      </PageWrapper>
  );
};

export {ProtectedPage};