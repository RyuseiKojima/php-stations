<?php

namespace Src\Station14\Practice;

require_once('vendor/autoload.php');

class Practice
{
  public function main(): void
  {
    $dog = new Dog();
    Dog::barking();
    echo $dog::LEGS;
  }
}

(new Practice)->main();
