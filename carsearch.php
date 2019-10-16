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

    <title>Document</title>
</head>

<body>
    <?php
        include "navbar.php"
    ?>
    <div class="container">
        <div class="row">
            <div class='car-search-box '>
                <form class="car-search-form" action="carsearch.php" method="POST">
                    <input class="car-search-input" type="text" name="search" placeholder="Search for a car">
                    <button class="car-search-button" type="submit" name="submit-search">Search</button>
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
                        $formattedcaruploadeddate = date("d-m-Y", strtotime($caruploaddate));
                        echo "
                        <div class='col-md-3 mb-3'>
                            <div class='card'>
                                <img class='card-img-top' src='assets/carstockimg.jpg' alt='Card image cap'>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $row['Make'] . "</h5>
                                    <p class='card-text'>" . $row['Model'] . "</p>
                                    <p class='card-text'>" . $row['Fuel_Type'] . "</p>
                                    <p class='card-text'>" . $row['Year'] . "</p>
                                    <p class='card-text'>" . $row['Engine_Size'] . "</p>
                                    <p class='card-text'>" . $row['Colour'] . "</p>
                                </div>
                                <div class='card-footer'>
                                    <small class='text-muted'>". $formattedcaruploadeddate . "</small>
                                </div>
                            </div>
                        </div>";
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
                        echo "
                    <div class='col-md-3 mb-3'>
                        <div class='card'>
                            <img class='card-img-top' src='assets/carstockimg.jpg' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $row['Make'] . "</h5>
                                <p class='card-text'>" . $row['Model'] . "</p>
                                <p class='card-text'>" . $row['Fuel_Type'] . "</p>
                                <p class='card-text'>" . $row['Year'] . "</p>
                                <p class='card-text'>" . $row['Engine_Size'] . "</p>
                                <p class='card-text'>" . $row['Colour'] . "</p>
                            </div>
                            <div class='card-footer'>
                                <small class='text-muted'>". $formattedcaruploadeddate ."</small>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo 'no results match your search';
                }
            }
            ?>
        </div>
    </div>

</body>

</html>