<?php
if (isset($_POST['favourite'])) {
    echo 'liked';
    $selectedcar = $_POST['selectcar'];
    mysqli_query($conn, "INSERT INTO Favourites (userID, carID) VALUES ($userID, $selectedcar)");
    exit();
}

if (isset($_POST['unfavourite'])) {
    echo 'unfaved';
    $selectedcar = $_POST['selectcar'];
    mysqli_query($conn, "DELETE FROM Favourites WHERE carID = $selectedcar AND userID = $userID");
    exit();
}
?>
