<?php
include("config.php");
session_start();
ini_set('display_errors', 1);
$info = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username = mysqli_real_escape_string($conn, $_POST["Username"]);
    $password = mysqli_real_escape_string($conn, $_POST["Password"]);
    $sql = "SELECT  userID, Username, Password FROM user WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    $hashedpassword = $row['Password'];
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (password_verify($password, $hashedpassword)) {
        header("Location: index.php?login=error");
        $info = ("Your username or password is incorrect");
    } else {
        $_SESSION['login_user'] = $row['userID'];
        header("location: index.php");
    }
}

?>