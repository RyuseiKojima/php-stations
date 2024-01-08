<?php

namespace Src\Station17\Question;

require_once('vendor/autoload.php');

class Question
{
  public function main(): void
  {
    $keyboard = new Keyboard();
    $pianoSound = new PianoSound();
    $guitarSound = new GuitarSound();
    $keyboard->play($pianoSound, 'ド');
    $keyboard->play($guitarSound, 'C');
  }
}

// (new Question)->main();

