<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();


	if(isset($_GET['search']) && $_GET['search'] != '')
	{
		$smarty->assign("searched", "Kategoria - ".$_GET['search']);


	$query = "CALL `viewByCategory`('";
	$query .= $_GET['search'];
	$query .= "');";
	$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
	while($row = mysqli_fetch_row($result)){
		$category_games = array(
			"Game_ID"	=> $row[0],
			"Image_ID"	=> $row[1],
			"Title"		=> $row[2],
			"Company"	=> $row[3],
			"Description" 	=> $row[4],
			"Price"		=> $row[5]
		);
		$category_search[] = $category_games;
	}
	$smarty->assign("category_search", $category_search);

	}

	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('search_category.tpl');
	$smarty->display('_FOOTER.tpl');
?>