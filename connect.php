<?php
	try{
		$db = new PDO("mysql:dbname=test_z12; host=localhost","root","", array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));
	}
	catch(PDOExeption $e){
		echo "Соединение с БД провалилось!".$e->getMessage();
	}
?>