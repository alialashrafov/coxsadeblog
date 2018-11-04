<?php 
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', 'marmara97');
	}catch (PDOException $e) {
		exit('Database error.');
	}
	

 ?>