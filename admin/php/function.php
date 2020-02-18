<?php 
include_once('database.php');

function logged_in(){
	if (!isset($_SESSION['user_id'])) {
		header('location: ../admin');
	}

}
?>