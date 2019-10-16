<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand"><img width="30" height="30" src="assets/Web Icon.png" alt=""></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php
            if (isset($_SESSION["login_user"])) {
            echo '
            <li class="nav-item">
                <a class="nav-link" href="carsearch.php">Car Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signout.php">Sign out</a>
            </li>
            ';
            } else {
             echo '
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
            </li>
             <li class="nav-item ">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>';
            }
            ?>
        </ul>

    </div>
</nav>