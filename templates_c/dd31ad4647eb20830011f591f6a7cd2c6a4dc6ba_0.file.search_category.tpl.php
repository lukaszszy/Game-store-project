<?php /* Smarty version 3.1.27, created on 2018-01-29 16:54:27
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/search_category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6221835945a6f43b3783f28_68947859%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd31ad4647eb20830011f591f6a7cd2c6a4dc6ba' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/search_category.tpl',
      1 => 1517241263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6221835945a6f43b3783f28_68947859',
  'variables' => 
  array (
    'searched' => 0,
    'category_search' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f43b37a4480_61976802',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f43b37a4480_61976802')) {
function content_5a6f43b37a4480_61976802 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6221835945a6f43b3783f28_68947859';
?>
<link rel="stylesheet" href="assets/css/styleCategory.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<meta charset="UTF-8">


<h1>Kategoria - <?php echo $_smarty_tpl->tpl_vars['searched']->value;?>
</h1>
<div id="sortMenu">
							<div class="sortMenuItem">Sortuj:</div>
							<a href="search_category.php?search=<?php echo $_smarty_tpl->tpl_vars['searched']->value;?>
"><div class="sortMenuItem">po nazwie</div></a>
							<a href="search_categoryPASC.php?search=<?php echo $_smarty_tpl->tpl_vars['searched']->value;?>
"><div class="sortMenuItem">po cenie rosnąco</div></a>
							<a href="search_categoryPDESC.php?search=<?php echo $_smarty_tpl->tpl_vars['searched']->value;?>
"><div class="sortMenuItem">po cenie malejąco</div></a>
</div>
<div style="clear:both;"></div>

<div id="selectedCategoryView">
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
</div><div class="productComp">Wytwórnia: <?php echo $_smarty_tpl->tpl_vars['cat']->value['Company'];?>
</div><div>Cena: <span class="productPrice"><?php echo $_smarty_tpl->tpl_vars['cat']->value['Price'];?>
</span> zł</div>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value['Keys'];
$_tmp1=ob_get_clean();
if ($_tmp1 > 0) {?>
<a href="/_Vasto_Lorde/TAS/add_basket.php?gameid=<?php echo $_smarty_tpl->tpl_vars['cat']->value['Game_ID'];?>
">
<button type="button" class="addToCart" onlick="">Dodaj do koszyka</button>
</a>
<?php }?>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value['Keys'];
$_tmp2=ob_get_clean();
if ($_tmp2 == 0) {?>
<button type="button" class="addToCart" onlick="">Produkt niedostępny</button>
<?php }?>

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
</div>
<?php }
}
?>