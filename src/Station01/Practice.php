<?php

namespace Src\Station01;

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
