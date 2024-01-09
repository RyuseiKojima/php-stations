<?php declare(strict_types=1);

namespace Src\Station16\Question;

class Human
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function buyCar(Car $car): void
    {
        echo $this->name . 'は' . $car->name . 'を購入しました';
    }
}
