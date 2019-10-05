<?php
    include("config.php");
    session_start();
    $info = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form
        $username = mysqli_real_escape_string($conn, $_POST["txtUsername"]);
        $password = mysqli_real_escape_string($conn, $_POST["txtPassword"]);
        $email = mysqli_real_escape_string($conn, $_POST["txtEmail"]);
        $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
        include 'email.php';
        $sql = "INSERT INTO User (Username, Password, Email)
        VALUES ('$username', '$encryptedpassword', '$email')";
        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
            $info = "User Created Successfully!";
        } else {
            $info = "Unable to Add User!";
        }
    }
?>