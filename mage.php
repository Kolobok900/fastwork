<?php
namespace Character;

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