<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
      $array = [
        ["アザラシ", "アライグマ"],
        ["ウサギ", "ウシ", "ウマ"],
        ["オオカミ", "オットセイ"],
      ];
      
      array_pop($array);
      print_r($array);
      array_splice($array, 1, 0, [["イヌ", "イルカ"]]);
      print_r($array);
      return $array;
    }
}

(new Question())->main();

