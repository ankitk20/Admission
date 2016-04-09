<?php unset($_SESSION['userID']); unset($_SESSION['password']); ?>
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
                <div class="field">
                    <label>Application ID</label>
                    <input name="uName" type="text">
                </div>
                <div class="field">
                    <label>Passcode</label>
                    <input name="passcode" type="text">
                </div>
            </form>
        </div>
        <div class="actions">
            <button id="btnLogin" class="ui positive right labeled icon button">
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
                <div id="misc" class="disabled step">
                    <div class="content">
                        <div class="title">Miscellaneous</div>
                        <div class="description">Course</div>
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
        <form id="admForm" class="ui form segment" action="" method="post" role="form">
            <div class="ui container page-content"></div>
        </form>
        <nav class="ui center aligned container">
            <div id="jqpagination" class="ui buttons">
                <a href="#" class="first ui button" data-action="first">
                    <i class="angle double left large icon"></i>
                </a>
                <a href="#" class="previous ui button" data-action="previous">
                    <i class="angle left large icon"></i>
                </a>
                <a href="#" class="next ui button" data-action="next">
                    <i class="angle right large icon"></i>
                </a>
                <a href="#" class="last ui button" data-action="last">
                    <i class="angle double right large icon"></i>
                </a>
            </div>
        </nav>
    </main>
    <?php require("footer.php") ?>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>
    <script src="../js/jquery.jqpagination.min.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/pagination.js"></script>
</body>

</html>
<?php unset($_SESSION['userID']); unset($_SESSION['password']); ?>
