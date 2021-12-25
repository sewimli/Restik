<?php
require_once 'connection.php';
$dish_name = $_POST['dish_name'];
$dish_country = $_POST['dish_country'];
$dish_deliver_name = $_POST['dish_deliver_name'];
$delivery_company = $_POST['delivery_company'];


$dish_country = filter_input(INPUT_POST, 'dish_country', FILTER_SANITIZE_STRING);
$dish_deliver_name = filter_input(INPUT_POST, 'dish_deliver_name', FILTER_SANITIZE_STRING);
$delivery_company = filter_input(INPUT_POST, 'delivery_company', FILTER_SANITIZE_STRING);
$dish_name = filter_input(INPUT_POST, 'dish_name', FILTER_SANITIZE_STRING);

$dish_name = $dish_country = $dish_deliver_name = $delivery_company = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dish_name = test_input($_POST["dish_name"]);
  $dish_country = test_input($_POST["dish_country"]);
  $dish_deliver_name = test_input($_POST["dish_deliver_name"]);
  $delivery_company = test_input($_POST["delivery_company"]);}

function test_input($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}

	   $query ="INSERT INTO `dish` (`dish_name`, `dish_country`, `dish_deliver_name`, `delivery_company`) VALUES ('$dish_name', '$dish_country', '$dish_deliver_name', '$delivery_company')";
     
    $result = mysqli_query($connection, $query) or die("Помилка " . mysqli_error($connection)); 
    mysqli_close($connection); ?>
       <meta http-equiv="refresh" content="0; url=/index.php">