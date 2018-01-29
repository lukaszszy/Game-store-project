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
          <div class="inputTypeDescription">Dostępne środki na koncie</div>
          <section class="dataBox">
            {foreach from=$userData_list item=cat}
              <div class="dataDescr">Kwota</div>
              <div class="dataFrame" id="saldoFrame">{$cat.account} PLN</div>
            {/foreach}
          </section>
          <div class="inputTypeDescription">Doładuj konto</div>
          <section class="dataBox">
              <div class="dataDescr">Wprowadź kwotę</div>
              <div>
                <form method="POST" action="paymentOntoAccount.php">
                			<div>
                				<input id="price" name="price" type="text" placeholder="Podaj kwotę...">
                				<div style="margin-top:2rem;"><button type="submit" class="confirmationButton" name="register">Zatwierdź</button></div>
                      </div>
                </form>
              </div>
          </section>
        <div style="clear:both;"></div>
    </div>
  </div>
</div>
