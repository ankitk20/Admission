function emailCheck(){ 
  var regex = /^[^~`!^=@#%$&*+-]{3,}@(g|hot)mail[.]com$/g;
  var email = document.getElementById('email').value;
  regex.lastIndex=0;
  var emailTest = regex.test(email);
  if(emailTest){
    document.getElementById('emailLabel').innerHTML="Validated";
    return true;
  }
  else{
    document.getElementById('emailLabel').innerHTML="InvalidEmail";
    document.getElementById('emailLabel').style.color="red";
    return false;
  }         
}

function nameCheck(){
  var regex = /^$|^[a-zA-Z]{3,20}$/;
  var nameId = document.activeElement;
  var name = document.getElementById(nameId.id).value;
  var nameTest = regex.test(name);
  if(nameTest){
    document.getElementById(nameId.id).nextSibling.innerHTML="";
    return true;
  }
  else{
    document.getElementById(nameId.id).nextSibling.innerHTML="Name Mispelled";
    return false;
  }
}