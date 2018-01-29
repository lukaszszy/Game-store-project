<link rel="stylesheet" href="assets/css/styleCategory.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<meta charset="UTF-8">

  <style="font: 40px;">{$searched}</style><br />

  {foreach from=$search_result item=cat}

<div class="productTile">
<div class="miniature">
<img src="templates/images/{$cat.Game_ID}.jpg">
</div><div class="productName">{$cat.Title}</div>
<div class="productName">Wytwórnia: {$cat.Company}</div>
<div class="productName">Cena: {$cat.Price} zł.</div>

{IF {$cat.Keys} > 0}
<a href="/_Vasto_Lorde/TAS/add_basket.php?gameid={$cat.Game_ID}"><button type="button" class="addToCart">Dodaj do koszyka</button></a>
{/IF}

{IF {$cat.Keys} == 0}
<button type="button">
Produkt niedostępny
</button>
{/IF}

<a href="/_Vasto_Lorde/TAS/show_product.php?search={$cat.Game_ID}">
<button type="button">
Zobacz stronę produktu
</button>

</a>
</div>
  {/foreach}
  <div style="clear:both;"></div>
