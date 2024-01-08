<?php

namespace Src\Station10;

class Question
{
    public function main(string $animal): string
    {
        return $this->getAnimalName($animal);
    }

    private function getAnimalName(string $animal): string
    {
      if ($animal === '猫') {
        echo 'ミケ';
        return 'ミケ';
      } elseif ($animal === '犬') {
        echo 'ポチ';
        return 'ポチ';
      } else {
        echo 'わかりません';
        return 'わかりません';
      }
    }
}

(new Question())->main('猫');

