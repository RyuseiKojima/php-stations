<?php declare(strict_types=1);

namespace Src\Station12\Question;

class Product
{
    // property はアクセス修飾子・型定義不問、__construct での定義でなくとも良い
    public function __construct(protected int $originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }
}
