<form id="UserSearchBox" class="hidden">
  <div class="form-group row">
    <div class="col-md-6">
      <a href="#" class="list-group-item list-group-item-action active">Recent searches</a>
      <!-- selecting all of the users recent searches from the database and displaying them in a list group -->
      <?php
      $rsbt = "SELECT * FROM recentsearch WHERE userID = $userID ORDER BY timeSearched DESC LIMIT 5";
      $rsbtq = mysqli_query($conn, $rsbt);
      $rsbtqr = mysqli_num_rows($rsbtq);
      if ($rsbtqr > 0) {
        while ($rsbtqrow  = mysqli_fetch_assoc($rsbtq)) {
          echo'
          <a href="#" class="list-group-item list-group-item-action">'. $rsbtqrow['searchQuery'] .'</a>
          ';
        }
      }
      ?>
    </div>
    <div class="col-md-6">
      <!-- selecting all of the users recent searches from the database and displaying them in a list group -->
      <a href="#" class="list-group-item list-group-item-action active"> Most Searched</a>
      <?php
      $recentsearches = "SELECT * FROM recentsearch WHERE userID = $userID ORDER BY amountSearched DESC LIMIT 5";
      $rsq = mysqli_query($conn, $recentsearches);
      $rsqr = mysqli_num_rows($rsq);
      if ($rsqr > 0) {
        while ($rsqrow  = mysqli_fetch_assoc($rsq)) {
          echo'
          <a href="#" class="list-group-item list-group-item-action">'. $rsqrow['searchQuery'] .'</a>
          ';
        }
      }
      ?>
    </div>

  </div>
</form>
