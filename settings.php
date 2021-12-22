<?php
session_start();

//Funktionen
require_once "imports/funktionen.inc.php";

//Responsive navbar
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    require_once "imports/menubar.php";
} else {
    require_once "imports/navbar.php";
}

//Authenticated Users only
if (is_logged_in() != true)
    header('Location: index.php');


$user = getUsername($_SESSION['user']);


if ($_POST) {

    $newname = $_POST['name'];
    $newloginname = $_POST['loginname'];
    $newpassword = $_POST['passwort'];

    $update = false;
    $update = changeUsersettings($_SESSION['user'], $newname, $newloginname, $newpassword);
}

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada</title>

    <!-- Favicon-->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico?" />
    <!-- CSS-->
    <link rel="stylesheet" href="scss/index.css" />
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <h1 class="display-4">Settings</h1>
            <?php if(!$_POST) { ?>
            <form action="" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name"
                        name="name" placeholder="Enter Name" value="<?=$user['Name']?>"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Loginname</label>
                    <input type="text" class="form-control" id="loginname" name="loginname"
                        placeholder="Loginname" value="<?=$user['Loginname']?>" required>
                </div>
                <div class="form-group">
                    <label for="Passwort">Passwort</label>
                    <input type="password" class="form-control" id="Passwort" name="passwort"
                        placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php } elseif($_POST) { ?>
            <?php if($update == true) { ?>
                        <div class="alert alert-success" role="alert">
                        <p><i class="fas fa-check-circle fa-7x"></i></p>
                        <p>Settings applied</p>
                    </div>
                    <a href="dashboard.php"><button type="button" class="btn btn-primary btn-lg btn-block">Back to Home</button></a>
            <?php } else { ?>
                <div class="alert alert-danger" role="alert">
                        <p><i class="fas fa-times-circle fa-7x"></i></p>
                        <p>Update Failed!</p>
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

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/f072a47e74.js" crossorigin="anonymous"></script>
</body>

</html>