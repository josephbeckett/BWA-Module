<form name="updateform" method="post">
    <input type="text" name="NewUsername" value="<?php echo $row["Username"] ?>">
    <input type="email" name="NewEmail" value="<?php echo $row["Email"] ?>">
    <input type="text" name="NewHouseName" value="<?php echo $row["House_Name"] ?>">
    <input type="text" name="NewAddLine1" value="<?php echo $row["Address_Line_1"] ?>">
    <input type="text" name="NewAddLine2" value="<?php echo $row["Address_Line_2"] ?>">
    <input type="text" name="NewPostcode" value="<?php echo $row["Postcode"] ?>">
    <input type="date" name="NewDOB" value="<?php echo $row["Date_Of_Birth"] ?>">
    <input type="text" name="NewPhoneNo" value="<?php echo $row["Phone_Number"] ?>">
    <button class="btn btn-primary" name="Update" type="submit">Update</button>
</form>
