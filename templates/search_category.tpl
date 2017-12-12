<link rel="stylesheet" href="assets/css/styleCategory.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<meta charset="UTF-8">

  <style="font: 40px;">{$searched}</style><br />

  {foreach from=$category_search item=cat}

    <div class="productTile"><div class="miniature"><img src="templates/images/{$cat.Game_ID}.jpg"></div><div class="productName">{$cat.Title}</div><div class="productName">Wytwórnia: {$cat.Company}</div><div class="productName">Cena: {$cat.Price} zł.</div><button type="button"><a href="#">Dodaj do koszyka</a></button>

<a href="/_Vasto_Lorde/TAS/show_product.php?search={$cat.Game_ID}">
<button type="button">
Zobacz stronę produktu
</button>
</a>

</div>

  {/foreach}

  <div style="clear:both;"></div>
