<?php
$userID = $_SESSION['userID'];
$caruploaddate = $row['Date_Uploaded'];
$formattedcaruploadeddate = date("d-m-Y", strtotime($caruploaddate));
$carimage = $row['Picture'];
include_once('savecar.php');
echo'
<div class="col-lg-3 col-md-4 col-sm-6 mb-2">
    <div class="card">
        <img class="card-img-top" src="' . $row['Picture'] . '" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> ' . $row['Make'] . '</h5>
            <p class="card-text">Model: ' . $row['Model'] . '</p>
            <p class="card-text">Fuel: ' . $row['Fuel_Type'] . '</p>
            <p class="card-text">Year Produced:  ' . $row['Year'] . '</p>
            <p class="card-text">Engine Size: ' . $row['Engine_Size'] . '</p>
            <p class="card-text">Car Colour: ' . $row['Colour'] . '</p>     
            <button class="btn btn-primary favourite-button" type="submit" name="favourite-btn"><i class="fas fa-check"></i></button>
            <button class="btn btn-danger favourite-button" type="submit" name="favourite-btn"><i class="far fa-times-circle"></i></button>
        </div>
        <div class="card-footer">
            <small class="text-muted">' . $formattedcaruploadeddate . '</small>
        </div> 
    </div>
</div>';
?>

