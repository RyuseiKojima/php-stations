<?php declare(strict_types=1);

namespace Src\Station04;

class Practice
{
    public function main(): void
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        foreach ($array as $value) {
            if ($value === 5) {
                echo '処理を中断します' . PHP_EOL;
                break;
            }
            echo $value . PHP_EOL;
        }
    }
}

(new Practice())->main();
