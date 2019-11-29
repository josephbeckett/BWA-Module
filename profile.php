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
          <button id="SavedC" class="btn list-group-item list-group-item-action">Saved Cars</button>
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
              <div class="col-md-12">
                <!-- User Information Form -->
                <form id="UserInfoBox">
                  <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">User Name</label>
                    <div class="col-8">
                      <h4><?php echo $row["Username"];?></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                      <h4><?php echo $row["Email"];?></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="housenumber" class="col-4 col-form-label">House Name/Number</label>
                    <div class="col-8">
                      <h4><?php echo $row["House_Name"];?></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="addline1" class="col-4 col-form-label">Address Line 1</label>
                    <div class="col-8">
                      <h4><?php echo $row["Address_Line_2"];?></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="addline2" class="col-4 col-form-label">Address Line 2</label>
                    <div class="col-8">
                      <h4><?php echo $row["Address_Line_2"];?></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="postcode" class="col-4 col-form-label">Postcode</label>
                    <div class="col-8">
                      <h4><?php echo $row["Postcode"];?></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="DOB" class="col-4 col-form-label">Date of Birth</label>
                    <div class="col-8">
                      <h4><?php echo $formatteddateofbirth;?></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="PhoneNum" class="col-4 col-form-label">Phone Number</label>
                    <div class="col-8">
                      <h4><?php echo $row["Phone_Number"];?></h4>
                    </div>
                  </div>
                </form>

                <!-- Editing user details form -->
                <form id="EditDForm" class="hidden" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">User Name</label>
                    <div class="col-8">
                      <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $row["Username"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                      <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $row["Email"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="housenumber" class="col-4 col-form-label">House Name/Number</label>
                    <div class="col-8">
                      <input id="housenumber" name="housenumber" placeholder="House Name/Number" class="form-control here" type="text" value="<?php echo $row["House_Name"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="addline1" class="col-4 col-form-label">Address Line 1</label>
                    <div class="col-8">
                      <input id="addline1" name="addline1" placeholder="Address Line 1 " class="form-control here" type="text" value="<?php echo $row["Address_Line_1"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="addline2" class="col-4 col-form-label">Address Line 2</label>
                    <div class="col-8">
                      <input id="addline2" name="addline2" placeholder="Address Line 2 " class="form-control here" type="text" value="<?php echo $row["Address_Line_2"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="postcode" class="col-4 col-form-label">Postcode</label>
                    <div class="col-8">
                      <input id="postcode" name="postcode" placeholder="Postcode" class="form-control here" type="text" value="<?php echo $row["Postcode"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="dateofbirth" class="col-4 col-form-label">Date of Birth</label>
                    <div class="col-8">
                      <input id="dateofbirth" name="Dateofbirth" placeholder="Date of Birth" class="form-control here" type="text" value="<?php echo $row["Date_Of_Birth"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="phonenumber" class="col-4 col-form-label">Phone Number</label>
                    <div class="col-8">
                      <input id="phonenumber" name="Phonenumber" placeholder="Phone Number" class="form-control here" type="text" value="<?php echo $row["Phone_Number"]; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="Update" type="submit" class="btn btn-primary">Update My Profile</button>
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/carsave.js"></script>
<script src="js/all.js"></script>
<script src="js/stylesheet.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
