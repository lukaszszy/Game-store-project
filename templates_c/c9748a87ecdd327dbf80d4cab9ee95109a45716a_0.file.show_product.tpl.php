<?php /* Smarty version 3.1.27, created on 2017-12-11 22:18:14
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/show_product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18613202515a2ef616dbd992_33595095%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9748a87ecdd327dbf80d4cab9ee95109a45716a' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/show_product.tpl',
      1 => 1513027092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18613202515a2ef616dbd992_33595095',
  'variables' => 
  array (
    'games_list' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2ef616dd06b4_07966013',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2ef616dd06b4_07966013')) {
function content_5a2ef616dd06b4_07966013 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18613202515a2ef616dbd992_33595095';
?>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/css/styleProduct.css" type="text/css" />
<div id="contentBox">        <!-- faktyczna zawartość strony, tutaj to co będzie się zmieniać na podstronach-->
	<?php
$_from = $_smarty_tpl->tpl_vars['games_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>

		<div id="productPic"><img src="templates/images/<?php echo $_smarty_tpl->tpl_vars['cat']->value['Game_ID'];?>
.jpg" style="float: left"></div>
		<div id="nextToPic">          <!-- informacje znajdujące się obok zdjęcia, tutaj dane typu nazwa przedmiotu i cena, w dalszej rozbudowie strony może też kategoria, rok wydania etc?-->
			<div id="productName"><?php echo $_smarty_tpl->tpl_vars['cat']->value['Title'];?>
</div>
			<div id="productProducer">Wytwórnia: <?php echo $_smarty_tpl->tpl_vars['cat']->value['Company'];?>
</div>
			<div id="productPrice">Cena: <?php echo $_smarty_tpl->tpl_vars['cat']->value['Price'];?>
 zł.</div>
			<button type="button">Dodaj do koszyka</button>
		</div>
		<div style="clear:both;"></div>
		<div id="productDescription">
		<div style="font-size: 24px; border-bottom: 2px solid; margin-bottom: 30px;">Opis gry:</div>
		<?php echo $_smarty_tpl->tpl_vars['cat']->value['Description'];?>
<br /><br /></div>

		<div style="clear:both;"></div>
</div>
<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}

}
}
?>