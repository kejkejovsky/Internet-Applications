<!DOCTYPE html>
<html>
	<head>
		<title> PHP </title>
		<meta charset="utf-8" />
	</head>
	<body>
	<a href="index.php">Wstecz</a><br/>
	<?php
	if(isset($_GET['utworzCookie'])){
		$time = $_GET['czas'];
		if(setcookie("ciastko", "ciasteczko", time() + $time, "/")){
			echo "Utworzono zmienną Cookie";
		}
	}
	?>
	</body>
</html>