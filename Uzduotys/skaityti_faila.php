<?php

$manofailas = fopen("manoDuomenys.txt", "r") or die("Nepavyko atidaryti failo");

echo fread($manofailas, filesize("manoDuomenys.txt"));

//$failoTekstas = fread($manofailas, filesize("manoDuomenys.txt"));
//
//echo $failoTekstas;

//$failoTekstas = fopen($manofailas, filesize("manoDuomenys.txt"));
//
//echo $failoTekstas;



fwrite($manofailas, "Nauja tekstine eilute<br>"); // jei noriu prideti(irasyti) teksto antru uzkrovimu

fclose($manofailas);