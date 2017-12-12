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
