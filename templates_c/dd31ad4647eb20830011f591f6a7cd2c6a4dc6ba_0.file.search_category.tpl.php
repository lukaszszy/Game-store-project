<?php /* Smarty version 3.1.27, created on 2017-12-11 20:04:19
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/search_category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18573755645a2ed6b382e0b4_55456200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd31ad4647eb20830011f591f6a7cd2c6a4dc6ba' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/search_category.tpl',
      1 => 1513019056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18573755645a2ed6b382e0b4_55456200',
  'variables' => 
  array (
    'searched' => 0,
    'category_search' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2ed6b3840e18_46530288',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2ed6b3840e18_46530288')) {
function content_5a2ed6b3840e18_46530288 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18573755645a2ed6b382e0b4_55456200';
?>
<link rel="stylesheet" href="assets/css/styleCategory.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<meta charset="UTF-8">

  <style="font: 40px;"><?php echo $_smarty_tpl->tpl_vars['searched']->value;?>
</style><br />

  <?php
$_from = $_smarty_tpl->tpl_vars['category_search']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>

    <div class="productTile"><div class="miniature"><img src="templates/images/<?php echo $_smarty_tpl->tpl_vars['cat']->value['Game_ID'];?>
.jpg"></div><div class="productName"><?php echo $_smarty_tpl->tpl_vars['cat']->value['Title'];?>
</div><div class="productName">Wytwórnia: <?php echo $_smarty_tpl->tpl_vars['cat']->value['Company'];?>
</div><div class="productName">Cena: <?php echo $_smarty_tpl->tpl_vars['cat']->value['Price'];?>
 zł.</div><button type="button"><a href="#">Dodaj do koszyka</a></button>

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