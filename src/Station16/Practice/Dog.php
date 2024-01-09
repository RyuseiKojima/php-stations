<?php declare(strict_types=1);

namespace Src\Station16\Practice;

class Dog
{
    private string $name = '';
    public int $age = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        echo '走る';
    }

    public function addAge(int $year): int
    {
        $this->age += $year;
        return $this->age;
    }

    public function walkWithDog(self $dog): string
    {
        return $this->name . 'と' . $dog->name . 'が散歩する';
    }
}
