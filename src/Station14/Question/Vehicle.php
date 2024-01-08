<?php

namespace Src\Station14\Question;

class Vehicle
{
  protected $name = '';
  protected $maxSpeed = 0;
  public function turnRight()
  {
    $this->stop();
    $this->right();
    $this->run();
  }

  public function backLeft()
  {
    $this->stop();
    $this->left();
    $this->back();
  }

  protected function run()
  {
    echo 'アクセルを踏む';
  }

  private function stop()
  {
    echo 'ブレーキを踏む';
  }

  private function right()
  {
    echo '右にハンドルを回す';
  }

  private function left()
  {
    echo '左にハンドルを回す';
  }

  protected function back()
  {
    echo 'バックする';
  }
}
