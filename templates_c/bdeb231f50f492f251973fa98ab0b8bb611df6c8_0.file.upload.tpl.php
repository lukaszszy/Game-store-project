<?php /* Smarty version 3.1.27, created on 2017-10-26 14:24:17
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:120139825159f1d3f1844e68_15852229%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdeb231f50f492f251973fa98ab0b8bb611df6c8' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/upload.tpl',
      1 => 1509020402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120139825159f1d3f1844e68_15852229',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f1d3f1862cc1_27690050',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f1d3f1862cc1_27690050')) {
function content_59f1d3f1862cc1_27690050 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120139825159f1d3f1844e68_15852229';
?>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" name="submit" value="Submit">
		</form><?php }
}
?>