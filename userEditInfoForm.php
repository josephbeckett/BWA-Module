<form id="EditDForm" class="hidden" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label>
    <div class="col-8">
      <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $row["Username"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="firstname" class="col-4 col-form-label">First Name</label>
    <div class="col-8">
      <input id="firstname" name="firstname" placeholder="First Name" class="form-control here" required="required" type="text" value="<?php echo $row["First_Name"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="lastname" class="col-4 col-form-label">Last Name</label>
    <div class="col-8">
      <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" required="required" type="text" value="<?php echo $row["Last_Name"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $row["Email"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="housenumber" class="col-4 col-form-label">House Name/Number</label>
    <div class="col-8">
      <input id="housenumber" name="housenumber" placeholder="House Name/Number" class="form-control here" type="text" value="<?php echo $row["House_Name"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="addline1" class="col-4 col-form-label">Address Line 1</label>
    <div class="col-8">
      <input id="addline1" name="addline1" placeholder="Address Line 1 " class="form-control here" type="text" value="<?php echo $row["Address_Line_1"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="addline2" class="col-4 col-form-label">Address Line 2</label>
    <div class="col-8">
      <input id="addline2" name="addline2" placeholder="Address Line 2 " class="form-control here" type="text" value="<?php echo $row["Address_Line_2"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="postcode" class="col-4 col-form-label">Postcode</label>
    <div class="col-8">
      <input id="postcode" name="postcode" placeholder="Postcode" class="form-control here" type="text" value="<?php echo $row["Postcode"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="dateofbirth" class="col-4 col-form-label">Date of Birth</label>
    <div class="col-8">
      <input id="dateofbirth" name="Dateofbirth" placeholder="Date of Birth" class="form-control here" type="date" value="<?php echo $row["Date_Of_Birth"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="phonenumber" class="col-4 col-form-label">Phone Number</label>
    <div class="col-8">
      <input id="phonenumber" name="Phonenumber" placeholder="Phone Number" class="form-control here" type="text" value="<?php echo $row["Phone_Number"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="Update" type="submit" class="btn btn-primary">Update My Profile</button>
    </div>
  </div>
</form>
