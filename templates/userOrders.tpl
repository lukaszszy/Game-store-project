<link rel="stylesheet" href="assets/css/styleUserDataForm.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<script src="assets/js/userFormScript.js"></script>

<div id="contentBox">    <!-- faktyczna zawartość strony, tutaj to co będzie się zmieniać na podstronach-->
  <div id="userAccount"> <!--caly box z ustawieniami konta -->
        <div id="userAccountMenu">
            <ul>
            <li><a href="/_Vasto_Lorde/TAS/userDataForm.php">Dane konta</a></li>
            <li><a href="/_Vasto_Lorde/TAS/paymentForm.php">Dostępne środki</a></li>
            <li><a href="/_Vasto_Lorde/TAS/userOrders.php">Twoja biblioteka gier</a></li>
{if $user_type == "admin"}
	    <li><a href="/_Vasto_Lorde/TAS/upload.php">Dodaj grę</a></li>
	    <li><a href="/_Vasto_Lorde/TAS/upload_codes.php">Dodaj kody</a></li>
{/if}
          </ul>
        </div>
        <div style="clear:both;"></div>
        <div id="selectedMenuView">
          <div class="inputTypeDescription">Zakupione gry</div>

<table>
  <tr>
    <th>Tytuł</th>
    <th>Klucz</th>
    <th>Cena</th>
    <th>Data</th>
  </tr>
{foreach from=$userOrders_list item=cat}
<tr>
<td>{$cat.title}</td>
<td>{$cat.game_key}</td>
<td>{$cat.price}</td>
<td>{$cat.date}</td>
</tr>
{/foreach}

</table>

  </div>
</div>
