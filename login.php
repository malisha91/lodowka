<?php @include ('header.php'); ?>
	
	<body>
		<div id="container">
			<form method="POST" action="logowanie.php">
				<p style="text-align:center;margin:0;">Witaj w programie <strong>Lodówka!</strong></p>
				<p style="text-align:center;margin:0;">Zaloguj się, aby rozpocząć</p><br /><br />
				<label>Login:<input name="login" type="text" /></label><br /><br />
				<label>Hasło: <input name="password" type="password" /></label><br /><br />
				<input type="submit" value="Zaloguj" /><br /><br />
				<a href="register.php">Zarejestruj się</a>
			</form>
		</div>
	</body>
	
<?php @include ('footer.php'); ?>