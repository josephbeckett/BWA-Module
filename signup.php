<?php
    include("createuser.php");
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi|Manjari&display=swap" rel="stylesheet">

    <title>Sign Up</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand"><img width="30" height="30" src="assets/Web Icon.png" alt=""></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <div class="index-section">
        <div class="signup-box">
            <form class="signup-form" action="" method="post">
                <div class="form-row">
                    <div class="form-group col s6">
                        <input class="form-control" name="txtUsername" type="text" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s6">
                        <input class="form-control" id="password" name="txtPassword" type="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s12">
                        <input class="form-control" id="password" name="txtRepeatPassword" type="password" placeholder="Repeat Password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s12">
                        <input name="txtEmail" type="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <!-- <div class="form-row">
                    <div class="form-group col s6">
                        <input name="txtHouseNumber" type="number" class="form-control" placeholder="House Number" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s6">
                        <input name="txtAddressLine1" type="text" class="form-control" placeholder="Address Line 1" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s6">
                        <input name="txtAddressLine2" type="text" class="form-control" placeholder="Address Line 2" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s6">
                        <input name="txtPostcode" type="text" class="form-control" placeholder="Postcode" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s6">
                        <input name="txtDateOfBirth" type="date" class="form-control" placeholder="Date Of Birth" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s6">
                        <input name="txtPhoneNumber" type="number" class="form-control" placeholder="Phone Number" required>
                    </div>
                </div> -->
                <button class="btn btn-primary" name="Submit" type="submit">Sign Up</button>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script rel="stylesheet" href="js/stylesheet.js"></script>
</body>

</html>