<?php
include('session.php');
include('updateuser.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>

<body>
    <form action="update">
        <input type="text" maxlength="40" name="NewUsername" placeholder="Username">
        <input type="email" name="NewEmail" placeholder="Email">
        <input type="text" maxlength="20" name="NewHouseName" placeholder="House Name or Number">
        <input type="text" name="NewAddLine1" placeholder="Address Line 1">
        <input type="text" name="NewAddLine2" placeholder="Address Line 2">
        <input type="text" maxlength="8" name="NewPostcode" placeholder="Postcode">
        <input type="date" name="NewDOB" placeholder="Date of Birth">
        <input type="number" maxlength="11" name="NewPhoneNo" placeholder="Phone Number">
        <button class="btn btn-primary" name="Update" type="submit">Update</button>
    </form>
</body>

</html>