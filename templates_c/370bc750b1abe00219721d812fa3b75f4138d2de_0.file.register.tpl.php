<?php /* Smarty version 3.1.27, created on 2018-01-07 13:51:37
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20760446535a5217d91c8187_95045606%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '370bc750b1abe00219721d812fa3b75f4138d2de' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/register.tpl',
      1 => 1515329491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20760446535a5217d91c8187_95045606',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a5217d91dfc16_16791396',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a5217d91dfc16_16791396')) {
function content_5a5217d91dfc16_16791396 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20760446535a5217d91c8187_95045606';
?>
<link rel="stylesheet" href="assets/css/styleRegisterForm.css" type="text/css" />
			<div id="content">
				<div id="registerBox">
<?php if ($_smarty_tpl->tpl_vars['info']->value != '') {?>
				Popraw następujące błędy: <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

<?php }?>
				<form method="POST" action="register.php">
					<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

					<div>
						<input id="name" name="name" type="text" />
						<label for="name">Login</label>
					</div>
					<div>
						<input id="email" name="email" type="email" />
						<label for="email">Email</label>
					</div>
					<div>
						<input id="password" name="password" type="password" />
						<label for="password">Hasło</label>
					</div>
					<div>
						<input id="cpassword" name="cpassword" type="password" />
						<label for="cpassword">Potwierdź hasło</label>
					</div>
					<div id="termsCheckbox">
						<input type="checkbox" name="agree" id="agree"/>
						<label for="agree">Przeczytałem i akceptuje <a href="#">regulamin</a>.</label>
					</div>
					<div style="clear:both;"></div>
					<div>
						<input id="securityq" name="securityq" type="text">
						<label for="securityq">Ile to 2+2?</label>
					</div>
					<button type="submit" name="register" class="confirmationButton">Zarejestruj</button>
				</form>
				</div>
			</div>
			<div style="clear:both;"></div>
<?php }
}
?>