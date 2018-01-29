<?php /* Smarty version 3.1.27, created on 2018-01-29 16:39:12
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/upload_codes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20260664025a6f4020445bd5_01126399%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c517e741e912607a46903fbf53296cc4f17cc3b3' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/upload_codes.tpl',
      1 => 1517225281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20260664025a6f4020445bd5_01126399',
  'variables' => 
  array (
    'user_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f4020486551_45095201',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f4020486551_45095201')) {
function content_5a6f4020486551_45095201 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20260664025a6f4020445bd5_01126399';
?>
<link rel="stylesheet" href="assets/css/styleUserDataForm.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<?php echo '<script'; ?>
 src="assets/js/userFormScript.js"><?php echo '</script'; ?>
>
<meta charset="UTF-8">

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
					<div class="inputTypeDescription">Dodaj kody dla gry</div>
<form method="POST" action="addCode.php">
								<section class="adminBox">
								<label class="dataDescr">Id gry</label>
								<input id="selected_id" type="text" placeholder="Id..." name="selected_id" class="dataDescr">

								<label>Kody dla gry</label>
								<textarea id ="selected_codes" name="selected_codes" placeholder="Tutaj wprowadź kody gry"></textarea>

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