<?php 
try {
	$dbh = new PDO('mysql:host=localhost;dbname=ferma_kr_db', 'root', '');
} catch (PDOException $e) {
	print "Err ". $e->getMessage() . "<br/>";
	die();
}
?>