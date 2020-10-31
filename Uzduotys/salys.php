<?php
$ceu = [
"Italy" => "Rome",
"Luxembourg" => "Luxembourg",
"Belgium" => "Brussels",
"Denmark" => "Copenhagen",
"Finland" => "Helsinki",
"France" => "Paris",
"Slovakia" => "Bratislava",
"Slovenia" => "Ljubljana",
"Germany" => "Berlin",
"Greece" => "Athens",
"Ireland" => "Dublin",
"Netherlands" => "Amsterdam",
"Portugal" => "Lisbon",
"Spain" => "Madrid",
"Sweden" => "Stockholm",
"United Kingdom" => "London",
"Cyprus" => "Nicosia",
"Lithuania" => "Vilnius",
"Czech Republic" => "Prague",
"Estonia" => "Tallin",
"Hungary" => "Budapest",
"Latvia" => "Riga",
"Malta" => "Valetta",
"Austria" => "Vienna",
"Poland" => "Warsaw",
] ;

var_dump ($ceu);

foreach ($ceu as $valstybe => $sostine)  {
    echo "Valstybe: $valstybe Sostine: $sostine <br>";
}

echo "<hr>";
echo "<hr>";


ksort($ceu);
    foreach($ceu as $valstybe => $sostine) {
        echo "Valstybe: $valstybe Sostine: $sostine <br>";
}

echo "<hr>";
echo "<hr>";

$ilgis = count($ceu);



//for ($i = 0; $i <= $ilgis; $i++) {
//    if ($i % 3 == 0) {
//        foreach ($ceu as $valstybe => $sostine) {
//            echo "Valstybe: $valstybe Sostine: $sostine <br>";
// //Kodėl atspausdina tokį patį sąrašą 25  kartus, o ne kas antra elementą?
//        }
//    }
//}

$j = 0;
foreach ($ceu as $valstybe => $sostine) {
    if ($j % 2 === 0) {
        echo "$j] Valstybe: $valstybe Sostine: $sostine <br>";
    }
    $j++;
}

echo "<hr>";
echo "<hr>";

$raide = 'a';
foreach ($ceu as $valstybe => $sostine) {
    if (strpos($valstybe, $raide) !== false || strpos($sostine, $raide) !== false) {
        echo "Valstybe: $valstybe Sostine: $sostine <br>";
    }
}

echo "<hr>";
echo "<hr>";

$ilgumas = count($ceu);
$vidurys = ceil($ilgumas / 2);
$pirmas = array_slice($ceu, $vidurys);
$antras = array_slice($ceu, 0, $vidurys);

echo '<div style="float:left">';
foreach ($pirmas as $valstybe => $sostine) {
    echo "Valstybe: $valstybe Sostine: $sostine <br>";
}
echo '</div>';

echo '<div style="float:left">';
foreach ($antras as $valstybe => $sostine) {
    echo "Valstybe: $valstybe Sostine: $sostine <br>";
}

echo '</div>';








