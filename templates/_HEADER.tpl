<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Strona główna</title>
		<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500" rel="stylesheet" />

		<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/styleMain.css" type="text/css"/>
		<link rel="stylesheet" href="icons/css/fontello.css" type="text/css" />

		<link rel="shortcut icon" href="http://silentcircles.wikispaces.com/file/view/gamecube.ico" />
	</head>
	<body>
		<div id="container">			 <!-- templatka calej strony-->

			<div id="header">				 <!-- naglowek, poki co taki sam na kazdej stronie (bedzie inny np. w obsludze koszyka)-->
<a href="/_Vasto_Lorde/TAS/">
<div id="logo">
<span style="font-size:48px">
<span style="color: #d8d9de">Logo</span>
sklepu</span></div>
</a>			<!-- miejsce na logo-->
				<div id="iconBox">	 <!-- box z ikonami nawigującymi -->
					<div class="icon"><a href="register.php" class="iconlink"><i class="icon-registration"></i><br />Rejestracja</a></div>
					<div class="icon"><a href="login.php" class="iconlink"><i class="icon-user-outline"></i><br />Zaloguj</a></div>
					<div class="icon"><a href="#" class="iconlink"><i class="icon-basket"></i><br />Twoj koszyk</a></div>
					<div style="clear:both;"></div>
				</div>

				<div id="searchbar">		 <!-- wuszukiwarka-->
					<form method="GET" action="search.php">
						<input type="text" name="search" placeholder="Przeszukaj sklep">
						<button type="submit" class="searchButton"><i class="icon-search"></i></button>
						<div style="clear: both;"></div>
					</form>
				</div>
			</div>

			<div id="menuTop">				 <!-- menu górne, póki co obecne na każdej stronie-->
				<ol>
			{foreach from=$category_list item=cat}
						<li><a href="search_category.php?search={$cat.name}">{$cat.name}</a></li>
			{/foreach}
						<div style="clear:both;"></div>
				</ol>
			</div>
