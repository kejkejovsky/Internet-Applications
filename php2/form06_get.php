<?php
	session_start();
	$link=mysqli_connect("localhost","scott","tiger","instytut");
	if(!$link){
		printf("Connect failed:%s\n",mysqli_connect_error());
		exit();
	}
print<<<KONIEC
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		</head>
		<body>
			<a href="form06_post.php">Dodaj</a><br/>
KONIEC;
	if(isset($_SESSION['dobrze'])){
		if($_SESSION['dobrze'] == 1){
			unset($_SESSION['dobrze']);
			echo "Query passed, new row added"."<br/>";
		}
	}
	$sql="SELECT * FROM pracownicy";
	$result=$link->query($sql);
	foreach($result as $v){
		echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
	}
	$result->free();
	$link->close();
echo "</body></html>";
?>