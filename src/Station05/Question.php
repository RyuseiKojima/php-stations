<?php

namespace Src\Station05;

class Question
{
  public function main(): int
  {
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $total = 0;

    foreach ($array as $value) {
      echo '値'.$value . PHP_EOL;

      if ( $value % 4 > 2) {
        continue;
      }
      if ( $value >= 8) {
        break;
      }
      echo '合計'.$total += $value;
      echo PHP_EOL;
    }
    return $total;
  }
}

(new Question())->main();

