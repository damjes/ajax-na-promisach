<?php

function polacz_z_db() {
	$polaczenie = new mysqli("localhost", "root", "", "ajax");
	if ($polaczenie->connect_errno) {
		echo "Błąd połączenia z bazą: " . $polaczenie->connect_error;
		exit();
	}
	return $polaczenie;
}

function zapytaj($polaczenie, $odile) {
	$zapytanie = "SELECT * FROM liczby LIMIT ?, 3";
	$szablon = $polaczenie->prepare($zapytanie);
	$szablon->bind_param("i", $odile);
	$szablon->execute();

	return $szablon->get_result();
}