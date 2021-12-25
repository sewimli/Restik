<?php
require_once 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>lab4</title>
</head>
<style>
  th, td {
    padding: 10px; 
  }
  th {
    background: #6495ED;
  }
  td {
  background: #ADD8E6;
  }
</style>
<body>
  <table align="center">
    <tr>
        <th>Dish</th>
        <th>Country</th>
        <th>Deliver</th>
        <th>Company</th>
    </tr>
      <?php
        $dishs=$connection->query("SELECT * FROM `dish`");
        $dishs=mysqli_fetch_all($dishs);
        foreach($dishs as $dish){
        
        ?>
        <tr>
          <td><?=$dish[1]?></td>
          <td><?=$dish[2]?></td>
          <td><?=$dish[3]?></td>
          <td><?=$dish[4]?></td>
          <td><a href="update.php?dish_id=<?=$dish[0] ?>">Update</a></td>
          <td><a href="delete.php?dish_id=<?=$dish[0] ?>">Delete</a></td>
        </tr>
        <?php
        }
      ?>
  </table> 
  <form align="center" action="create.php" method="post">
    <fieldset style="margin-top: 50px; margin-left: 500px; margin-right: 500px; margin-bottom:50px;
    border-radius: 10px; border: 2px solid #4682B4">
  	<br>
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
<legend><b>Adding</b></legend>
	<p style="text-align: center">dish_name</p>
	<input type="text" name="dish_name">
	<p style="text-align: center">dish_country</p>
	<input type="text" name="dish_country">
	<p style="text-align: center">dish_deliver_name</p>
	<input type="text" name="dish_deliver_name">
	<p style="text-align: center">delivery_company</p>
	<input type="text" name="delivery_company"><br>
	<br>
	<p style="text-align: center"><button type="submit" >Add new dish </button></p>
</fieldset>
</form>
</body>
</html>