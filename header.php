<?php
	
	$mysql_server = "localhost"; 
    $mysql_admin = "root"; 
    $mysql_pass = ""; 
    $mysql_db = "projekt_narzedzia";
	
    @mysql_connect($mysql_server, $mysql_admin, $mysql_pass) 
		or die('Brak połączenia z serwerem MySQL.');
	
    @mysql_select_db($mysql_db) 
		or die('Błąd wyboru bazy danych.');
	
	session_start();
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php
		if($_SERVER['REQUEST_URI'] == '/lodowka/index.php') {
			echo '<title>Lodówka</title>';
			echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
			echo '<script src="js/main.js"></script>';
			echo '<link rel="stylesheet" href="css/style.css" />';
		} elseif($_SERVER['REQUEST_URI'] == '/lodowka/login.php' || $_SERVER['REQUEST_URI'] == '/lodowka/register.php') {
			echo '<title>Lodówka - logowanie</title>';
			echo '<link rel="stylesheet" href="css/login.css" />';
		}
		?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>