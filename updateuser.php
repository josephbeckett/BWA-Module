<?php
include('session.php');
$info ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST["NewUsername"]);
    $email = mysqli_real_escape_string($conn, $_POST["NewEmail"]);
    $housename = mysqli_real_escape_string($conn, $_POST["NewHouseName"]);
    $addline1 = mysqli_real_escape_string($conn, $_POST["NewAddLine1"]);
    $addline2 = mysqli_real_escape_string($conn, $_POST["NewAddLine2"]);
    $postcode = mysqli_real_escape_string($conn, $_POST["NewPostcode"]);
    $dob = mysqli_real_escape_string($conn, $_POST["NewDOB"]);
    $phonenum = mysqli_real_escape_string($conn, $_POST["NewPhoneNo"]);
    $sql = "UPDATE user SET Username = '$username', Email = '$email', House_Name = '$housename', Address_Line_1 = '$addline1', Address_Line_2 = '$addline2'
    , Postcode = '$postcode', Date_Of_Birth = '$dob', Phone_Number = '$phonenum' WHERE userID = '$_SESSION[login_user]' ";
    if(mysqli_query($conn, $sql)) {
        $info = 'User Updated Successfully';
        header("location: profile.php");
    } else {
        $info = 'Error Updating User';
        header("Location: updateuser?login=error");
    }
}
?>