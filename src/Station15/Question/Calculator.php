<?php

namespace Src\Station15\Question;

class Calculator
{
  public function multiply($multiplieds, $multiplier) {
    if (empty($multiplieds)) {
      return false;
    } else {
      $results = array_map(function($element) use($multiplier)
      {
          return $element*$multiplier;
      }, $multiplieds);
      print_r($results);
      return $results;
    }
  }
}
