<?php declare(strict_types=1);

namespace Src\Station13\Question;

require_once('vendor/autoload.php');

class Question
{
    public function main(): void
    {
        $car = new Car();
        $car->turnRight();
        $car->backLeft();
    }
}

(new Question)->main();
