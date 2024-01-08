<?php

namespace Src\Station02;

class Practice
{
    public function main(): void
    {
      $a = 1;
      $b = '1';

      if ($a == $b) { // 緩やかな比較にする
          echo '等しい';
      } else {
          echo '等しくない';
      }
    }
}

(new Practice())->main();
