<?php
    include'session.php';
?>
<h1>Search Page</h1>

<div class="car-container">
<?php
    if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM Cars WHERE Make LIKE '%$search%' OR Model LIKE '%$search%'";
        $results = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($results);

        if ($queryResult > 0) {
            while ($row  = mysqli_fetch_assoc($results)) {
                echo "<div class='car-search-container'>
                <div class='card' style='width: 18rem;'>
                    <img class='card-img-top' src='...' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row['Make'];
                "</h5>
                        <p class='card-text'>" . $row['Model'];
                "</p>
                        <a href='#' class='btn btn-primary'></a>Go somewhere</a>
                    </div>
                </div>
                </div></a>";
            }
        } else {
            echo 'no results match your search';
        }

    }
?>
</div>