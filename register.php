<?php @include ('header.php'); ?>
	
	<body>
		<div id="container">
			<form method="POST" action="rejestracja.php">
				<p style="text-align:center;margin:0;"><strong>Rejestracja</strong></p><br />
				<label>Imię: <input name="imie" type="text" /></label><br /><br />
				<label>Login: <input name="login" type="text" /></label><br /><br />
				<label>Hasło: <input name="password" type="password" /></label><br /><br />
				<label>E-mail: <input name="email" type="text" /></label><br /><br />
				<input type="submit" value="Zarejestruj się" /><br /><br />
			</form>
		</div>
	</body>
	
<?php @include ('footer.php'); ?>