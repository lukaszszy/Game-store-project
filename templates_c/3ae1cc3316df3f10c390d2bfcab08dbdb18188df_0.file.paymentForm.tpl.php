<?php /* Smarty version 3.1.27, created on 2018-01-29 16:51:16
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/paymentForm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5529497295a6f42f40e0418_41784324%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae1cc3316df3f10c390d2bfcab08dbdb18188df' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/paymentForm.tpl',
      1 => 1517181268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5529497295a6f42f40e0418_41784324',
  'variables' => 
  array (
    'user_type' => 0,
    'userData_list' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f42f4161c43_15966462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f42f4161c43_15966462')) {
function content_5a6f42f4161c43_15966462 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5529497295a6f42f40e0418_41784324';
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
          <div class="inputTypeDescription">Dostępne środki na koncie</div>
          <section class="dataBox">
            <?php
$_from = $_smarty_tpl->tpl_vars['userData_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
              <div class="dataDescr">Kwota</div>
              <div class="dataFrame" id="saldoFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['account'];?>
 PLN</div>
            <?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
          </section>
          <div class="inputTypeDescription">Doładuj konto</div>
          <section class="dataBox">
              <div class="dataDescr">Wprowadź kwotę</div>
              <div>
                <form method="POST" action="paymentOntoAccount.php">
                			<div>
                				<input id="price" name="price" type="text" placeholder="Podaj kwotę...">
                				<div style="margin-top:2rem;"><button type="submit" class="confirmationButton" name="register">Zatwierdź</button></div>
                      </div>
                </form>
              </div>
          </section>
        <div style="clear:both;"></div>
    </div>
  </div>
</div>
<?php }
}
?>