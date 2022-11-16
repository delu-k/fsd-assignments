import Header from './components/Header';
import Productlist from './components/Prodlist';
import navbar from "./components/navbar"

function App() {
  const brandInfo = { name: "Fruitr", desc: "Fruit based healthy, nutritious yet fun snacks" ,imageName:"Fruitrlogo.png" };
  
  const prods =[];
  prods[0] = { name: "Dehydrated Strawberries", price: "₹80" ,imageURL:"https://cdn3.mydukaan.io/app/image/700x700/?url=https://dukaan-us.s3.amazonaws.com/4947712/73b06276-f581-49ee-86db-792351484282/img-4910-d5b5ebde-1440-439a-a9ab-2bc359ddc785.JPG" };
  prods[1] = { name: "Dehydrated Apple slices", price: "₹90" ,imageURL:"https://cdn3.mydukaan.io/app/image/280x280/?url=https://dukaan-us.s3.amazonaws.com/4947712/73b06276-f581-49ee-86db-792351484282/img-4886-e76e9147-6989-4e02-a641-dd04c5493340.JPG" };

  return (
    
    <> 
      <navbar />   
        
      <Productlist prodlst={prods}></Productlist>
    </>
  );
}

export default App;
