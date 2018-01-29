<?php /* Smarty version 3.1.27, created on 2018-01-29 16:41:34
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/userOrders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5337884675a6f40aeedadf6_62400263%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a28e8d1e9a42d8ec62ec56ce0d9c8a71f1e6ba' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/userOrders.tpl',
      1 => 1517181283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5337884675a6f40aeedadf6_62400263',
  'variables' => 
  array (
    'user_type' => 0,
    'userOrders_list' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f40aef05dd0_27892434',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f40aef05dd0_27892434')) {
function content_5a6f40aef05dd0_27892434 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5337884675a6f40aeedadf6_62400263';
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
          <div class="inputTypeDescription">Zakupione gry</div>

<table>
  <tr>
    <th>Tytuł</th>
    <th>Klucz</th>
    <th>Cena</th>
    <th>Data</th>
  </tr>
<?php
$_from = $_smarty_tpl->tpl_vars['userOrders_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['cat']->value['game_key'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['cat']->value['price'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['cat']->value['date'];?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>

</table>

  </div>
</div>
<?php }
}
?>