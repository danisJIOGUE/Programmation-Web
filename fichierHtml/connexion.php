<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		define('HOST','localhost');
		define('DB_NAME','ecole');
		define('USER', 'root');
		define('PASS', '');

		try{
			$dataBase = new PDO("mysql:host=" . HOST . ";dbname=". DB_NAME, USER, PASS);
			$dataBase -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOEception $e){ 
			echo $e;
		}
	?>
</body>
</html>