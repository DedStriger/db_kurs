<?php 
require 'db.php';
if (isset($_POST['go'])){
switch ($_POST['table']) {
	case 'farmers':
		$main_table = $dbh 	->query('SELECT * FROM farmers');
	echo " 
	<div class='row'>
		<div>ID</div>
		<div>NAME</div>
		<div>C_ID</div>
		<div>B_ID</div>
		<div>A_ID</div>
	</div>
	";
	foreach ($main_table as $row) {
		echo " 
	<div class='row'>
		<div>{$row['id']}</div>
		<div>{$row['name']}</div>
		<div>{$row['c_id']}</div>
		<div>{$row['b_id']}</div>
		<div>{$row['a_id']}</div>
	</div>
	";}
		break;
	
case 'cornfield':
	$main_table = $dbh 	->query('SELECT * FROM cornfield');
	echo " 
	<div class='row'>
		<div>ID</div>
		<div>NAME</div>
	</div>
	";
	foreach ($main_table as $row) {
		echo " 
	<div class='row'>
		<div>{$row['id']}</div>
		<div>{$row['name']}</div>
	</div>
	";}
		break;

		case 'barn':
	$main_table = $dbh 	->query('SELECT * FROM barn');
	echo " 
	<div class='row'>
		<div>ID</div>
		<div>NAME</div>
	</div>
	";
	foreach ($main_table as $row) {
		echo " 
	<div class='row'>
		<div>{$row['id']}</div>
		<div>{$row['name']}</div>
	</div>
	";}
		break;
 
		case 'animal':
	$main_table = $dbh 	->query('SELECT * FROM animal');
	echo " 
	<div class='row'>
		<div>ID</div>
		<div>NAME</div>
		<div>COUNT</div>
		<div>C_ID</div>
		<div>B_ID</div>
	</div>
	";
	foreach ($main_table as $row) {
		echo " 
	<div class='row'>
		<div>{$row['id']}</div>
		<div>{$row['name']}</div>
		<div>{$row['count']}</div>
		<div>{$row['c_id']}</div>
		<div>{$row['b_id']}</div>
	</div>
	";}
		break;

				case 'stern':
	$main_table = $dbh 	->query('SELECT * FROM stern');
	echo " 
	<div class='row'>
		<div>ID</div>
		<div>NAME</div>
		<div>COUNT</div>
		<div>ANIMAL_ID</div>
	</div>
	";
	foreach ($main_table as $row) {
		echo " 
	<div class='row'>
		<div>{$row['id']}</div>
		<div>{$row['name']}</div>
		<div>{$row['count']}</div>
		<div>{$row['animal_id']}</div>
	</div>
	";}
		break;

					case 'buy':
					$i =  $dbh->query('SELECT * FROM buy');
	if ($i) {
	$main_table = $dbh->query('SELECT * FROM buy');
	echo " 
	<div class='row'>
		<div>ID</div>
		<div>NAME</div>
		<div>WHAT</div>
		<div>howMuch</div>
		<div>DATA</div>
	</div>
	";
	foreach ($main_table as $row) {
		echo " 
	<div class='row'>
		<div>{$row['id']}</div>
		<div>{$row['name']}</div>
		<div>{$row['what']}</div>
		<div>{$row['howMuch']}</div>
		<div>{$row['data']}</div>
	</div>
	";}
} else {
	echo "Заказов нет";
}
		break;
}

}

if (isset($_POST['food'])){
$a = (int) $_POST['aid'];
$c = (int) $_POST['cof'];
 $dbh->query('call food('.$a.','.$c.')');
	}
if (isset($_POST['add'])){

$dbh->query("call addFermer('".$_POST["n"]."','".$_POST["b"]."','".$_POST["c"]."','".$_POST["a"]."',".(int)$_POST["ac"].",'".$_POST["s"]."')");
var_dump($_POST);
}
 ?>
