<form id="UserSavedCarsBox" class="hidden">
  <div class="form-group row">
    <?php $search = "SELECT * FROM favourites INNER JOIN cars ON favourites.carID = cars.carID WHERE favourites.userID = $userID";
    $searchresult = mysqli_query($conn, $search);
    $searchrow = mysqli_num_rows($searchresult);
    if ($searchrow >= 1) {
      while ($row = mysqli_fetch_assoc($searchresult)) {
        include("profilecardisplayform.php");
      }
    } else {
      echo '
      <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
      <p>You currently have no favourited cars</p>
      </div>
      ';
    } ?>
  </div>
</form>
