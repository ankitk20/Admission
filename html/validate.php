<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <title>Admission Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
    <link href="../css/template.css" rel="stylesheet" type="text/css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700italic,700,400italic" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php require("header.php") ?>
    <main class="ui container">
        <form id="form" class="ui form segment" action="" method="post" role="form">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <input class="ui green basic button" type="submit" value="Submit">
        </form>
    </main>
    <?php require("footer.php") ?>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../semantic/dist/semantic.min.js"></script>
    <script>
    $(function() {
        var validationRules = {
            name: {
                identifier: 'name',
                rules: [{
                    type: 'empty',
                    prompt: 'This field is required'
                }, {
                    type: 'regExp[/^[a-zA-Z]{3,20}$/]',
                    prompt: 'Please enter 3-20 characters'
                }]
            },
            email: {
                identifier: 'email',
                rules: [{
                    type: 'empty',
                    prompt: 'This field is required'
                }, {
                    type: 'email',
                    prompt: 'Please enter a valid e-mail'
                }]
            },
            password: {
                identifier: 'password',
                rules: [{
                    type: 'empty',
                    prompt: 'This field is required'
                }, {
                    type: 'regExp[/^[a-zA-Z-_]{3,20}$/]',
                    prompt: 'Please enter 3-20 characters'
                }]
            },
        };

        $('#form').form({
            fields: validationRules,
            inline: true,
            on: 'blur'
        });
    });
    </script>
</body>

</html>
