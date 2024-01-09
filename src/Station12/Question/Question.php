<?php declare(strict_types=1);

namespace Src\Station12\Question;

require_once('vendor/autoload.php');

use Carbon\CarbonImmutable;

class Question
{
    public function main(int $originalPrice, CarbonImmutable $useByDate)
    {
        $food = new Food($originalPrice, $useByDate);
        echo $food->price();
        return $food->price();
    }
}
