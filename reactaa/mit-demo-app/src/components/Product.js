function Product(props) {
  const show = (a) => {
    alert(a);
  }
    return <div className="card" style={{ width: "18rem" }}>
    <img
      src={props.product.imageURL}
      className="card-img-top"
      alt="..."
    />
    <div className="card-body">
      <h5 className="card-title">{props.product.name}</h5>
      <p className="card-text">{props.product.price}</p>
      <button className="btn btn-primary" onClick={()=>show(props.product.name)}>Show Details</button>
    </div>
  </div>;
  }
  
  export default Product;