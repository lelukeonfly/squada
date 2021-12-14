
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0076FB;">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="logos/squada_logo_full_blank2-removebg.png" width="30" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Zur Auktion</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">Loged in</li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="logout.php">Log OUT</a></li>
            </ul>
            <?php } else { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="login.php"><button type="button" class="btn btn-secondary btn-sm" >Login</button></a>
                    </li>
                </ul>
        <?php } ?>
    </div>
</nav>