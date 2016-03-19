$(function() {
    $('#loginModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Link that triggered the modal
        var recipient = button.data('type'); // Extract info from data-type attribute
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text(recipient + " Login");
        modal.find('.modal-body #usernameLabel').text(recipient == "Admin" ? "Your username" : "Your Application ID");
        modal.find('.modal-body #passwordLabel').text(recipient == "Admin" ? "Your password" : "Your secret code");
    });
});

    /* prevents the escape of tabbed-focus out of the modal */ 

            $('#loginModal :input:first').focus();

            $('#loginModal :input:last').on('keydown', function (e) { 
                if ($("this:focus") && (e.which == 9)) {
                    e.preventDefault();
                    $('#loginModal :input:first').focus();
                }
            });
   

        /* modal validation using ajax*/
 
        $('#btnLogin').click(function(){
            $userName = $('#uName').val();
            $password = $('#passcode').val();

            $.ajax({
                type:'POST',
                url:'../php/authenticateUser.php',
                data:{uName:$userName,passcode:$password},
                datatype:'html',
                success:function(data){
                    $('#loginModal').modal(data);
              }   
            }).error(function(){alert('ssssssss');});
        });   
 
