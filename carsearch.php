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


  <title>Car Search</title>
</head>

<body>
  <?php
  include "navbar.php";
  include "savecar.php";
  ?>
  <div class="container">
    <div class="row">
      <div class='car-search-box'>
        <form class="car-search-form" action="carsearch.php" method="POST">
          <input class="car-search-input" type="text" name="search" placeholder="Search for a car">
          <button class="car-search-button" type="submit" name="submit-search">Search</button>
          <button class="car-favourite-button" type="submit" name="favourite-search">Favourites</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="recent-box">
          <?php
          $recentsearches = "SELECT * FROM recentsearch WHERE userID = $userID ORDER BY amountSearched DESC LIMIT 5";
          $rsq = mysqli_query($conn, $recentsearches);
          $rsqr = mysqli_num_rows($rsq);
          if ($rsqr > 0) {
            while ($rsqrow  = mysqli_fetch_assoc($rsq)) {
              echo'
              <div class="mb-2">
              <span class="badge badge-pill badge-info">'. $rsqrow['searchQuery'] .'</span>
              </div>
              ';
            }
          }
          ?>
      </div>
    </div>
    <div class="row">
      <?php
      if (!isset($_POST['submit-search']) && !isset($_POST['favourite-search'])) {
        $carlist = 'SELECT * FROM Cars';
        $carresults = mysqli_query($conn, $carlist);
        $queryResult = mysqli_num_rows($carresults);
        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($carresults)) {
            include("cardisplayform.php");
          }
        }
      } else if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        if ($search == "") {
          header("location: carsearch.php");
        } else {
          // check if query is already saved
          $recentsql = "SELECT * FROM recentsearch WHERE userID='$userID' AND searchQuery='$search';";
          $searchresults = mysqli_query($conn, $recentsql);
          $resultCheck = mysqli_num_rows($searchresults);
          if ($resultCheck > 0) {
            // increment the frequency column
            if ($searchrow = mysqli_fetch_assoc($searchresults)) {
              $amount = $searchrow['amountSearched'] + 1;
              $update_sql = "UPDATE recentsearch SET amountSearched='$amount' WHERE searchQuery='$search' AND userID='$userID';";
              mysqli_query($conn, $update_sql);
            } else {
              header("location: carsearch.php?amount".$amount);
            }
          } else {
            // add query to database
            $insert_sql = "INSERT INTO recentsearch (userID, searchQuery, amountSearched) VALUES ('$userID', '$search', '1');";
            mysqli_query($conn, $insert_sql);
          }
          $sql = "SELECT * FROM Cars WHERE Make LIKE '%$search%' OR Model LIKE '%$search%' OR Fuel_Type LIKE '%$search%'
          OR Year LIKE '%$search%' OR Engine_Size LIKE '%$search%' OR Colour LIKE '%$search%'";
          $results = mysqli_query($conn, $sql);
          $queryResult = mysqli_num_rows($results);
          if ($queryResult > 0) {
            while ($row  = mysqli_fetch_assoc($results)) {
              include("cardisplayform.php");
            }
          } else {
            echo 'no results match your search';
          }
        }
      } else if (isset($_POST['favourite-search'])) {
        $search = "SELECT * FROM Favourites INNER JOIN Cars ON Favourites.carID = Cars.carID WHERE Favourites.userID = $userID";
        $searchresult = mysqli_query($conn, $search);
        $searchrow = mysqli_num_rows($searchresult);
        if ($searchrow >= 1) {
          while ($row = mysqli_fetch_assoc($searchresult)) {
            include("cardisplayform.php");
          }
        } else {
          echo '
          <div>
          <p>You currently have no favourited cars</p>
          </div>
          ';
        }
      }
      ?>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/carsave.js"></script>
  <script src="js/all.js"></script>

</body>


</html>
