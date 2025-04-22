<?php
namespace Vastilok\Rpg;
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