<?php

namespace Characters;

use Character;

require "class.php";

class Warrior extends Character
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);
    }

    public function attack(): void
    {
        echo "Воин {$this->name} наносит удар мечом!\n";
    }
}

class Mage extends Character
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);
    }

    public function attack(): void
    {
        echo "Маг {$this->name} применяет заклинание!\n";
    }
}

class Archer extends Character
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);
    }

    public function attack(): void
    {
        echo "Лучник {$this->name} стреляет из лука!\n";
    }
}

$warrior = readline("Введите имя война: ");
$warriorhp = readline("Введите кол-во здоровья война: ");
$mage = readline("Введите имя мага: ");
$magehp = readline("Введите кол-во здоровья мага: ");
$archer = readline("Введите имя лучника: ");
$archerhp = readline("Введите кол-во здоровья лучника: ");

// Создание массива персонажей
$characters = [
    new Warrior($warrior, $warriorhp),
    new Mage($mage, $magehp),
    new Archer($archer, $archerhp),
];

// Вызов метода attack() для каждого персонажа
foreach ($characters as $character) {
    $character->attack();
}