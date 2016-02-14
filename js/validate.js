$(document).ready(function(){
		$('#admForm').validate({
		rules:{
			 fName:{
			 	required:true,
			    minlength:3,
			    maxlength:20  }
			,lName:{
			 	required:true,
			    minlength:3,
			    maxlength:20  }
			,religion:'required'
			,dob:'required'
			,mobNo:{
				required:true
				,minlength:10    
				,maxlength:10    }
		}
		messages:{
			fName:{
				required:'Enter First Name'
				,minlength:'Name too short'
				,maxlength:'Name too long'  }

			,lName:{
				required:'Enter First Name'
				,minlength:'Name too short'
				,maxlength:'Name too long'  }	

			,religion:'Enter your Religion'			
			,dob:'Enter your BirthDate'
			,mobNo:{
				required:'Enter your contact number'
				,minlength:'Mobile number has to be 10 digits only' 
				,maxlength:'Mobile number has to be 10 digits only' }
		}
		});
    });