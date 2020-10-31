<?php

$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];

echo json_encode($age);

echo spausdinti($age);


function spausdinti(array $arr): void {
    foreach ($arr as $item) {
        echo $item."<br>";
    }
}

$jsonString = '{"Peter": 35, "Ben": 37, "Joe": 43}';

$kint = json_decode($jsonString, true);

spausdinti($kint);

//echo $kint['Joe'];

//var_dump($kint);

//var_dump(json_decode($jsonString));

