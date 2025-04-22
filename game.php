<?php
require_once(__Dir__.'/vendor/autoload.php');

use Vastilok\Rpg\Warrior;
use Vastilok\Rpg\Mage;
use Vastilok\Rpg\Archer;

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
