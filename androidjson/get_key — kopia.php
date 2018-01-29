<?php
	 
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	 
	// connecting to db
	$db = new DB_CONNECT();
	
	if(isset($_GET["id"]) && isset($_GET["login"]) && isset($_GET["password"])){
		$info="";
		if($info==""){
			include("config/db.php");
			$Game_ID = stripslashes($_GET['id']);
			$Login = stripslashes($_GET['login']);
			$Password = stripslashes($_GET['password']);
			
			$dollars = mysqli_query("SET NAMES UTF8;");
			$dollars = mysqli_query("SELECT Account FROM tas_users WHERE Login=Serq AND Password=s123456;") or die(mysql_error());
			echo $dollars;
		}
	}
	else
	{
		echo "Brak ID gry, loginu badz hasla."
	}
?>