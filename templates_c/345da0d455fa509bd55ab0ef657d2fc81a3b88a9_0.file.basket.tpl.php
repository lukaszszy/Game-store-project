<?php /* Smarty version 3.1.27, created on 2018-01-29 16:41:24
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/basket.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5444879135a6f40a4a18830_22803822%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345da0d455fa509bd55ab0ef657d2fc81a3b88a9' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/basket.tpl',
      1 => 1517183263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5444879135a6f40a4a18830_22803822',
  'variables' => 
  array (
    'game_list' => 0,
    'game' => 0,
    'size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f40a4a589a8_66787032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f40a4a589a8_66787032')) {
function content_5a6f40a4a589a8_66787032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5444879135a6f40a4a18830_22803822';
?>
<link rel="stylesheet" href="assets/css/styleUserDataForm.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<?php echo '<script'; ?>
 src="assets/js/userFormScript.js"><?php echo '</script'; ?>
>
<meta charset="UTF-8">


  <div id="contentBox">    <!-- faktyczna zawartość strony, tutaj to co będzie się zmieniać na podstronach-->
    <div id="userAccount"> <!--caly box z ustawieniami konta -->

          <div style="clear:both;"></div>
          <div id="selectedMenuView">
            <div class="inputTypeDescription">Koszyk</div>

<table>
  <tr>
    <th>Tytuł</th>
    <th>Wytwornia</th>
    <th>Cena</th>
    <th></th>
  </tr>
<?php
$_from = $_smarty_tpl->tpl_vars['game_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['game'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['game']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->_loop = true;
$foreach_game_Sav = $_smarty_tpl->tpl_vars['game'];
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['game']->value['title'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['game']->value['company'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['game']->value['price'];?>
</td>
    <td><a href="/_Vasto_Lorde/TAS/delete_basket.php?id=<?php echo $_smarty_tpl->tpl_vars['game']->value['id'];?>
"><button type="button" class="deleteFromCart">Usuń</button></a></td>
  </tr>
<?php
$_smarty_tpl->tpl_vars['game'] = $foreach_game_Sav;
}
?>
</table>

<?php if ($_smarty_tpl->tpl_vars['size']->value > 0) {?>
<a href="/_Vasto_Lorde/TAS/buyGames.php"><button type="button" class="buyAllProduct confirmationButton" style="width:50%; margin-top:2rem;">Kup</button></a>
<?php }?>
          </section>
  </div>
</div>
<?php }
}
?>