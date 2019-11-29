<?php
if (isset($_POST['Update'])) {
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
  $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $housename = mysqli_real_escape_string($conn, $_POST["housenumber"]);
  $addline1 = mysqli_real_escape_string($conn, $_POST["addline1"]);
  $addline2 = mysqli_real_escape_string($conn, $_POST["addline2"]);
  $postcode = mysqli_real_escape_string($conn, $_POST["postcode"]);
  $dob = mysqli_real_escape_string($conn, $_POST["Dateofbirth"]);
  $phonenum = mysqli_real_escape_string($conn, $_POST["Phonenumber"]);


  if(!preg_match("/^[a-zA-Z]+$/", $username)) {
    $updateUserError = "Username must only contain letters";
  } else {
    if(!preg_match("/^[a-zA-Z]+$/", $firstname)) {
      $updateUserError = "First name must only contain letters";
    } else {
      if(!preg_match("/^[a-zA-Z]+$/", $lastname)) {
        $updateUserError = "Last name must only contain letters";
      } else {
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) { //check the validation of email
          $updateUserError = "Please enter a valid email address";
        } else {
          if (!preg_match("/^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/",$postcode)) {//check the validation of postcode against a UK postcode pattern
            $updateUserError = 'Postcode does not match UK postcode pattern';
          } else {
            if (!preg_match("/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/",$phonenum)) {//check  the validation of phone number against a UK phone number
              $updateUserError = 'Phone number does not match UK phone number';
            } else {
              $sql = "UPDATE user SET Username = '$username', First_Name = '$firstname', Last_Name = '$lastname', Email = '$email', House_Name = '$housename', Address_Line_1 = '$addline1', Address_Line_2 = '$addline2', Postcode = '$postcode', Date_Of_Birth = '$dob', Phone_Number = '$phonenum', Details_Updated='1' WHERE userID=$userID";
              if(mysqli_query($conn, $sql)) {
                $updateUserError = 'User Updated Successfully';
                header("location: profile.php");
              } else {
                $updateUserError = 'Error Updating User';
              }
            }
          }
        }
      }
    }
  }
}






  ?>
