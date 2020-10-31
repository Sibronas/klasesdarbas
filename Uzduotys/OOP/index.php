<?php

include 'car.php';
include 'testuotiAuto.php';
$lengvasis = new Car('raudona');
$fura = new Car('Zalias', 3, 1000);

$testavimas = new testuotiAuto();

$testavimas->testinisVaziavimas($lengvasis, "20km/h");
$testavimas->testinisVaziavimas($fura, '200');




