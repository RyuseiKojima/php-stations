<?php declare(strict_types=1);

namespace Src\Station07;

class Practice2
{
    public function main(): void
    {
        $array = ['apple' => 1, 'banana' => 2, 'rime' => 5];

        $addedArray = array_map(static function ($value) {
            return $value + 1;
        }, $array);

        print_r($addedArray);
    }
}

(new Practice2())->main();
