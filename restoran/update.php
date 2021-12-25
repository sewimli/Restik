<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Update</title>
	</head>
	<body>
	<style>
    	button:hover{
    	cursor: pointer;
    	color: #000080;  
    	text-decoration: underline; 
   		}
   		button { 
    	padding:10px;
    	margin:10px;
    	border:none;
    	border-radius: 5px;
    	background: #6495ED; 
    	font-size: 14px; 
    	padding: 10px 25px; 
   		}
	</style>
		<form align="center" action="" method="post">
			<fieldset style="margin-top: 125px; margin-left: 500px; margin-right: 500px; border-radius: 10px; border: 2px solid #4682B4">
				<legend><b>Updating</b></legend>
				<p style="text-align: center">dish_name</p>
				<input type="text" name="dish_name">
				<p style="text-align: center">dish_country</p>
				<input type="text" name="dish_country">
				<p style="text-align: center">dish_deliver_name</p>
				<input type="text" name="dish_deliver_name">
				<p style="text-align: center">delivery_company</p>
				<input type="text" name="delivery_company">
				<p style="text-align: center"><button type="submit" >Update </button></p>
				<p><a href="http:/lab/index.php">back to dish</a></p>
			</fieldset>
		</form>

		<?php
			require 'connection.php';
			$dish_id = $_GET['dish_id'];
			$dish_name = $_POST['dish_name'];
			$dish_country = $_POST['dish_country'];
			$dish_deliver_name = $_POST['dish_deliver_name'];
			$delivery_company = $_POST['delivery_company'];

$dish_country = filter_input(INPUT_POST, 'dish_country', FILTER_SANITIZE_STRING);
$dish_deliver_name = filter_input(INPUT_POST, 'dish_deliver_name', FILTER_SANITIZE_STRING);
$delivery_company = filter_input(INPUT_POST, 'delivery_company', FILTER_SANITIZE_STRING);
$dish_name = filter_input(INPUT_POST, 'dish_name', FILTER_SANITIZE_STRING);


			if (isset($dish_id))
			{
				if (isset($dish_name))
				{	
					$connection->query("UPDATE `dish` SET `dish_name` = '$dish_name' WHERE `dish_id` = '$dish_id'");
				}
				if (isset($dish_country))
				{
					$connection->query("UPDATE `dish` SET `dish_country` = '$dish_country' WHERE `dish_id` = '$dish_id'");
				}
				if (isset($dish_deliver_name))
				{
					$connection->query("UPDATE `dish` SET `dish_deliver_name` = '$dish_deliver_name' WHERE `dish_id` = '$dish_id'");
				}
				if (isset($delivery_company))
				{
					$connection->query("UPDATE `dish` SET `delivery_company` = '$delivery_company' WHERE `dish_id` = '$dish_id'");
					
				}
			}
			$connection->close();	
		?>
	</body>
</html>