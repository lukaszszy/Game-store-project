<?php /* Smarty version 3.1.27, created on 2018-01-29 16:36:22
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/userDataForm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17445010505a6f3f76c07088_07831079%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b34fca195d6e1646d7e22a762a0d8501ec75d5' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/userDataForm.tpl',
      1 => 1517181254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17445010505a6f3f76c07088_07831079',
  'variables' => 
  array (
    'user_type' => 0,
    'userData_list' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f3f76cc43d7_47491541',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f3f76cc43d7_47491541')) {
function content_5a6f3f76cc43d7_47491541 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17445010505a6f3f76c07088_07831079';
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
          <div class="inputTypeDescription">Dane konta</div>
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
              <div class="dataDescr">Login</div>
              <div class="dataFrame" id="loginFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['login'];?>
</div>
              <div>
                <input id="new_login" type="submit" name="new_login" class="changeRequest" value="Zmień">
                <input id="new_login" type="submit" name="new_login" class="changeConfirmation" value="Zatwierdź zmiany">
                <input id="new_login" type="reset" name="login" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Hasło</div>
              <div class="dataFrame" id="passwordFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['password'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">E-mail</div>
              <div class="dataFrame" id="eMailFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['email'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
          </section>
	<div class="inputTypeDescription">Dane adresowe</div>
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
              <div class="dataDescr">Imię</div>
              <div class="dataFrame" id="nameFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany"><br />
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Nazwisko</div>
              <div class="dataFrame" id="surnameFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['surname'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Telefon</div>
              <div class="dataFrame" id="phoneFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['phone'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Adres</div>
              <div class="dataFrame" id="addressFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['address'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Miasto</div>
              <div class="dataFrame" id="townFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['town'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Kod pocztowy</div>
              <div class="dataFrame" id="zipCodeFrame"><?php echo $_smarty_tpl->tpl_vars['cat']->value['zipcode'];?>
</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
          </section>
  </div>
</div>
<?php }
}
?>