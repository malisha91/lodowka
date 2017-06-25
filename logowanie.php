<?php @include ('header.php');

if ($_POST['login'] == null || $_POST['password'] == null)
	header("Location: login.php");
else {
	$login = $_POST['login'];
	$pass = $_POST['password'];

	// Sprawdzam, czy w bazie istnieje użytkownik o danym loginie i haśle
	$czy_istnieje = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `user` WHERE `login` = '$login' AND `Password` = '$pass'")); 
	if ($czy_istnieje[0] == 0)
		echo 'Logowanie nieudane. Spróbuj ponownie.';
	else {
		$_SESSION['nick'] = $login;
		header("Location: index.php");
	}
}
?>