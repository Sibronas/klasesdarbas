<?php

class testuotiAuto
{
    function testinisVaziavimas(Car $auto, string $greitis): void
    {
        $auto->vaziuoti($greitis, 0.5); //Automobilis vaziuoja 50km/h
        echo "<br>Duru kiekis: " . $auto->gautiDuruKieki(); //Parodys kiek turi automobilis duru
        echo "<br>Rida: " . $auto->gautiRida() . "km";
        echo "<br><br>";
    }
}