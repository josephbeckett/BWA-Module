<?php
  include_once("config.php");
  ob_start();
  session_start();
  $user_check = $_SESSION["login_user"];
  $ses_sql = mysqli_query($conn,"SELECT * FROM user WHERE userID = '$user_check' ");
  $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

  $car_sql = mysqli_query($conn,"SELECT * FROM cars");
  $carrow = mysqli_fetch_array($car_sql, MYSQLI_ASSOC);


  $fav_sql = mysqli_query($conn, "SELECT * FROM favourites WHERE userID = '$user_check' ");
  $favrow = mysqli_fetch_array($fav_sql, MYSQLI_ASSOC);


  $dateofbirth = $row["Date_Of_Birth"];
  $_SESSION['userID'] = $row['userID'];
  $userID = $_SESSION['userID'];
  $_SESSION['useremail'] = $row['Email'];
  if(!isset($_SESSION["login_user"])){
    header("location: index.php");
  }
?>
