<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=c0_thetickets_BD','c0_thetickets','L3J6!;j7dA9+zBe");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>