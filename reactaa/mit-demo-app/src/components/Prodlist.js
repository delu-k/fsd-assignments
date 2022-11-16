import Product from "./Product";

function Productlist(props) {    
    return <div className="row">
    <div className="col">
    <div className="col">
        <Product product={props.prodlst[0]}></Product>
    </div>
    </div>
    <div className="col">
        <Product product={props.prodlst[1]}></Product>
    </div>
  </div>;
  }
  
  export default Productlist;