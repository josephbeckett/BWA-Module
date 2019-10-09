  <?php
    include("config.php");
    session_start();
    $user_check = $_SESSION["login_user"];
    $ses_sql = mysqli_query($conn,"SELECT * FROM user WHERE userID = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    $dateofbirth = $row["Date_Of_Birth"];
    $_SESSION['uid'] = $row['userID'];
    $_SESSION['useremail'] = $row['Email'];
    if(!isset($_SESSION["login_user"])){
      header("location: index.php");
    } 
?>