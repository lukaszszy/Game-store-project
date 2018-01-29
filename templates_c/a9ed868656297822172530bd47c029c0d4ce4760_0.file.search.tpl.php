<?php /* Smarty version 3.1.27, created on 2018-01-08 20:45:49
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9928238165a53ca6d014395_98990773%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ed868656297822172530bd47c029c0d4ce4760' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/search.tpl',
      1 => 1515440745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9928238165a53ca6d014395_98990773',
  'variables' => 
  array (
    'searched' => 0,
    'search_result' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a53ca6d0796a5_76494825',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a53ca6d0796a5_76494825')) {
function content_5a53ca6d0796a5_76494825 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9928238165a53ca6d014395_98990773';
?>
<link rel="stylesheet" href="assets/css/styleCategory.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<meta charset="UTF-8">

  <style="font: 40px;"><?php echo $_smarty_tpl->tpl_vars['searched']->value;?>
</style><br />

  <?php
$_from = $_smarty_tpl->tpl_vars['search_result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>

<div class="productTile">
<div class="miniature">
<img src="templates/images/<?php echo $_smarty_tpl->tpl_vars['cat']->value['Game_ID'];?>
.jpg">
</div><div class="productName"><?php echo $_smarty_tpl->tpl_vars['cat']->value['Title'];?>
</div>
<div class="productName">Wytwórnia: <?php echo $_smarty_tpl->tpl_vars['cat']->value['Company'];?>
</div>
<div class="productName">Cena: <?php echo $_smarty_tpl->tpl_vars['cat']->value['Price'];?>
 zł.</div>
<button type="button">
<a href="#">Dodaj do koszyka</a>
</button>
<a href="/_Vasto_Lorde/TAS/show_product.php?search=<?php echo $_smarty_tpl->tpl_vars['cat']->value['Game_ID'];?>
">
<button type="button">
Zobacz stronę produktu
</button>
</a>
</div>
  <?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
  <div style="clear:both;"></div>
<?php }
}
?>