<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <title>Admission Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">
    <link rel="stylesheet" href="../css/template.css" />
    <link rel="stylesheet" href="../css/daterangepicker.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700italic,700,400italic" />
</head>

<body>
    <!-- Modal -->
    <div id="loginModal" class="ui modal">
        <div class="header">
            Login
        </div>
        <div class="content">
            <form id="loginForm" class="ui form" role="form" method="post">
                <div class="required field">
                    <label for="uName">Application ID</label>
                    <input id="uName" name="uName" type="text" tabindex="1" required>
                </div>
                <div class="required field">
                    <label for="passcode">Passcode</label>
                    <input id="passcode" name="passcode" type="password" tabindex="2" required>
                </div>
            </form>
        </div>
        <div class="actions">
            <button id="btnLogin" class="ui positive right labeled icon button" tabindex="3">
                Log Me In!
                <i class="sign in icon"></i>
            </button>
        </div>
    </div>
    <?php require("header.php") ?>
    <main class="ui container">
        <div class="ui center aligned container">
            <div class="ui ordered small steps">
                <div id="personal" class="active step">
                    <div class="content">
                        <div class="title">Personal</div>
                        <div class="description">Name, Address, etc.</div>
                    </div>
                </div>
                <div id="academic" class="disabled step">
                    <div class="content">
                        <div class="title">Academic</div>
                        <div class="description">SSC, HSC, JEE</div>
                    </div>
                </div>
                <div id="documents" class="disabled step">
                    <div class="content">
                        <div class="title">Final Step!</div>
                        <div class="description">Documents</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content ui segment"></div>
        <nav class="ui center aligned container">
            <button id="btnValidate" class="ui large green right labeled icon button">
                Validate
                <i class="checkmark icon"></i>
            </button>
        </nav>
    </main>
    <?php require("footer.php") ?>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
    <script src="../js/daterangepicker.min.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/validate.js"></script>
    <script src="../js/pagination.js"></script>
</body>

</html>
