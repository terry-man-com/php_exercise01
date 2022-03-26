<?php

require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Taxi.php';

$taxi1 = new Taxi("クラウンのタクシー", 222, "black");

echo $taxi1->pickUp(2);
echo $taxi1->information();
echo "\n";

echo $taxi1->pickUp(1);
echo $taxi1->information();
echo "\n";

echo $taxi1->lower(2);
echo $taxi1->information();
echo "\n";

echo $taxi1->lower(2);