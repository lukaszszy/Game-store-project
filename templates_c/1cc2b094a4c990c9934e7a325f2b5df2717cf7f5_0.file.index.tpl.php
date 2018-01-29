<?php /* Smarty version 3.1.27, created on 2018-01-29 18:22:52
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18201843395a6f586ca51383_84788564%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cc2b094a4c990c9934e7a325f2b5df2717cf7f5' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/index.tpl',
      1 => 1517246393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18201843395a6f586ca51383_84788564',
  'variables' => 
  array (
    'bestAction_search' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6f586ca69af0_42393140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6f586ca69af0_42393140')) {
function content_5a6f586ca69af0_42393140 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18201843395a6f586ca51383_84788564';
?>
<link rel="stylesheet" href="assets/css/sliderStyle.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<?php echo '<script'; ?>
 src="assets/js/slider.js"><?php echo '</script'; ?>
>
<meta charset="UTF-8">

<h1>Bestsellery</h1>

<div id="slideshow">
<?php
$_from = $_smarty_tpl->tpl_vars['bestAction_search']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
	<div><a href="/_Vasto_Lorde/TAS/show_product.php?search=<?php echo $_smarty_tpl->tpl_vars['cat']->value['Game_ID'];?>
"><img src="templates/images/<?php echo $_smarty_tpl->tpl_vars['cat']->value['Game_ID'];?>
.jpg"></a></div>
<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
</div>
<?php }
}
?>