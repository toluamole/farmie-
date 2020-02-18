<?php 
include_once('php/function.php');
 logged_in();

 session_destroy();
 header("location: ./");
 die();


?>