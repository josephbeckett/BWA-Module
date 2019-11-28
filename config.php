<?php

// setting up connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ArcadiusCarsDatabase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// validation for if the connection doesn't go through
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
