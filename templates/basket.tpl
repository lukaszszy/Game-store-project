<link rel="stylesheet" href="assets/css/styleUserDataForm.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<script src="assets/js/userFormScript.js"></script>
<meta charset="UTF-8">


  <div id="contentBox">    <!-- faktyczna zawartość strony, tutaj to co będzie się zmieniać na podstronach-->
    <div id="userAccount"> <!--caly box z ustawieniami konta -->

          <div style="clear:both;"></div>
          <div id="selectedMenuView">
            <div class="inputTypeDescription">Koszyk</div>

<table>
  <tr>
    <th>Tytuł</th>
    <th>Wytwornia</th>
    <th>Cena</th>
    <th></th>
  </tr>
{foreach from=$game_list item=game}
  <tr>
    <td>{$game.title}</td>
    <td>{$game.company}</td>
    <td>{$game.price}</td>
    <td><a href="/_Vasto_Lorde/TAS/delete_basket.php?id={$game.id}"><button type="button" class="deleteFromCart">Usuń</button></a></td>
  </tr>
{/foreach}
</table>

{if $size > 0}
<a href="/_Vasto_Lorde/TAS/buyGames.php"><button type="button" class="buyAllProduct confirmationButton" style="width:50%; margin-top:2rem;">Kup</button></a>
{/if}
          </section>
  </div>
</div>
