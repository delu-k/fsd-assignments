function Header(props) {
    return <div className="mt-4 p-5 bg-primary text-white rounded">
    <div className="row">
      <div className="col-4">
        <div className="row">
          <img className="img-thumbnail" src={props.brand.imageName} />
        </div>
      </div>
      <div className="col-8">
        <div className="row">
          <h1>{props.brand.name}</h1>
        </div>
        <div className="row">
          <h2>{props.brand.desc}</h2>
        </div>
      </div>
    </div>
  </div>
  ;
  }
  
  export default Header;