<?php @include ('header.php'); 
if ($_SESSION['nick'] != null) {
?>
	
	<body>
		<form action="logout.php">
			<input type="submit" value="Wyloguj" />
		</form>
		<div id="container">
			<div style="text-align:center;padding:10px;font-size:1.5em;font-weight:600;"><?php echo "Witaj ".$_SESSION['nick'].' w programie lodówka.'; ?></div>
			<div id="month"></div>
			<div id="calendar"></div>
		</div>
	</body>
	
<?php @include ('footer.php'); }
else
	header("Location: login.php");
?>