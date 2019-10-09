<?php
include("session.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <h1>Welcome <?php echo $row["Username"]; ?></h1>
    <h1><?php
        if ($row["House_Name"] == "") {
            echo "House Name or Number not supplied";
        } else {
            echo $row['House_Name'];
        }

        ?></h1>
    <h1><?php
        if ($row["Address_Line_1"] == "") {
            echo "Address Line 1 not supplied";
        } else {
            echo $row["Address_Line_1"];
        }
        ?></h1>

    <h1><?php
        if ($row["Address_Line_2"] == "") {
            echo "Address Line 2 not supplied";
        } else {
            echo $row["Address_Line_2"];
        }
        ?></h1>
    <h1><?php
        if ($row["Postcode"] == "") {
            echo "Postcode not supplied";
        } else {
            echo $row["Postcode"];
        }
        ?></h1>
    <h1><?php
        if ($row["Date_Of_Birth"] == "0000-00-00") {
            echo "Date of birth not supplied";
        } else {
            $formatteddateofbirth = date("d-m-Y", strtotime($dateofbirth));
            echo $formatteddateofbirth;
        }
        ?></h1>
    <h1><?php
        if ($row["Phone_Number"] == "0") {
            echo "Phone number not supplied";
        } else {
            echo $row["Phone_Number"];
        }

        ?></h1>
    <form action="edituser.php">
        <input type="submit" value="Update User Details" />
    </form>
</body>

</html>