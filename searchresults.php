<?php
include('carsearch.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['search'])) {
        if (count($results) > 0) {
            foreach ($results as $r) {
                printf("<div>%s - %s</div>", $r['name'], $r['email']);
            }
        } else {
            echo "No results found";
        }
    }
    ?>
</body>

</html>