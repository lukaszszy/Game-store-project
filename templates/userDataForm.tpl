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
          <div class="inputTypeDescription">Dane konta</div>
          <section class="dataBox">
{foreach from=$userData_list item=cat}
              <div class="dataDescr">Login</div>
              <div class="dataFrame" id="loginFrame">{$cat.login}</div>
              <div>
                <input id="new_login" type="submit" name="new_login" class="changeRequest" value="Zmień">
                <input id="new_login" type="submit" name="new_login" class="changeConfirmation" value="Zatwierdź zmiany">
                <input id="new_login" type="reset" name="login" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Hasło</div>
              <div class="dataFrame" id="passwordFrame">{$cat.password}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">E-mail</div>
              <div class="dataFrame" id="eMailFrame">{$cat.email}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
{/foreach}
          </section>
	<div class="inputTypeDescription">Dane adresowe</div>
          <section class="dataBox">
{foreach from=$userData_list item=cat}
              <div class="dataDescr">Imię</div>
              <div class="dataFrame" id="nameFrame">{$cat.name}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany"><br />
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Nazwisko</div>
              <div class="dataFrame" id="surnameFrame">{$cat.surname}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Telefon</div>
              <div class="dataFrame" id="phoneFrame">{$cat.phone}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Adres</div>
              <div class="dataFrame" id="addressFrame">{$cat.address}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Miasto</div>
              <div class="dataFrame" id="townFrame">{$cat.town}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
              <div class="dataDescr">Kod pocztowy</div>
              <div class="dataFrame" id="zipCodeFrame">{$cat.zipcode}</div>
              <div>
                <input type="submit" class="changeRequest" value="Zmień">
                <input type="submit" class="changeConfirmation" value="Zatwierdź zmiany">
                <input type="reset" class="cancelChangeRequest" value="Anuluj">
              </div>
{/foreach}
          </section>
  </div>
</div>
