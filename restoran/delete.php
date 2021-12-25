<?php
require_once 'connection.php';
$dish_id = $_GET['dish_id'];
$query="DELETE FROM `dish` WHERE `dish` .`dish_id` = '$dish_id'";
$result = mysqli_query($connection, $query) or die("Помилка " . mysqli_error($connection)); 
?>
<meta http-equiv="refresh" content="0; url=/index.php">