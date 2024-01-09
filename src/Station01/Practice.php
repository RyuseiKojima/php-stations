<?php declare(strict_types=1);

namespace Src\Station01;

use function gettype;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 'test';
        echo gettype($a) . PHP_EOL;
        $a = 1;
        echo gettype($a) . PHP_EOL;
    }
}

(new Practice())->main();
