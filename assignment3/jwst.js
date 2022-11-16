function validateForm() {

    let pw = document.forms["myForm"]["password1"].value;
    let phnum = document.forms["myForm"]["number"].value;
    let eml = document.forms["myForm"]["email"].value
    
    if (phnum == "" || eml == "" || pw == "") {
      alert("Please fill all the fields!");
      return false;
    }
    
    if(foremail() == true && forpassword() == true && fornumber() == true)
    {
      return true;
    }
    else{
      return false;
    }
}

function fornumber()
{
    var phoneno = /^\d{10}$/;
    let phnum = document.forms["myForm"]["number"].value;

    if (phnum.match(phoneno)) {
        return true;
    }
    else{
        alert("Please fill out a valid phone no.");
        return false;
    }
}

function foremail()
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let eml = document.forms["myForm"]["email"].value
    if(eml.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        return false;
    }
}

function forpassword()
{
    //7 to 15 characters which contain at least one numeric digit and a special character
    var passw = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/; 
    let pw = document.forms["myForm"]["password1"].value; 

    if(pw.match(passw)){  
        return true; 
    }  
    else{
        alert("Fill the password properly please! It must contain 7 to 15 characters which contain at least one numeric digit and a special character");  
        return false; 
    }
}
