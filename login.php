<?php
session_start();
include("config.php");
ini_set('display_errors', 1);
$info = "";
// php to log the user in
if (isset($_POST['login'])) {
    // username and password sent from form
    $username = mysqli_real_escape_string($conn, $_POST["Username"]);
    $password = mysqli_real_escape_string($conn, $_POST["Password"]);
    $sql = "SELECT userID, Username, Password FROM user WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $databaseUsername = $row['Username'];
    $hashedpassword = $row['Password'];
    // check the password that user has entered against the one in the database
    if(password_verify($password, $hashedpassword)) {
      $_SESSION['login_user'] = $row['userID'];
      header("location: carsearch.php");
    } else {
      $loginerror = "Wrong Username or password";
    }
}

?>
