<?php declare(strict_types=1);

namespace Src\Station07;

class Practice3
{
    public function main(): void
    {
        $array = ['apple' => 3, 'banana' => 6, 'rime' => 7];

        array_walk($array, static function (&$value) {
            $value -= 1;
        });

        print_r($array);
    }
}

(new Practice3())->main();
