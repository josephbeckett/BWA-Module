<?php
include("session.php");
include('updateuser.php');
$dateofbirth = $row['Date_Of_Birth'];
$formatteddateofbirth = date("d-m-Y", strtotime($dateofbirth));
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
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <button id="UserM" class="btn list-group-item list-group-item-action active">User Information</button>
          <button id="EditD" class="btn list-group-item list-group-item-action">Edit Personal Details</button>
          <button id="SavedC" class="btn list-group-item list-group-item-action">Favourite Cars</button>
          <button id="Searches" class="btn list-group-item list-group-item-action">Searches</button>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h4 id="TabTitle">User Information</h4>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <!-- User Information Form -->
                <?php include('userInfoForm.php'); ?>
                <!-- Editing user details form -->
                <?php include('userEditInfoForm.php'); ?>
                <!-- Displaying user favourited cars on profile -->
                <?php include('userSavedCarsForm.php'); ?>
                <!-- Displaying user searches on profile -->
                <?php include('userSearchesForm.php'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/carsave.js"></script>
<script src="js/all.js"></script>
<script src="js/stylesheet.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
