<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;
class Food extends Product
{
    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
    public function __construct($originalPrice, protected CarbonImmutable $useByDate)
    {
      parent::__construct($originalPrice);
      $this->useByDate = $useByDate;
    }

    public function price()
    {
      $originalPrice = $this ->originalPrice;
      $useByDate = $this ->useByDate;
      $now = CarbonImmutable::now();
      $diffInHours = $now->diffInHours($useByDate, false);

      if($diffInHours >= 5) {
        return $originalPrice;
      } else {
        return floor($originalPrice/2);
      }
    }
}
