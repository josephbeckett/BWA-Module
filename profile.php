<?php
include("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi|Manjari&display=swap" rel="stylesheet">
    <title>Profile</title>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="index-section">
        <div class="profile-box">
            <div class="container" id="profile-info">
              <?php
              $dateofbirth = $row['Date_Of_Birth'];
              $formatteddateofbirth = date("d-m-Y", strtotime($dateofbirth));
              if (isset($_POST['update-profile'])) {
                include("updatedetailsform.php");
              } else if (!isset($_POST['update-profile'])) {
                $search = "SELECT * FROM user WHERE userID = $userID";
                $searchresult = mysqli_query($conn, $search);
                $searchrow = mysqli_num_rows($searchresult);
                echo '
                <h1>Username: '.$row["Username"].'</h1>
                <h1>House Number or Name: '.$row['House_Name'].'</h1>
                <h1>Address Line 1: '.$row["Address_Line_1"].'</h1>
                <h1>Address Line 2: '.$row["Address_Line_2"].'</h1>
                <h1>Postcode: '.$row["Postcode"].'</h1>
                <h1>Date of Birth: '.$formatteddateofbirth.'</h1>
                <h1>Phone Number: '.$row["Phone_Number"].'</h1>
                <form action="profile.php">
                    <input class="btn btn-update" name="update-profile" type="submit" value="Update User Details" />
                </form>';
              }
              ?>

            </div>
        </div>
    </div>
</body>

</html>
