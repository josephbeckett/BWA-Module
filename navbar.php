<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand"><img width="30" height="30" src="assets/Web Icon.png" alt=""></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php
            if (isset($_SESSION["login_user"])) {
            echo '
            <li class="nav-item ">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="signout.php">Sign out</a>
            </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            
            ';
            } else {
             echo '<li class="nav-item ">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>';
            }
            ?>
        </ul>

    </div>
</nav>