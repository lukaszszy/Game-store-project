<link rel="stylesheet" href="assets/css/sliderStyle.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<script src="assets/js/slider.js"></script>
<meta charset="UTF-8">

<h1>Bestsellery</h1>

<div id="slideshow">
{foreach from=$bestAction_search item=cat}
	<div><a href="/_Vasto_Lorde/TAS/show_product.php?search={$cat.Game_ID}"><img src="templates/images/{$cat.Game_ID}.jpg"></a></div>
{/foreach}
</div>
