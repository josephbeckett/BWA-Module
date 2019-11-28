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
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <button id="UserM" class="btn list-group-item list-group-item-action">User Management</button>
          <button id="EditD" class="btn list-group-item list-group-item-action">Edit Personal Details</button>
          <button id="SavedC" class="btn list-group-item list-group-item-action">Saved Cars</button>
          <button id="Searches" class="btn list-group-item list-group-item-action">Searches</button>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h4>Your Profile</h4>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form>
                  <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">User Name*</label>
                    <div class="col-8">
                      <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">First Name</label>
                    <div class="col-8">
                      <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Last Name</label>
                    <div class="col-8">
                      <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email*</label>
                    <div class="col-8">
                      <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="housenumber" class="col-4 col-form-label">House Name/Number</label>
                    <div class="col-8">
                      <input id="housenumber" name="housenumber" placeholder="House Name/Number" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="addline1" class="col-4 col-form-label">Address Line 1</label>
                    <div class="col-8">
                      <input id="addline1" name="addline1" placeholder="Address Line 1 " class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="addline2" class="col-4 col-form-label">Address Line 2</label>
                    <div class="col-8">
                      <input id="addline2" name="addline2" placeholder="Address Line 2 " class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="postcode" class="col-4 col-form-label">Postcode</label>
                    <div class="col-8">
                      <input id="postcode" name="postcode" placeholder="Postcode" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="index-section">
  <div class="profile-box">
  <div class="container" id="profile-info">
  <?php
  // $dateofbirth = $row['Date_Of_Birth'];
  // $formatteddateofbirth = date("d-m-Y", strtotime($dateofbirth));
  // if (isset($_POST['update-profile'])) {
  //   include("updatedetailsform.php");
  // } else if (!isset($_POST['update-profile'])) {
  //   $search = "SELECT * FROM user WHERE userID = $userID";
  //   $searchresult = mysqli_query($conn, $search);
  //   $searchrow = mysqli_num_rows($searchresult);
  //   echo '
  //   <h1>Username: '.$row["Username"].'</h1>
  //   <h1>House Number or Name: '.$row['House_Name'].'</h1>
  //   <h1>Address Line 1: '.$row["Address_Line_1"].'</h1>
  //   <h1>Address Line 2: '.$row["Address_Line_2"].'</h1>
  //   <h1>Postcode: '.$row["Postcode"].'</h1>
  //   <h1>Date of Birth: '.$formatteddateofbirth.'</h1>
  //   <h1>Phone Number: '.$row["Phone_Number"].'</h1>
  //   <form action="profile.php">
  //       <input class="btn btn-update" name="update-profile" type="submit" value="Update User Details" />
  //   </form>';
  // }
  ?>

</div>
</div>
</div>





<div class="form-group row">
  <label for="newpass" class="col-4 col-form-label">New Password</label>
  <div class="col-8">
    <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
  </div>
</div>











-->
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/carsave.js"></script>
<script src="js/all.js"></script>
<script src="js/stylesheet.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
