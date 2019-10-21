<?php 
if (isset($_POST['favourite'])) {
    $selectedcar = $_POST['selectcar'];
    mysqli_query($conn, "INSERT INTO Favourites (userID, carID) VALUES ($userID, $selectedcar)");
    exit();
}

if (isset($_POST['unfavourite'])) {
    $selectedcar = $_POST['selectcar'];
    $row = mysqli_fetch_array($conn, "DELETE FROM Favourites WHERE carID = $selectedcar AND userID = $userID");
    exit();
}
?>