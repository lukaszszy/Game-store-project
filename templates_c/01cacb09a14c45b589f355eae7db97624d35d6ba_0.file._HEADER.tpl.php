<?php /* Smarty version 3.1.27, created on 2018-01-29 19:10:23
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/_HEADER.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6487421545a6f638f5a9b00_32033124%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01cacb09a14c45b589f355eae7db97624d35d6ba' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/_HEADER.tpl',
      1 => 1517249419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6487421545a6f638f5a9b00_32033124',
  'variables' => 
  array (
    'zalogowany' => 0,
    'info' => 0,
    'basket_count' => 0,
    'basket_cost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f638f5c4394_64905312',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f638f5c4394_64905312')) {
function content_5a6f638f5c4394_64905312 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6487421545a6f638f5a9b00_32033124';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Sklep z grami</title>
		<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500" rel="stylesheet" />

		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js" /><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/cartScript.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/styleLoginForm.css" type="text/css"/>
		<!--<link rel="stylesheet" href="assets/css/styleMain.css" type="text/css"/>-->
		<link rel="stylesheet" href="icons/css/fontello.css" type="text/css" />

		<link rel="shortcut icon" href="http://silentcircles.wikispaces.com/file/view/gamecube.ico" />
	</head>
<body>
		<div id="container">			 <!-- templatka calej strony-->
		<div id="header">				 <!-- naglowek, poki co taki sam na kazdej stronie (bedzie inny np. w obsludze koszyka)-->
			<a href="/_Vasto_Lorde/TAS/">
			<div id="logo">
			<span style="font-size:48px"><span style="color: #d8d9de">Logo</span><span style="color: #2a324b">sklepu</span></span>
			</div>
			</a>	<!-- miejsce na logo-->

			<div id="iconBox">	 <!-- box z ikonami nawigującymi -->

			<?php if ($_smarty_tpl->tpl_vars['zalogowany']->value != true) {?>

					<div class="icon" id="loginIcon"><a href="#" class="iconlink"><i class="icon-user-outline"></i><br />Zaloguj</a>
						<div id="loginBox">
								<?php if ($_smarty_tpl->tpl_vars['info']->value != '') {?>
								Popraw następujące błędy: <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

								<?php }?>
								<form method="POST" action="login.php">
									<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

									<div>
										<input id="name" name="name" type="text" placeholder="Login...">
										<label for="name">Login</label>
									</div>
									<div>
										<input id="password" name="password" type="password" placeholder="Hasło...">
										<label for="password">Hasło</label>
									</div>
									<div>
										<input id="securityq" name="securityq" type="text" placeholder="Podaj wynik działania">
										<label for="securityq">Ile to 2+2?</label>
									</div>
									<div style="clear:both;"></div>
									<button type="submit" class="confirmationButton" name="register">Login</button>
								</form>
						</div>
					</div>
					<div class="icon"><a href="register.php" class="iconlink"><i class="icon-user-outline"></i><br />Rejestracja</a></div>
			<?php } else { ?>
					<div class="icon"><a href="logout.php" class="iconlink"><i class="icon-user-outline"></i><br />Wyloguj</a>
					</div>
					<div class="icon"><a href="userDataForm.php" class="iconlink"><i class="icon-user-outline"></i><br />Profil</a>
					</div>

					<div class="icon" id="cartIcon">
						<a href="#" class="iconlink"><i class="icon-basket"></i><br />Twoj koszyk</a>
					     	<div id="cart">
					<?php if ($_smarty_tpl->tpl_vars['basket_count']->value == 0) {?>
								<div id="cartContent">Koszyk jest pusty!</div>
					<?php }?>
						     	<div id="cartTotalSum">Suma : <span id="SumVal"><?php echo $_smarty_tpl->tpl_vars['basket_cost']->value;?>
</span> zł</div>
						     	<div id="cartTotalAmount">Ilość produktów w koszyku : <span id="AmVal"><?php echo $_smarty_tpl->tpl_vars['basket_count']->value;?>
</span></div>
						     	<input type="button" id="cartButton" onclick="location.href='basket.php';" value="Przejdź do koszyka"/>
           				      </div>
					</div>

			<?php }?>
					<div style="clear:both;"></div>
					</div>

				<div id="searchbar">		 <!-- wyszukiwarka-->
					<form method="GET" action="search.php" class="searchBarGrid">
						<input type="text" name="search" placeholder="Przeszukaj sklep">
						<button type="submit" class="searchButton"><i class="icon-search"></i></button>
					</form>
				</div>


				<div id="menuTop">				 <!-- menu górne, póki co obecne na każdej stronie-->

							<a href="search_category.php?search=Akcja"><div class="topMenuItem">Akcja</div></a>
							<a href="search_category.php?search=MMO"><div class="topMenuItem">MMO</div></a>
							<a href="search_category.php?search=Niezalezne"><div class="topMenuItem">Niezalezne</div></a>
							<a href="search_category.php?search=Proste"><div class="topMenuItem">Proste</div></a>
							<a href="search_category.php?search=Przygodowe"><div class="topMenuItem">Przygodowe</div></a>
							<a href="search_category.php?search=RPG"><div class="topMenuItem">RPG</div></a>
							<a href="search_category.php?search=Sportowe"><div class="topMenuItem">Sportowe</div></a>
							<a href="search_category.php?search=Strategie"><div class="topMenuItem">Strategie</div></a>
							<a href="search_category.php?search=Symulacje"><div class="topMenuItem">Symulacje</div></a>
							<a href="search_category.php?search=Wyscigi"><div class="topMenuItem">Wyscigi</div></a>


				</div>
			</div>
<?php }
}
?>