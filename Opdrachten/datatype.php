<?php
//Opgave #1
$naam = "Carl";
$straat = "Kruislaan 11";
$woonplaats = "Utrecht";
//Opgave #2
$naw = $naam." " . $straat . " " . $woonplaats;
echo "Gegevens: $naw";
//Opgave #3
echo <<<TEKST
 <br>Salarisspecificatie van $naam: 2000 euro
 <br>Maand: November
 <br>Jaar: 2020   
TEKST;
