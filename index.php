<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AJAX na promisach</title>
	<link rel="stylesheet" href="styl.css">
</head>
<body>
<h1>Nasze artykuły</h1>
<div id="artykuly">
<?php

require_once "db.php";

$polaczenie = polacz_z_db();
$wynik = zapytaj($polaczenie, 0);

while($wiersz = $wynik->fetch_assoc()) {
	echo "<div>";
	echo "<h2>{$wiersz['liczba']}</h2>";
	echo "<p>{$wiersz['nazwa']}</p>";
	echo "</div>";
}

$polaczenie->close();

?>
</div>
<button onclick="wiecej()">Pokaż więcej</button>
<script src="skrypt.js"></script>
</body>
</html>