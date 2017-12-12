<?php /* Smarty version 3.1.27, created on 2017-12-11 13:16:26
         compiled from "/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/userDataForm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1910799485a2e771ab6f9e1_46178320%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b34fca195d6e1646d7e22a762a0d8501ec75d5' => 
    array (
      0 => '/home/fokavast/domains/arenaskilla.pl/public_html/_Vasto_Lorde/TAS/templates/userDataForm.tpl',
      1 => 1512994581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1910799485a2e771ab6f9e1_46178320',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2e771ab79bb1_92212511',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2e771ab79bb1_92212511')) {
function content_5a2e771ab79bb1_92212511 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1910799485a2e771ab6f9e1_46178320';
?>
<link rel="stylesheet" href="assets/css/styleUserDataForm.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<div id="contentBox">    <!-- faktyczna zawartość strony, tutaj to co będzie się zmieniać na podstronach-->
  <div id="userAccount"> <!--caly box z ustawieniami konta -->
        <div id="userAccountMenu">
          <ul>
            <li><a href="#">Dane konta</a></li>
            <li><a href="#">Historia zamówień</a></li>
            <li><a href="#">Twoja biblioteka gier</a></li>
          </ul>
        </div>
        <div style="clear:both;"></div>
        <div id="selectedMenuView">
        <div class="dataBox"> <!-- box z danymi konta-->
        <div class="inputTypeDescription">Dane konta</div> <!--box z opisem każdego okienka na formularzu -->
          <div class="inputDescription" style="float:left;">
          <label>E-mail</label><br />
          <label>Login</label><br />
          <label>Hasło</label><br />
        </div>
          <div class="inputBox">
            <input type="text" placeholder="E-mail..." name="email"><br />
            <input type="text" placeholder="Login..." name="userLogin"><br />
            <input type="text" placeholder="Hasło..." name="password"><br />
          </div>
          <div style="clear:both;"></div>
      </div>

      <div class="dataBox"> <!-- box z danymi adresowymi-->
        <div class="inputTypeDescription">Dane adresowe</div> <!--box z opisem każdego okienka na formularzu -->
        <div class="inputDescription" style="float:left;">
          <label>Imię i Nazwisko</label><br />
          <label>Ulica</label><br />
          <label>Kod Pocztowy</label><br />
          <label>Miasto</label><br />
          <label>Numer Telefonu</label><br />
        </div>
        <div class="inputBox">
          <input type="text" placeholder="Imię i nazwisko..." name="name"><br />
          <input type="text" placeholder="Adres..." name="adress"><br />
          <input type="text" placeholder="Kod Pocztowy..." name="areaCode"><br />
          <input type="text" placeholder="Miasto..." name="city"><br />
          <input type="text" placeholder="Numer Telefonu..." name="phoneNumber"><br />
        </div>
        <div style="clear:both;"></div>
          <button type="submit" class="changeUserData">Zatwierdź zmiany</button>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>
</div>
<?php }
}
?>