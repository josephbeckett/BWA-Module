<?php
$stmt = $pdo->prepare("SELECT * FROM Cars WHERE `Car_Make` LIKE ? OR `Car_Model` LIKE ?");
$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) {
    echo json_encode($results);
    header("location: searchresults.php");
}
?>