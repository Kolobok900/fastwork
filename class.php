<?php
class Character
{
    protected $name;
    protected $health;

    public function __construct(string $name, int $health)
    {
        $this->name = $name;
        $this->health = $health;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getHealth(): int
    {
        return $this->health;
    }
}