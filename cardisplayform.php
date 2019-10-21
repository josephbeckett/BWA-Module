<?php
echo'
<div class="col-md-3 mb-3">
    <div class="card">
        <img class="card-img-top" src="' . $row['Picture'] . '" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">' . $row['Make'] . '</h5>
            <p class="card-text">' . $row['Model'] . '</p>
            <p class="card-text">' . $row['Fuel_Type'] . '</p>
            <p class="card-text">' . $row['Year'] . '</p>
            <p class="card-text">' . $row['Engine_Size'] . '</p>
            <p class="card-text">' . $row['Colour'] . '</p>
            <button type="submit" name="favourite" class="btn"><i class="fa fa-check" aria-hidden="true"></i></button>
            <button type="submit" name="unfavourite"class="btn"><i class="fas fa-times"></i></button>
        </div>
        <div class="card-footer">
            <small class="text-muted">' . $formattedcaruploadeddate . '</small>
        </div>
    </div>
</div>
'
?>