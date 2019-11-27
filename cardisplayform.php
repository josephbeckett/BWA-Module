<?php
  $caruploaddate = $row['Date_Uploaded'];
  $formattedcaruploadeddate = date("d-m-Y", strtotime($caruploaddate));
  $carimage = $row['Picture'];
  // include_once('savecar.php');
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
              $favresults = mysqli_query($conn, "SELECT * FROM favourites WHERE userID=$userID AND carID=".$row['carID']."");
              if (mysqli_num_rows($favresults) == 1) {
                  echo '
                  <button data-id="' . $row["carID"] . '" class="btn btn-primary favourite-button favourite hidden" type="submit" name="favourite-btn">No</button>
                  <button data-id="' . $row["carID"] . '" class="btn btn-danger favourite-button unfavourite" type="submit" name="favourite-btn">Yes</button>
              ';
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


<!-- <i class="fas fa-check"></i>
<i class="far fa-times-circle"></i>

 -->
