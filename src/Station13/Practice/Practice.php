<?php declare(strict_types=1);

namespace Src\Station13\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        $dog = new Dog();
        echo $dog->active();
    }
}

(new Practice)->main();
