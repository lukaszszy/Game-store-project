<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	
	$query1 = "CALL `topTenGames`();";
	$result = mysqli_query($sql, $query1) or die("Connection error".mysqli_error($sql));
	while($row = mysqli_fetch_row($result)){
		$bestAction = array(
			"Game_ID"	=> $row[0],
			"Title"		=> $row[1],
			"Company"	=> $row[2],
			"Price"		=> $row[3]
		);
		$bestAction_search[] = $bestAction;
	}
	$smarty->assign("bestAction_search", $bestAction_search);
	
	$smarty->assign("zalogowany", $_SESSION['valid']);
	
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('index.tpl');
	$smarty->display('_FOOTER.tpl');
	
?>