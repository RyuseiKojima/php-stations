<?php

namespace Src\Station14\Question;

require_once('vendor/autoload.php');

class Question
{
  public function main(): void
  {
    Car::pickup();
    Car::getDoors();      
  }
}