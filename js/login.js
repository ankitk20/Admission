$(function() {

    /* focus restricted to modal..... added tabindex attribute to modal elements*/
    $('#btnLogin').on('focusout',function(event){
        $('#uName').focus();
    });

    /* modal not displayed if logged in */
    var loggedInRequest, loginRequest, logoutRequest;
    if (loggedInRequest) { loggedInRequest.abort(); }

    /* modal validation using ajax */
    loggedInRequest = $.get('backend/autoLogin.php');

    loggedInRequest.done(function(response, status, err) {
        if (response === "no") {
            var loginModal = $('#loginModal');
            var loginForm = loginModal.find('#loginForm');

            loginForm.form({
                fields: {
                    uName: 'empty',
                    passcode: 'empty'
                },
                prompt: {
                    empty: '{name} is required'
                },
                inline: true,
                on: 'blur'
            });

            loginModal.modal({
                    blurring: true,
                    closable: false,
                    transition: 'fade',
                    onApprove: function() {
                        if (loginForm.form('is valid')) {
                            if (loginRequest) { loginRequest.abort(); }

                            loginRequest = $.post('backend/authenticateUser.php', $('#loginForm').serialize());

                            loginRequest.done(function(response, status, xhr) {
                                $('#loginModal').modal(response);
                            });

                            loginRequest.fail(function(xhr, status, err) {
                                console.error("Error occurred: " + status + err);
                            });

                            return false;
                        } else {
                            return false;
                        }
                    }
                })
                .modal('show');

            loginModal.find('.message .close').click(function() {
                $(this).closest('.message').transition('fade');
            });
        }
    });

    loggedInRequest.fail(function(xhr, status, err) {
        console.error("Error occurred: " + status + err);
    });

    /* logout button */
    $('#btnLogout').click(function() {
        if (logoutRequest) { logoutRequest.abort(); }

        logoutRequest = $.get('backend/logout.php');

        logoutRequest.done(function(response, status, xhr) {
            alert('You have been logged out.');
            location.reload(false);
        });

        logoutRequest.fail(function(xhr, status, err) {
            console.error("Error occurred: " + status + err);
        });
    });
});
