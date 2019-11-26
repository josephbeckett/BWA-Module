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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 column-2">
        <div class="list-group mb-2 mt-2 sticky-group">
          <a href="#" class="list-group-item list-group-item-action active">Recent searches</a>
          <?php
          $rsbt = "SELECT * FROM recentsearch WHERE userID = $userID ORDER BY timeSearched DESC LIMIT 5";
          $rsbtq = mysqli_query($conn, $rsbt);
          $rsbtqr = mysqli_num_rows($rsbtq);
          if ($rsbtqr > 0) {
            while ($rsbtqrow  = mysqli_fetch_assoc($rsbtq)) {
              echo'
              <a href="#" class="list-group-item list-group-item-action">'. $rsbtqrow['searchQuery'] .'</a>
              ';
            }
          }
          ?>
          <a href="#" class="list-group-item list-group-item-action active"> Most Searched</a>
          <?php
          $recentsearches = "SELECT * FROM recentsearch WHERE userID = $userID ORDER BY amountSearched DESC LIMIT 5";
          $rsq = mysqli_query($conn, $recentsearches);
          $rsqr = mysqli_num_rows($rsq);
          if ($rsqr > 0) {
            while ($rsqrow  = mysqli_fetch_assoc($rsq)) {
              echo'
              <a href="#" class="list-group-item list-group-item-action">'. $rsqrow['searchQuery'] .'</a>
              ';
            }
          }
          ?>
        </div>
      </div>
      <div class="col-sm-10 bg-light">
        <div class="row mt-2">
            <form class="input-group input-group-search mb-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
              <input class="car-search-input form-control ml-3" type="text" name="search" placeholder="Search for a car">
              <div class="input-group-append">
                <button class="car-search-button btn" type="submit" name="submit-search"><i class="fas fa-search"></i></button>
                <button class="car-favourite-button btn" type="submit" name="favourite-search"><i class="fas fa-bookmark"></i></button>
              </div>
            </form>
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
            //checking recent search
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
                  $searchtime = date("Y/m/d G:i:sa");
                  $update_sql = "UPDATE recentsearch SET amountSearched='$amount', timeSearched='$searchtime' WHERE searchQuery='$search' AND userID='$userID';";
                  mysqli_query($conn, $update_sql);
                } else {
                  header("location: carsearch.php");
                }
              } else {
                $searchcheck = "SELECT searchQuery FROM recentsearch";
                if ($search)
                $searchtime = date("Y/m/d G:i:sa");
                // add query to database
                $insert_sql = "INSERT INTO recentsearch (userID, searchQuery, amountSearched, timeSearched) VALUES ('$userID', '$search', '1', '$searchtime');";
                mysqli_query($conn, $insert_sql);
              }
              //searching database
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
              <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <p>You currently have no favourited cars</p>
              </div>
              ';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/carsave.js"></script>
  <script src="js/all.js"></script>
  <script src="js/stylesheet.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>


</html>
