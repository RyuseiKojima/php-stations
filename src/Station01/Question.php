<?php declare(strict_types=1);

namespace Src\Station01;

use function gettype;

class Question
{
    public function main(): array
    {
        $a = 1;
        $b = true;
        echo gettype($a) . PHP_EOL.gettype($b) ;

        return [$a, $b];
    }
}

(new Question())->main();
