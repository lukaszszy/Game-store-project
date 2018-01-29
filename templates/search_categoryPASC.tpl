<link rel="stylesheet" href="assets/css/styleCategory.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<meta charset="UTF-8">


<h1>Kategoria - {$searched}</h1>
<div id="menuTop">
							<div class="topMenuItem">Sortuj: </div>
							<a href="search_category.php?search={$searched}"><div class="topMenuItem">po nazwie</div></a>
							<a href="search_categoryPASC.php?search={$searched}"><div class="topMenuItem">po cenie rosnąco</div></a>
							<a href="search_categoryPDESC.php?search={$searched}"><div class="topMenuItem">po cenie malejąco</div></a>
</div>
<h1></h1>
<div id="selectedCategoryView">
  {foreach from=$category_search item=cat}

    <div class="productTile"><div class="miniature"><img src="templates/images/{$cat.Game_ID}.jpg"></div><div class="productName">{$cat.Title}</div><div class="productComp">Wytwórnia: {$cat.Company}</div><div>Cena: <span class="productPrice">{$cat.Price}</span> zł</div>

{IF {$cat.Keys} > 0 }
<a href="/_Vasto_Lorde/TAS/add_basket.php?gameid={$cat.Game_ID}">
<button type="button" class="addToCart" onlick="">Dodaj do koszyka</button>
</a>
{/IF}

{IF {$cat.Keys} == 0 }
<button type="button" class="addToCart" onlick="">Produkt niedostępny</button>
{/IF}

<a href="/_Vasto_Lorde/TAS/show_product.php?search={$cat.Game_ID}">
<button type="button">
Zobacz stronę produktu
</button>
</a>

</div>
  {/foreach}
</div>
<!--  <div style="clear:both;"></div> -->
