<?php @include ('header.php');

if ($_POST['imie'] == null || $_POST['login'] == null || $_POST['password'] == null || $_POST['email'] == null)
	header("Location: register.php");
else {
	$name = $_POST['imie'];
	$login = $_POST['login'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	
	echo $login;
	
	// Sprawdzam, czy w bazie istnieje użytkownik o danym loginie i haśle
	$czy_istnieje = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `user` WHERE `login` = '$login'")); 
	if ($czy_istnieje == 0)
		echo 'Rejestracja nieudana. Użytkownik o podanym loginie istnieje.';
	else {
		mysql_query("INSERT INTO user VALUES ('','$name','$login','$pass','$email')");
		echo 'Rejestracja udana.';
		echo '<a href="login.php">Zaloguj się</a>';
	}
}
?>