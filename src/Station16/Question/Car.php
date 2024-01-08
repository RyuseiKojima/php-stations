<?php

namespace Src\Station16\Question;

class Car
{
  public string $name = '';
  private int $passenger = 0;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function run(): void
  {
    echo '走行する';
  }

  public function pickup(int $add): int
  {
    $this->passenger += $add;
    return $this->passenger;
  }
}