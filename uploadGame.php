<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	include("config/db.php");

	
	$name = stripslashes($_POST["name"]);	
	$price = stripslashes($_POST["price"]);	
	$company = stripslashes($_POST["company"]);
	$category = stripslashes($_POST["category"]);	
	$description = stripslashes($_POST["description"]);

	//name
	if(!preg_match("/^[a-zA-Z0-9 .\-]+$/i", $name)) {
		$info .= "Nieprawidłowa nazwa!";
	}
	//price
	if(!preg_match("/^-?(?:\d+|\d*\.\d+)$/", $price)) {
		$info .= "Nieprawidłowa cena!";
	}
	//category
	if(!preg_match("/^[a-zA-Z0-9 ,]+$/i", $category)) {
		$info .= "Nieprawidłowe kategorie!";
	}
	//company
	if(!preg_match("/^[a-zA-Z0-9 .\-]+$/i", $company)) {
		$info .= "Nieprawidłowa wytwórnia!";
	}
	//description
	if(!preg_match("/^[a-zA-Z0-9 .,\-]+$/i", $description)) {
		$info .= "Nieprawidłowy opis gry!";
	}
	
	if($info == ""){
		$query = "SELECT `addGame`('";
		$query .= $name;
		$query .= "','";
		$query .= $company;
		$query .= "','";
		$query .= $description;
		$query .= "','";
		$query .= $price;
		$query .= "');";
		$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Error");
		while($row = mysqli_fetch_row($result))
		{
			$newgame_id = $row[0];
		}
		
		$pieces = explode(",", $category);

		$query1 = " INSERT INTO `tas_games_categories`(`GameID`, `Category`) VALUES ";
		foreach ($pieces as $value) 
		{
				$query1 .= "('";
			$query1 .= $newgame_id;
			$query1 .= "','";
			$query1 .= $value;
			$query1 .= "'),";
		}
		$query1 = substr($query1, 0, -1);
		$query1 .= ";";
		$result1 = mysqli_query($sql, $query1) or die(mysqli_error($sql)." Error");




		$target_dir = "templates/images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}

		rename("templates/images/".basename( $_FILES["fileToUpload"]["name"]), "templates/images/".$newgame_id.".jpg" );
	}
	else
		echo $info;
	
	Redirect('http://arenaskilla.pl/_Vasto_Lorde/TAS/infogameadded.php');
	
?>