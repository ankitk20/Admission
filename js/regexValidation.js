function emailCheck(){ 
  var regex = /^[^~`!^=@#%$&*+-]{3,}@(g|hot)mail[.]com$/g;
  var email = document.getElementById('email').value;
  regex.lastIndex=0;   /* starts checking from the 0th index of the string after jquery validation is done */
  var emailTest = regex.test(email);
  if(emailTest){
    document.getElementById('emailLabel').innerHTML="";
    return true;
  }
  else{
    document.getElementById('emailLabel').innerHTML="InvalidEmail";
    document.getElementById('emailLabel').style.color="red";
    return false;
  }         
}
