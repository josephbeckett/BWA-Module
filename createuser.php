<?php
    session_start();
    include("config.php");
    if (isset($_POST['Submit'])) {
        // username and password sent from form
        $username = mysqli_real_escape_string($conn, $_POST["Username"]);
        $password = mysqli_real_escape_string($conn, $_POST["Password"]);
        $repeatpassword = mysqli_real_escape_string($conn, $_POST["Repeatpassword"]);
        $email = mysqli_real_escape_string($conn, $_POST["Email"]);
        if ($password != $repeatpassword) {
            echo "Passwords don't match";
        } else {
            $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (Username, Password, Email) VALUES ('$username', '$encryptedpassword', '$email')";
            if (mysqli_query($conn, $sql)) {
                echo "User Created Successfully!";
                header('Location: index.php');
            } else {
                echo var_dump($conn);
                echo "Unable to Add User!";
            }
        }

    }
?>


<!-- if (!preg_match("/^[a-zA-Z ]+$/",$myfirstname)) {
$error = true;
$name_error = "Name must contain only alphabets and space";
}

if (!preg_match("/^[a-zA-Z ]+$/",$mylastname)) {
  $error = true;
  $name_error = "Name must contain only alphabets and space";
}

if($mypassword != $myrpassword) {
  $error = true;
  $rpassword_error = "Password and Confirm Password doesn't match";

if(!filter_var($myemail,FILTER_VALIDATE_EMAIL)) {
 $error = true;
  $email_error = "Please Enter Valid Email ID";
} -->
