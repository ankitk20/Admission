$(function() {
    $.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $('#admForm').validate({
        rules: {
            fName: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            lName: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            pincode: {
                required: true,
                minlength: 6,
                maxlength: 6
            },
            mobNo: {
                required: true,
                minlength: 10,
                maxlength: 10
            }
        },
        messages: {
            fName: {
                minlength: 'First name must be at least {0} characters long',
                maxlength: 'First name must be at most {0} characters long'
            },
            lName: {
                minlength: 'Last name must be at least {0} characters long',
                maxlength: 'Last name must be at most {0} characters long'
            },
            mobNo: {
                minlength: 'Mobile number has to be {0} digits only',
                maxlength: 'Mobile number has to be {0} digits only'
            }
        }
    });
});

function emailCheck(){ 
  var regex = /^[^~`!^=@#%$&*+-]{3,}@(g|hot)mail[.]com$/;
  var email = document.getElementById('email').value;
  var emailTest = regex.test(email);
  if(emailTest){
    return true;
  }
  else{
    document.getElementById('emailLabel').innerHTML="InvalidEmail";
    document.getElementById('emailLabel').style.color="red";
    return false;
  }         
 }
