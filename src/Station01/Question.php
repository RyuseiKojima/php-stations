<?php

namespace Src\Station01;

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
