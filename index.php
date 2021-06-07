<?php

include "database.php";

$query = "SELECT * FROM strings";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row['string'] . "</li>";
}