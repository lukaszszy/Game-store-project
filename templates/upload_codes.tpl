<link rel="stylesheet" href="assets/css/styleUserDataForm.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<script src="assets/js/userFormScript.js"></script>
<meta charset="UTF-8">

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
					<div class="inputTypeDescription">Dodaj kody dla gry</div>
<form method="POST" action="addCode.php">
								<section class="adminBox">
								<label class="dataDescr">Id gry</label>
								<input id="selected_id" type="text" placeholder="Id..." name="selected_id" class="dataDescr">

								<label>Kody dla gry</label>
								<textarea id ="selected_codes" name="selected_codes" placeholder="Tutaj wprowadź kody gry"></textarea>

								<input type="submit" name="submit" value="Zatwierdź Zmiany" class="confirmationButton">
								</section>
</form>


		</div>
		<div style="clear:both;"></div>
	</div>
</div>
