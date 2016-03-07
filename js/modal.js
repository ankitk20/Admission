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
