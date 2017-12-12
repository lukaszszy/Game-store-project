<?php /* Smarty version 3.1.27, created on 2017-12-12 13:04:18
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/_HEADER.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2002997525a2fc5c2044998_18988845%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01cacb09a14c45b589f355eae7db97624d35d6ba' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/_HEADER.tpl',
      1 => 1513080244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002997525a2fc5c2044998_18988845',
  'variables' => 
  array (
    'category_list' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2fc5c2056d14_50968543',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2fc5c2056d14_50968543')) {
function content_5a2fc5c2056d14_50968543 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2002997525a2fc5c2044998_18988845';
?>
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
			<?php
$_from = $_smarty_tpl->tpl_vars['category_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
						<li><a href="search_category.php?search=<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a></li>
			<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
						<div style="clear:both;"></div>
				</ol>
			</div>
<?php }
}
?>