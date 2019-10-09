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
    if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $decryptpassword = password_verify($password, $row['Password']);
        if ($decryptpassword == false) {
            header("Location: index.php?login=error");
            $info = ("Your username or password is incorrect");
        } elseif ($decryptpassword == true) {
            $_SESSION['login_user'] = $row['userID'];
            header("location: loginwelcomepage.php");
        }
    }
}
?>