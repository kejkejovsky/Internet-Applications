<?php
	session_start();
print<<<KONIEC
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		</head>
		<body>
			<a href="form06_get.php">Wyświetl</a>
			<form action="form06_redirect.php" method="POST">
				id_prac <input type="text" name="id_prac">
				nazwisko <input type="text" name="nazwisko">
				<input type="submit" value="Wstaw">
				<input type="reset" value="Wyczysc">
			</form>
KONIEC;
	if(isset($_SESSION['blad'])){
		if($_SESSION['blad'] == 1){
			unset($_SESSION['blad']);
			echo "Query error: ".$_SESSION['msg']."<br/>";
		}
	}
	echo "</body></html>";
?>