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
					<div class="inputTypeDescription">Dodaj grę</div>

					﻿		    <form method="POST" action="uploadGame.php" enctype="multipart/form-data">
								<section class="adminBox">
								<label class="dataDescr">Tytuł gry</label>
								<input id="name" type="text" placeholder="Tytuł..." name="name" class="dataDescr">

								<label class="dataDescr">Cena</label>
								<input id="name" type="text" placeholder="Cena..." name="price" class="dataDescr">


								<label class="dataDescr">Wytwórnia</label>
								<input id ="company" type="text" placeholder="Wytwórnia..." name="company" class="dataDescr">

								<label class="dataDescr">Kategoria</label>
								<input id ="category" type="text" placeholder="Tutaj wprowadź kategorie gry po przecinku" name="category" class="dataDescr">

								<label>Opis gry</label>
								<textarea name="description" placeholder="Tutaj wprowadź opis gry"></textarea>

								<label>Dodaj ikonę gry (pamiętaj, że wymiary muszą wynosić 100px x 250px)</label>
								<input type="file" name="fileToUpload" id="fileToUpload">
								

								<input type="submit" name="submit" value="Zatwierdź Zmiany" class="confirmationButton">
								</section>
							</form>


		</div>
		<div style="clear:both;"></div>
	</div>
</div>
