<?php /* Smarty version 3.1.27, created on 2018-01-29 17:39:28
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5578191225a6f4e40e85756_45160885%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdeb231f50f492f251973fa98ab0b8bb611df6c8' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/upload.tpl',
      1 => 1517219383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5578191225a6f4e40e85756_45160885',
  'variables' => 
  array (
    'user_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f4e4135eae5_49718289',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f4e4135eae5_49718289')) {
function content_5a6f4e4135eae5_49718289 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5578191225a6f4e40e85756_45160885';
?>
<link rel="stylesheet" href="assets/css/styleUserDataForm.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<?php echo '<script'; ?>
 src="assets/js/userFormScript.js"><?php echo '</script'; ?>
>

<div id="contentBox">    <!-- faktyczna zawartość strony, tutaj to co będzie się zmieniać na podstronach-->
	<div id="userAccount"> <!--caly box z ustawieniami konta -->
				<div id="userAccountMenu">
          <ul>
            <li><a href="/_Vasto_Lorde/TAS/userDataForm.php">Dane konta</a></li>
            <li><a href="/_Vasto_Lorde/TAS/paymentForm.php">Dostępne środki</a></li>
            <li><a href="/_Vasto_Lorde/TAS/userOrders.php">Twoja biblioteka gier</a></li>

<?php if ($_smarty_tpl->tpl_vars['user_type']->value == "admin") {?>
	    <li><a href="/_Vasto_Lorde/TAS/upload.php">Dodaj grę</a></li>
	    <li><a href="/_Vasto_Lorde/TAS/upload_codes.php">Dodaj kody</a></li>
<?php }?>
          </ul>
				</div>
				<div style="clear:both;"></div>
				<div id="selectedMenuView">
					<div class="inputTypeDescription">Dodaj grę</div>

					﻿		    <form method="POST" action="uploadGame.php" enctype="multipart/form-data">
								<section class="adminBox">
								<label class="dataDescr">Tytuł gry</label>
								<input id="name" type="text" placeholder="Tytuł..." name="name" class="dataDescr">

								<label class="dataDescr">Cena</label>
								<input id="name" type="text" placeholder="Cena..." name="price" class="dataDescr">


								<label class="dataDescr">Wytwórnia</label>
								<input id ="company" type="text" placeholder="Wytwórnia..." name="company" class="dataDescr">

								<label class="dataDescr">Kategoria</label>
								<input id ="category" type="text" placeholder="Tutaj wprowadź kategorie gry po przecinku" name="category" class="dataDescr">

								<label>Opis gry</label>
								<textarea name="description" placeholder="Tutaj wprowadź opis gry"></textarea>

								<label>Dodaj ikonę gry (pamiętaj, że wymiary muszą wynosić 100px x 250px)</label>
								<input type="file" name="fileToUpload" id="fileToUpload">
								

								<input type="submit" name="submit" value="Zatwierdź Zmiany" class="confirmationButton">
								</section>
							</form>


		</div>
		<div style="clear:both;"></div>
	</div>
</div>
<?php }
}
?>