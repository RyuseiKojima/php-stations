<?php

namespace Src\Station08;

class Practice
{
    public function main(): void
    {
      $array = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
      ];
      
      array_push($array, [10, 11, 12], [13, 14]);
      print_r($array);
    }
}

(new Practice())->main();
