<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	
	$new_login = stripslashes($_POST["new_login"]);	
	
	echo $new_login;

?>