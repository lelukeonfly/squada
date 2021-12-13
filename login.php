<?php
    //Responsive navbar
    require "imports/navbar.php";

    //Funktionen
    require "imports/funktionen.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada</title>
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS-->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="logos/squada_logo_full_blank_transparent.png" id="icon" alt="Logo"/>
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Loginname">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="Passwort">
                <input type="submit" class="fadeIn fourth" value="Login">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>
</body>

</html>