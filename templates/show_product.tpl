<meta charset="UTF-8">
<link rel="stylesheet" href="assets/css/styleProduct.css" type="text/css" />
<div id="contentBox">        <!-- faktyczna zawartość strony, tutaj to co będzie się zmieniać na podstronach-->
	{foreach from=$games_list item=cat}

		<div id="productPic"><img src="templates/images/{$cat.Game_ID}.jpg" style="float: left"></div>
		<div id="nextToPic">          <!-- informacje znajdujące się obok zdjęcia, tutaj dane typu nazwa przedmiotu i cena, w dalszej rozbudowie strony może też kategoria, rok wydania etc?-->
			<div id="productName" class="productName">{$cat.Title}</div>
			<div id="productProducer">Wytwórnia: {$cat.Company}</div>
			<div id="productPrice">Cena: <span class="productPrice">{$cat.Price}</span> zł.</div>
			
			{IF {$cat.Keys} > 0}
			<a href="/_Vasto_Lorde/TAS/add_basket.php?gameid={$cat.Game_ID}"><button type="button" class="addToCart">Dodaj do koszyka</button></a>
			{/IF}

			{IF {$cat.Keys} == 0}
			<button type="button" class="addToCart">Produkt niedostępny</button>
			{/IF}
	
		</div>
		<div style="clear:both;"></div>
		<div id="productDescription">
		<div style="font-size: 24px; border-bottom: 2px solid; margin-bottom: 30px;">Opis gry:</div>
		{$cat.Description}<br /><br /></div>

		<div style="clear:both;"></div>

{/foreach}
</div>
