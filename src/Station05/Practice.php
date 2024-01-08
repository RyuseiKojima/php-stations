<?php

namespace Src\Station05;

class Practice
{
    public function main(): void
    {
      $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

      foreach ($array as $value) {
          if ($value === 5) {
              continue;
          }
          echo $value . PHP_EOL;
      }
    }
}

(new Practice())->main();
