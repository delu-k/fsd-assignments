function del() {
  document.getElementById("demo").remove();
}

function getkot() {
  const collection = document.getElementsByTagName("img");
  var l = 985;
  var w = 460;

  for(let i = 0; i < collection.length; i++){
    collection[i].src = "https://placekitten.com/"+l+"/"+w;
    l -= 10;
    w += 10;
  }
}

function hidecar() {
  if(document.getElementById("demo").hidden == false) {
    document.getElementById("demo").hidden = true;
  }
  else {
    document.getElementById("demo").hidden = false;
  }
}

function chngmode() {
  document.body.classList.toggle("light-mode");
  // $(document).ready(function(){
  //   $("button").click(function(){
  //     $("#mode").html("Light mode");
  //   });
  // });
}