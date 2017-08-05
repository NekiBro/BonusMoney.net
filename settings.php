<?
error_reporting(E_ALL);
ini_set('display_errors','Off');

session_start();
$db = mysqli_connect('localhost', 'vh22813_bonus', 'vh22813_bonus', 'vh22813_bonus');

if (!$db) { 
   printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
}

mysqli_set_charset($db, "utf8");


function text($text, $db, $set = "") {
	$text = strip_tags($text);
	if ($set == 'email') {
		if (!filter_var($text, FILTER_VALIDATE_EMAIL)) {
			$text = "";
		}
	}elseif ($set == 'en_num') {
		if (!preg_match('/^[a-zA-Z0-9]+$/', $text)) {
			$text = "";
		}
	}elseif ($set == 'ru_en_num') {
		if (!preg_match('/^[а-Яa-Z0-9]+$/', $text)) {
			$text = "";
		}
	}elseif ($set == 'ip') {
		if (!filter_var($text, FILTER_VALIDATE_IP)) {
			$text = "";
		}
	}elseif ($set == 'login') {
		if (!preg_match('/^[a-zA-Z0-9\-\_]+$/', $text)) {
			$text = "";
		}
	}
	$text = mysqli_real_escape_string($db, $text);
	$text = htmlspecialchars($text, ENT_QUOTES);
	if(get_magic_quotes_gpc ()){$text = stripslashes($text);}
	$text = trim($text);

	return $text;
}
?>