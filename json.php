<?php
header('Content-Type: application/json');

require_once "db.php";

$polaczenie = polacz_z_db();
$wynik = zapytaj($polaczenie, $_GET['odile']);

$json = $wynik->fetch_all(MYSQLI_ASSOC);

echo json_encode($json);

$polaczenie->close();

?>
