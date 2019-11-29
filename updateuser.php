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
    $sql = "UPDATE user SET Username = '$username', First_Name = '$firstname', Last_Name = '$lastname', Email = '$email', House_Name = '$housename', Address_Line_1 = '$addline1', Address_Line_2 = '$addline2', Postcode = '$postcode', Date_Of_Birth = '$dob', Phone_Number = '$phonenum', Details_Updated='1' WHERE userID=$userID";
    if(mysqli_query($conn, $sql)) {
        $info = 'User Updated Successfully';
        header("location: profile.php");
    } else {
        $info = 'Error Updating User';
        header("Location: updateuser?login=error");
    }
}
?>
