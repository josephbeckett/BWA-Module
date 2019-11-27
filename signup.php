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

<?php
  include('navbar.php');
 ?>
    <div class="index-section">
        <div class="signup-box">
            <form class="signup-form" action="" method="post">
                <div class="form-row">
                    <div class="form-group col s6">
                        <input class="form-control" name="Username" type="text" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col s6">
                        <input class="form-control" id="password" name="Password" type="password" placeholder="Password" required aria-describedby="passwordHelpBlock">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                          Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </small>
                    </div>
                    <div class="form-group col s12">
                        <input class="form-control" id="password" name="Repeatpassword" type="password" placeholder="Repeat Password" required aria-describedby="repeatPasswordHelpBlock">
                        <small id="repeatPasswordHelpBlock" class="form-text text-muted">
                          Your passwords must match.
                        </small>
                    </div>
                </div>
                <div class="form-row">

                </div>
                <div class="form-row">
                    <div class="form-group col s12">
                        <input name="Email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
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
