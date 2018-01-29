<?php
	 
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	 
	// connecting to db
	$db = new DB_CONNECT();
	
	if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["password"])){
		$info = "";
		if($info == ""){
			include("config/db.php");
			
			$name = stripslashes($_GET["name"]);
			$email = stripslashes($_GET["email"]);
			
			$query = "SELECT name, email FROM `".$TABLE_USERS."` WHERE `Login` = '".$name."' OR `Email` = '".$email."'";
			$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Błąd połączenia 1! Skontaktuj się z Administracją w celu rozwiązania problemu!");
			
			if(mysqli_num_rows($result)){
				$info = "Taki nick lub email istnieje juz w sklepie!";
			}
			
			if($info == ""){
				$password = stripslashes($_GET["password"]);
				
				$query = "INSERT INTO `".$TABLE_USERS."` (`Name`, `Surname`, `Email`, `Phone`, `Login`, `Password`, `Account`, `Address`, `Town`, `ZipCode`) VALUES 
					('','', '".$email."', '', '".$name."', '".$password."', '0', '', '', '')";
				$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Błąd połączenia 2! Skontaktuj się z Administracją w celu rozwiązania problemu!");
				$info = "Utworzono uzytkownika!";
			}
			echo $info;
		}
	}
?>