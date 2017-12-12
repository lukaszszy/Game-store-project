<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	if(isset($_GET['search']) && $_GET['search'] != ''){
		$smarty->assign("searched", "Wynik wyszukiwania dla - ".$_GET['search']);
 

	$query = "SELECT * FROM `tas_games` WHERE `Title` LIKE '%";
	$query .= $_GET['search'];
	$query .= "%';";
	$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
	while($row = mysqli_fetch_row($result)){
		$search_list = array(
			"Game_ID"	=> $row[0],
			"Image_ID"	=> $row[1],
			"Title"		=> $row[2],
			"Company"	=> $row[3],
			"Description" 	=> $row[4],
			"Price"		=> $row[5]
		);
		$search_result[] = $search_list;
	}
	$smarty->assign("search_result", $search_result);


	}
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('search.tpl');
	$smarty->display('_FOOTER.tpl');
?>