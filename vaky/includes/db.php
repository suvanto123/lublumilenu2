<?php
$palvelin = "localhost";
$kayttaja = "root";
$salasana = "";
$tietokanta = "palsta_db";


$yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);


if ($yhteys->connect_error) {
die("Yhteyden muodostaminen epäonnistui: " . $yhteys->connect_error);
}

$yhteys->set_charset("utf8");

?>