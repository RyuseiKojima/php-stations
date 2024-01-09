<?php declare(strict_types=1);

namespace Src\Station03;

class Practice2
{
    public function main(): void
    {
        $a = 1;

        switch ($a) {
            case $a === '1':
                echo '$a は string の 1 です' . PHP_EOL;
                break;
            case $a === 1:
                echo '$a は int の 1 です' . PHP_EOL;
                break;
        }
    }
}

(new Practice2())->main();
