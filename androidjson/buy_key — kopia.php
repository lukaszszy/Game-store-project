<?php


	if(isset($_GET['login']) && $_GET['login'] != "" && isset($_GET['password']) && $_GET['password'] != "" && isset($_GET['idgry']) && $_GET['idgry'] != ""){ // Jeśli w ogóle coś się przesłało
		include("config/db.php");
		$query = "SELECT User_ID FROM `".$TABLE_USERS."` WHERE Login='".$_GET['login']."' AND Password='".$_GET['password']."';";//formuje zapytanie
		$result = mysqli_query($sql, $query) or die('Blad!');
		
		$row = mysqli_fetch_row($result);//wczytuje kolejny (w tym przypadku jedyny) wiersz z wyniku zapytania
		
		//jesli kasa_na_koncie-koszt gry >= 0 (uzytkownik ma kase na zakup) -> rob dalej, w przeciwnym echo "Brak srodkow na koncie";
		//tu wrzucic kod.
		
		//jesli istnieje wolny kod (jest dostepny klucz gry w bazie do sprzedazy) -> rob dalej, w przeciwnym echo "Brak kluczy do tej gry w bazie."
		//tu wrzucic kod
		
		
		$queryy = "CALL buyProduct(".$row[0].", ".$_GET['idgry'].");";
		$resultt = mysqli_query($sql, $queryy) or die('Wprowadziles bledne dane!');
		
		$querykey = "CALL showLastKeyForGame(".$row[0].", ".$_GET['idgry'].");";
		$resulttt = mysqli_query($sql,$querykey) or die('Blad wyswietlenia klucza!');
		while ($row = mysqli_fetch_array($resulttt)){   
      echo "Twoj klucz to : ".$row[0]; 
  }
	}
	else{
		echo "Brak argumentow";
	}
?>

