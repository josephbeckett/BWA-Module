<?php
session_start();
include("config.php");
if (isset($_POST['Submit'])) {
  // username and password sent from form
  $username = mysqli_real_escape_string($conn, $_POST["Username"]);
  $firstname = "Not Set";
  $lastname = "Not Set";
  $password = mysqli_real_escape_string($conn, $_POST["Password"]);
  $repeatpassword = mysqli_real_escape_string($conn, $_POST["Repeatpassword"]);
  $email = mysqli_real_escape_string($conn, $_POST["Email"]);
  $housename = "Not Set";
  $addline1 =  "Not Set";
  $addline2 =  "Not Set";
  $postcode =  "Not Set";
  $dob =  "0000-00-00";
  $phonenum =  "Not Set";

  if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
    $createUserError = 'the password does not meet the requirements!';
  } else {
    if ($password != $repeatpassword) {
      $createUserError = "Passwords don't match";
    } else {
      if(!preg_match("/^[a-zA-Z]+$/", $username)) {
        $createUserError = "Username must only contain letters";
      } else {
        $usernameSearch = "SELECT * FROM user WHERE Username='$username'";
        $userSearchResults = mysqli_query($conn, $usernameSearch);
        $userSearchQuery = mysqli_num_rows($userSearchResults);
        if ($userSearchQuery > 0) {
          $createUserError = "Username already in use";
        } else {
          $emailSearch = "SELECT * FROM user WHERE Email='$email'";
          $emailSearchResults = mysqli_query($conn, $emailSearch);
          $emailSearchQuery = mysqli_num_rows($emailSearchResults);
          if ($emailSearchQuery > 0) {
            $createUserError = "Email already in use";
          } else {
            $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (Username, First_Name, Last_Name, Password, Email, House_Name, Address_Line_1, Address_Line_2, Postcode, Date_Of_Birth, Phone_Number, Details_Updated) VALUES ('$username', '$firstname', '$lastname', '$encryptedpassword', '$email', '$housename', '$addline1', '$addline2', '$postcode', '$dob', '$phonenum', '0')";
            if (mysqli_query($conn, $sql)) {
              $createUserError = "User Created Successfully";
            } else {
              $createUserError = 'Unable to create user';
            }
          }
        }
      }
    }
  }

}
?>
