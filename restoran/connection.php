 <?php  
 define('HOST', 'localhost');
 define('USER', 'root');
 define('PASS', '');
 define('DB_NAME', 'restaurant');
 $connection = new mysqli(HOST, USER, PASS, DB_NAME);
 if ($connection->connect_errno) {
 	printf("Помилка підключення: %s\n", $connection->connect_error);
 	exit();
 }	