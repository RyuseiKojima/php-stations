<?php

namespace Src\Station03;

class Practice1
{
    public function main(): void
    {
      $a = 'foo';
      switch ($a) {
          case 'foo':
              echo '$aは foo です' . PHP_EOL;
              break;
          default:
              echo '$aは foo 以外です' . PHP_EOL;
      }
    }
}

(new Practice1())->main();
