<?php

include "database.php";

if($_GET) {
    if(isset($_GET['id'])) {
        $del_id = $_GET['id'];
        $query = "DELETE FROM strings WHERE id='$del_id'";
        mysqli_query($connect, $query);
        
        if(mysqli_error($connect)) {
            echo mysqli_error($connect);
        };
    }
}

$query = "SELECT * FROM strings";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo "
        <li>
            <span>" . $row['string'] . "</span>
            <a href='delete.php?id=" . $row['id'] . "'>DELETE</a>
        </li>
    ";
}