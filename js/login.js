$(function() {

    /* modal not displayed if logged in */
    var loggedInRequest;
    if (loggedInRequest) { loggedInRequest.abort(); }

    /* modal validation using ajax */
    loggedInRequest = $.ajax({
        url: 'backend/autoLogin.php',
    });

    loggedInRequest.done(function(response, status, err) {
        if (response === "no") {
            $('#loginModal')
                .modal({
                    blurring: true,
                    closable: false,
                    transition: 'fade',
                    onApprove: function() {
                        var loginRequest;
                        if (loginRequest) { loginRequest.abort(); }

                        var form = $('#loginForm');
                        var sData = form.serialize();

                        loginRequest = $.ajax({
                            type: 'POST',
                            url: 'backend/authenticateUser.php',
                            data: sData,
                        });

                        loginRequest.done(function(response, status, xhr) {
                            $('#loginModal').modal(response);
                        });

                        loginRequest.fail(function(xhr, status, err) {
                            console.error("Error occurred: " + status + err);
                        });

                        return false;
                    }
                })
                .modal('show');
        }
    });

    loggedInRequest.fail(function(xhr, status, err) {
        console.error("Error occurred: " + status + err);
    });

    /* logout button */
    $('#btnLogout').click(function() {
        var logoutRequest;

        if (logoutRequest) { logoutRequest.abort(); }

        logoutRequest = $.ajax({
            url: 'backend/logout.php',
        });

        logoutRequest.done(function(response, status, xhr) {
            alert('You have been logged out.');
            location.reload(true);
        });

        logouRequest.fail(function(xhr, status, err) {
            console.error("Error occurred: " + status + err);
        });
    });
});
