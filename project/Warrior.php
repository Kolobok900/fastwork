<?php
namespace Vastilok\Rpg;

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
