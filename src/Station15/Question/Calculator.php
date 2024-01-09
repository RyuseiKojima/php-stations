<?php declare(strict_types=1);

namespace Src\Station15\Question;

class Calculator
{
    public function multiply($multiplieds, $multiplier)
    {
        if (empty($multiplieds)) {
            return false;
        } else {
            $results = array_map(static function ($element) use ($multiplier) {
                return $element*$multiplier;
            }, $multiplieds);
            print_r($results);
            return $results;
        }
    }
}
