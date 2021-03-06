<?php
session_start();

//Responsive navbar
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    require_once "imports/menubar.php";
} else {
    header('Location: index.php');
}


//Funktionen
require_once "imports/funktionen.inc.php";

//Admin only
if (hasAdminPermissions($_SESSION['user']) == false) {
    header('Location: index.php');
}

if ($_POST) {
    $name = $_POST['name'];
    $loginname = $_POST['loginname'];
    $pwd = $_POST['passwort'];
    $guthaben = $_POST['guthaben'];

    $res = register($loginname, $pwd, $name, $guthaben);

}


?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada - Register</title>

    <!-- Favicon-->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico?" />
    <!-- CSS-->
    <link rel="stylesheet" href="scss/style.css" />
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <?php if (!$_POST) { ?>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="name" placeholder="Enter Name" required>
                    <small id="emailHelp" class="form-text text-muted">Please make sure that the correct name is
                        entered.</small>
                </div>
                <div class="form-group">
                    <label for="Loginname">Loginname</label>
                    <input type="text" class="form-control" id="Loginname" name="loginname"
                        placeholder="Loginname">
                </div>
                <div class="form-group">
                    <label for="Passwort">Passwort</label>
                    <input type="password" class="form-control" id="Passwort" name="passwort"
                        placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Guthaben">Set Guthaben</label>
                    <input type="text" class="form-control" id="Guthaben" name="guthaben"
                        placeholder="Guthaben">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php }  elseif ($_POST) { ?>
                <?php if ($res == true) { ?>
                    
                    <div class="alert alert-success" role="alert">
                        <p><i class="fas fa-check-circle fa-7x"></i></p>
                        <p>User Created</p>
                    </div>
                    <a href="dashboard.php"><button type="button" class="btn btn-primary btn-lg btn-block">Back to Home</button></a>
                <?php } else { ?>
                    <div class="alert alert-danger" role="alert">
                        <p><i class="fas fa-times-circle fa-7x"></i></p>
                        <p>Creation Failed!</p>
                        <p>Error: <?= $res ?></p>
                    </div>
                    <a href="dashboard.php"><button type="button" class="btn btn-primary btn-lg btn-block">Back to Home</button></a>

            <?php }} ?>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include "imports/footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>


</body>

</html>