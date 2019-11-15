  <?php
  include("config.php");
  session_start();
  $user_check = $_SESSION["login_user"];
  $ses_sql = mysqli_query($conn,"SELECT * FROM user WHERE userID = '$user_check' ");
  $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

  $car_sql = mysqli_query($conn,"SELECT * FROM Cars");
  $carrow = mysqli_fetch_array($car_sql, MYSQLI_ASSOC);


  $fav_sql = mysqli_query($conn, "SELECT * FROM Favourites WHERE userID = '$user_check' ");
  $favrow = mysqli_fetch_array($fav_sql, MYSQLI_ASSOC);


  $dateofbirth = $row["Date_Of_Birth"];
  $_SESSION['userID'] = $row['userID'];
  $userID = $_SESSION['userID'];
  $_SESSION['useremail'] = $row['Email'];
  if(!isset($_SESSION["login_user"])){
    header("location: index.php");
  }


  if (isset($_POST['Update'])) {
    $username = mysqli_real_escape_string($conn, $_POST["NewUsername"]);
    $email = mysqli_real_escape_string($conn, $_POST["NewEmail"]);
    $housename = mysqli_real_escape_string($conn, $_POST["NewHouseName"]);
    $addline1 = mysqli_real_escape_string($conn, $_POST["NewAddLine1"]);
    $addline2 = mysqli_real_escape_string($conn, $_POST["NewAddLine2"]);
    $postcode = mysqli_real_escape_string($conn, $_POST["NewPostcode"]);
    $dob = mysqli_real_escape_string($conn, $_POST["NewDOB"]);
    $phonenum = mysqli_real_escape_string($conn, $_POST["NewPhoneNo"]);
    $sql = "UPDATE user SET Username = '$username', Email = '$email', House_Name = '$housename', Address_Line_1 = '$addline1', Address_Line_2 = '$addline2'
      , Postcode = '$postcode', Date_Of_Birth = '$dob', Phone_Number = '$phonenum' WHERE userID = '$_SESSION[login_user]' ";
    if (mysqli_query($conn, $sql)) {
      $info = 'User Updated Successfully';
      header("location: profile.php");
    } else {
      $info = 'Error Updating User';
      header("Location: updateuser?login=error");
    }
  }

?>
