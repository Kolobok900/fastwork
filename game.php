<?php
require "character.php";
require "warrior.php";
require "mage.php";
require "archer.php";

use Character\Warrior;
use Character\Mage;
use Character\Archer;

$warrior = readline("Введите имя война: ");
$warriorhp = readline("Введите кол-во здоровья война: ");
$mage = readline("Введите имя мага: ");
$magehp = readline("Введите кол-во здоровья мага: ");
$archer = readline("Введите имя лучника: ");
$archerhp = readline("Введите кол-во здоровья лучника: ");

$characters = [
    new Warrior($warrior, $warriorhp),
    new Mage($mage, $magehp),
    new Archer($archer, $archerhp),
];

foreach ($characters as $character) {
    $character->attack();
}
