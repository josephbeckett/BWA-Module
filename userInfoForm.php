<form id="UserInfoBox">
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["Username"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="firstname" class="col-4 col-form-label">First Name</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["First_Name"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="lastname" class="col-4 col-form-label">Last Name</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["Last_Name"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["Email"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="housenumber" class="col-4 col-form-label">House Name/Number</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["House_Name"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="addline1" class="col-4 col-form-label">Address Line 1</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["Address_Line_2"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="addline2" class="col-4 col-form-label">Address Line 2</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["Address_Line_2"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="postcode" class="col-4 col-form-label">Postcode</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["Postcode"];?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="DOB" class="col-4 col-form-label">Date of Birth</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $formatteddateofbirth;?></p>
    </div>
  </div>
  <div class="form-group row">
    <label for="PhoneNum" class="col-4 col-form-label">Phone Number</label>
    <div class="col-8">
      <p class="col-form-label"><?php echo $row["Phone_Number"];?></p>
    </div>
  </div>
</form>
