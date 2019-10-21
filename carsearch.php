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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi|Manjari&display=swap" rel="stylesheet">


    <title>Car Search</title>
</head>

<body>
    <?php
    include "navbar.php"
    ?>
    <div class="container">
        <div class="row">
            <div class='car-search-box'>
                <form class="car-search-form" action="carsearch.php" method="POST">
                    <input class="car-search-input" type="text" name="search" placeholder="Search for a car">
                    <button class="car-search-button" type="submit" name="submit-search">Search</button>
                    <button class="car-search-button" type="submit" name="favourite-search">Favourites</button>
                </form>
            </div>
        </div>
        <div class="row">
            <?php
            if (!isset($_POST['submit-search'])) {
                $carlist = 'SELECT * FROM Cars';
                $carresults = mysqli_query($conn, $carlist);
                $queryResult = mysqli_num_rows($carresults);
                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($carresults)) {
                        $caruploaddate = $row['Date_Uploaded'];
                        $userID = $_SESSION['userID'];
                        $formattedcaruploadeddate = date("d-m-Y", strtotime($caruploaddate));
                        $carimage = $row['Picture'];
                        include_once('savecar.php');
                        include("cardisplayform.php");
                    }
                }
            } else if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM Cars WHERE Make LIKE '%$search%' OR Model LIKE '%$search%' OR Fuel_Type LIKE '%$search%'
                        OR Year LIKE '%$search%' OR Engine_Size LIKE '%$search%' OR Colour LIKE '%$search%'";
                $results = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($results);
                if ($queryResult > 0) {
                    while ($row  = mysqli_fetch_assoc($results)) {
                        $caruploaddate = $row['Date_Uploaded'];
                        $formattedcaruploadeddate = date("d-m-Y", strtotime($caruploaddate));
                        $carimage = $row['Picture'];
                        include_once('savecar.php');
                        include("cardisplayform.php");
                    }
                } else {
                    echo 'no results match your search';
                }
            } else if (isset($_POST['favourite-search'])) {
                $userID = $_SESSION['userID'];
                $search = "SELECT * FROM Cars c INNER JOIN Favourites f ON c.carID = f.carID WHERE f.userID = $userID";
                $searchresult = mysqli_query($conn, $search);
                $searchrow = mysqli_num_rows($searchresult);
                if ($searchrow > 0) {
                    while ($row = mysqli_fetch_assoc($searchresult)) {
                        echo '           
                    ' . $searchresult .
                        include_once('savecar.php');
                        include("cardisplayform.php");
                    }
                } else if ($searchrow < 1) {
                    echo '
                <div>
                    <p>there are no favourite results</p>
                </div>
                ';
                }
            }
            ?>
        </div>
    </div>
<script src="js/all.js"></script>
</body>
            

</html>


<!-- // determine if user has already liked the vehicle
// $results = mysqli_query($conn, "SELECT * FROM saved_vehicles WHERE id_user=$uid AND id_vehicle=".$row['idvehicle']."");
// // if user has liked the vehicle echo this
// if (mysqli_num_rows($results) == 1) {
// echo '
// <button data-id="'.$row['carID'].'" class="unlike btn btn-danger"><i class="fa fa-heart" aria-hidden="true"></i></button>
// <button data-id="'.$row['carID'].'" class="like hidden btn btn-danger"><i class="fa fa-heart-o" aria-hidden="true"></i></i></button>
// ';
// } else {
// echo '
// <button data-id="'.$row['carID'].'" class="unlike hidden btn btn-danger"><i class="fa fa-heart" aria-hidden="true"></i></button>
// <button data-id="'.$row['carID'].'" class="like btn btn-danger"><i class="fa fa-heart-o" aria-hidden="true"></i></i></button>
// ';
// } -->