<?php declare(strict_types=1);

namespace Src\Station06;

class Practice1
{
    public function main(): void
    {
        $array = ['red' => 1, 'blue' => 2, 'yellow' => 3];
        print_r($array['red']); // キーの追記
    }
}

(new Practice1())->main();
