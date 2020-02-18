<?php 

$localhost = 'localhost';
$user = 'root';
$pass = '';
$db = 'farm';



$mysqli = mysqli_connect($localhost, $user, $pass, $db);

if (!$mysqli) {
	die("Connection to the established <br />".$mysqli->connect_error);
}
session_start();
?>