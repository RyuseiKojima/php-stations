<?php declare(strict_types=1);

namespace Src\Station15\Question;

require_once('vendor/autoload.php');

class Question
{
    public function main($multiplieds, $multiplier): array
    {
        $calculator = new Calculator();
        $results = $calculator->multiply($multiplieds, $multiplier);
        return $results;
    }
}
