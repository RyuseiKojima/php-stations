<?php

namespace Src\Station06;

class Practice3
{
    public function main(): void
    {
      $array = [1, 2, 3, 4, 5];
      // 配列の 0 番目の要素から数えて 3 つ目までを削除して、代わりに [6, 7] を挿入する
      array_splice($array, 0, 3, [6, 7]);
      print_r($array);
    }
}

(new Practice3())->main();
