<?php
    include "database.php";

    if($_POST) {
        if($_POST['string'] > 0) {
            $input = $_POST['string'];
            $query = "INSERT INTO strings (string)
            VALUES ('$input')";

            mysqli_query($connect, $query);
        }
    }
?>

<form action="insert.php" method="post">
    <input type="text" name="string">
    <button type="submit">Submit</button>
</form>