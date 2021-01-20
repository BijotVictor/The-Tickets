<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=tutophp","root","root");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>