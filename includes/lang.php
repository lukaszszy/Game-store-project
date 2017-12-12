<?php
	if(isset($_GET['lang'])){
		$lang = $_GET['lang'];
		if(strlen($lang) == 2){
			$_SESSION['lang'] = $lang;
			setcookie('lang', $lang, time() + (3600 * 24 * 30));
		}
		else
			$lang = 'en';
	}
	else if(isset($_SESSION['lang'])){
		$lang = $_SESSION['lang'];
	}
	else if(isset($_COOKIE['lang'])){
		$lang = $_COOKIE['lang'];
	}
	else{
		$lang = 'en';
	}
	
	switch ($lang) {
		case 'en':
			$lang_file = 'lang.en.php';
		break;
		
		case 'pl':
			$lang_file = 'lang.pl.php';
		break;
		
		default:
			$lang_file = 'lang.en.php';

	}

	include_once(realpath(dirname(__FILE__) . '/../languages/'.$lang_file));
?>