<?php
    $loginerror = '';
    include("login.php");

    if(isset($_SESSION['login_user'])) {
        header('location: carsearch.php');
    }
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

    <title>Arcadius Cars</title>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="index-section">
        <div class="index-box mr-4 ml-4">
          <h1>Arcadius Cars</h1>
          <h4>Log in</h4>
            <form class="index-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="Username" placeholder="Username">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" name="Password" placeholder="Password">
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" name="login" class="btn btn-primary">Sign in</button>
                    </div>
                    <div class="form-group col-md-12">
                        <h1 class="login-error-text"><?php echo $loginerror; ?></h1>
                    </div>
                </div>
            </form>
            <h3>if you don't have an account click <a href="signup.php">here</a> to create one</h3>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script rel="stylesheet" href="js/stylesheet.js"></script>
</body>

</html>
