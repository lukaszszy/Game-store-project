<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();

	//Koszyk
	if($_SESSION['valid']){
		$query1 = "SELECT sum(tas_games.Price), count(tas_basket.gameid) FROM tas_games INNER JOIN tas_basket ON tas_basket.gameid = tas_games.Game_ID WHERE tas_basket.userid = ".$_SESSION['uid'].";";
		$result = mysqli_query($sql, $query1) or die("Connection error".mysqli_error($sql));
		if($row = mysqli_fetch_row($result)){
			$smarty->assign("basket_cost", round($row[0], 2));
			$smarty->assign("basket_count", $row[1]);
		}
	}
	//
	

	if(isset($_GET['search']) && $_GET['search'] != '')
	{
		$smarty->assign("searched",$_GET['search']);


	$query = "CALL `viewByCategoryPASC`('";
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
			"Price"		=> $row[5],
			"Keys"		=> $row[6]
		);
		$category_search[] = $category_games;
	}
	$smarty->assign("category_search", $category_search);

	}

	$smarty->assign("zalogowany", $_SESSION['valid']);
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('search_category.tpl');
	$smarty->display('_FOOTER.tpl');
?>