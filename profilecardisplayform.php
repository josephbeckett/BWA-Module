
<?php
// getting uploaded date of car from database
  $caruploaddate = $row['Date_Uploaded'];
  // formatting the date of the upload so it can be outputted correctly
  $formattedcaruploadeddate = date("d-m-Y", strtotime($caruploaddate));
  // fetching the image of the specific car from the database
  $carimage = $row['Picture'];
  // setting up the card to display all the information about each car
  echo '
  <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
    <div class="card border-info">
          <img class="card-img-top img-hover-test" id="img-hover-test" src="' . $row['Picture'] . '" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title"> ' . $row['Make'] . '</h5>
              <p class="card-text">Model: ' . $row['Model'] . '</p>
              <p class="card-text">Fuel: ' . $row['Fuel_Type'] . '</p>
              <p class="card-text">Year Produced:  ' . $row['Year'] . '</p>
              <p class="card-text">Engine Size: ' . $row['Engine_Size'] . '</p>
              <p class="card-text">Car Colour: ' . $row['Colour'] . '</p>
          </div>
          <div class="card-footer">
              <small class="text-muted">Date Uploaded: ' . $formattedcaruploadeddate . '</small>
          </div>
      </div>
  </div>';
?>
