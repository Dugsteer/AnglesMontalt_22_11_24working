<?php

include "db_worksheets.php";

global $connection;

$query = " SELECT * FROM count ";
$select_count = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_count)) {
    $views = $row['views'];
}

$newquery = "UPDATE count SET views = ${views}+1 ";
$update_posts = mysqli_query($connection, $newquery);

?>
