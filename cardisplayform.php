<?php
// getting uploaded date of car from database
  $caruploaddate = $row['Date_Uploaded'];
  // formatting the date of the upload so it can be outputted correctly
  $formattedcaruploadeddate = date("d-m-Y", strtotime($caruploaddate));
  // fetching the image of the specific car from the database
  $carimage = $row['Picture'];
  // setting up the card to display all the information about each car
  echo '
  <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
    <div class="card border-info">
          <img class="card-img-top img-hover-test" id="img-hover-test" src="' . $row['Picture'] . '" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title"> ' . $row['Make'] . '</h5>
              <p class="card-text">Model: ' . $row['Model'] . '</p>
              <p class="card-text">Fuel: ' . $row['Fuel_Type'] . '</p>
              <p class="card-text">Year Produced:  ' . $row['Year'] . '</p>
              <p class="card-text">Engine Size: ' . $row['Engine_Size'] . '</p>
              <p class="card-text">Car Colour: ' . $row['Colour'] . '</p>
              <p class="card-text">favourite: ';
              // selecting the users favourites from the database
              $favresults = mysqli_query($conn, "SELECT * FROM favourites WHERE userID=$userID AND carID=".$row['carID']."");
              // if the car is in the database change the buttons to display it
              if (mysqli_num_rows($favresults) == 1) {
                  echo '
                  <button data-id="' . $row["carID"] . '" class="btn btn-primary favourite-button favourite hidden" type="submit" name="favourite-btn">No</button>
                  <button data-id="' . $row["carID"] . '" class="btn btn-danger favourite-button unfavourite" type="submit" name="favourite-btn">Yes</button>
              ';
              // if the car is not in the database change the buttons to display it
              } else {
                  echo '
                  <button data-id="' . $row["carID"] .'" class="btn btn-primary favourite-button favourite" type="submit" name="favourite-btn">No</button>
                  <button data-id="'. $row["carID"] .'" class="btn btn-danger favourite-button unfavourite hidden" type="submit" name="favourite-btn">Yes</button>
                  ';
              }
              echo '</p>
          </div>
          <div class="card-footer">
              <small class="text-muted">Date Uploaded: ' . $formattedcaruploadeddate . '</small>
          </div>
      </div>
  </div>';
?>
