function emailCheck(){ 
  var regex = /^[^~`!^=@#%$&*+-]{3,}@(g|hot)mail[.]com$/;
  var email = document.getElementById(document.activeElement.id).value;
  var emailTest = regex.test(email);
  if(emailTest){
    document.getElementById(document.activeElement.id).nextSibling.innerHTML="<span class='glyphicon glyphicon-ok'></span>";
    document.getElementById(document.activeElement.id).nextSibling.style.color="green";
    return true;
  }
  else if(email!=""){
    document.getElementById(document.activeElement.id).nextSibling.innerHTML="<span class='glyphicon glyphicon-remove'></span>";
    document.getElementById(document.activeElement.id).nextSibling.style.color="red";
    return false;
  }
  else{
      document.getElementById(document.activeElement.id).nextSibling.innerHTML="";
      return false;
  }  
}

function nameCheck(){
  var regex = /^[a-zA-Z]{3,20}$/;
  var nameId = document.activeElement;
  var name = document.getElementById(nameId.id).value;
  var nameTest = regex.test(name);
  if(nameTest){
    document.getElementById(document.activeElement.id).nextSibling.innerHTML="<span class='glyphicon glyphicon-ok'></span>";
    document.getElementById(document.activeElement.id).nextSibling.style.color="green";
    return true;
  }
  else if(name!=""){
    document.getElementById(document.activeElement.id).nextSibling.innerHTML="<span class='glyphicon glyphicon-remove'></span>";
    document.getElementById(document.activeElement.id).nextSibling.style.color="red";
    return false;
  }
  else{
      document.getElementById(document.activeElement.id).nextSibling.innerHTML="";
      return false;
  }
}