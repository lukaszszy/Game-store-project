<?php /* Smarty version 3.1.27, created on 2017-12-05 12:39:55
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4784307725a26858b657925_93285085%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '370bc750b1abe00219721d812fa3b75f4138d2de' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/register.tpl',
      1 => 1512407190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4784307725a26858b657925_93285085',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a26858b688539_10048810',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a26858b688539_10048810')) {
function content_5a26858b688539_10048810 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4784307725a26858b657925_93285085';
?>
			<div id="content">
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
					<div>
						<input type="checkbox" name="agree" id="agree" />
						<label for="agree">Przeczytałem i akceptuje <a href="#">regulamin</a>.</label>
					</div>
					<div>
						<input id="securityq" name="securityq" type="text">
						<label for="securityq">Ile to 2+2?</label>
					</div>
					<button type="submit" name="register">Zarejestruj</button>
				</form>
			</div>
			<div style="clear:both;"></div><?php }
}
?>