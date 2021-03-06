<?php

use Norbertas\Grupe;
use Norbertas\Helper;
use Norbertas\Spausdinimas;
use Norbertas\Studentas;


require_once __DIR__.'/../../../vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler(
    __DIR__.'/../../../logs/studentasApp.log', Monolog\Logger::INFO));
$log->info('Aplikacija pradejo darba');

$studentaiM = [];
$studentaiV = [];
$studentuDuomenys = [
    ['name' => 'Jonas', 'surename' => 'Jonaitis', 'groupId' => 777, 'code' => 39012120001],
    ['name' => 'Petras', 'surename' => 'petraitis', 'groupId' => 777, 'code' => 52010120001],
    ['name' => 'Ona', 'surename' => 'Oniene', 'groupId' => 777, 'code' => 49112120001],
    ['name' => 'Zita', 'surename' => 'Zitaite', 'groupId' => 777, 'code' => 61512120001],
    ['name' => 'Kestas', 'surename' => 'Kestaitis', 'groupId' => 777, 'code' => 35712121402],
];

foreach ($studentuDuomenys as $studentoDuomenys) {
    $studentas = new Studentas();
    $grupe = new Grupe($studentoDuomenys['groupId']);

    $studentas->setName($studentoDuomenys['name']);
    $studentas->setSurename($studentoDuomenys['surename']);
    $studentas->setGroup($grupe);
    $studentas->setCode($studentoDuomenys['code']);

    if(Helper::arVyras($studentas)){
        $studentaiV[] = $studentas;
    } else {
        $studentaiM[] = $studentas;
    }
}
echo "Vyrai:";
Spausdinimas::spausdintiHtml($studentaiV);
echo "Moterys:";
Spausdinimas::spausdintiHtml($studentaiM);

var_dump(Helper::rastiJauniausiaStudenta($studentaiV));
var_dump(Helper::rastiVyriausiaStudenta($studentaiV));