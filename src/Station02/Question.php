<?php

namespace Src\Station02;

class Question
{
  public function main(mixed $arg): string
  {
    if($arg===0) {
      echo 'zero';
      return 'zero';
    } elseif($arg==='1') {
      echo 'foo';
      return 'foo';
    } elseif($arg===1) {
      echo 'bar';
      return 'bar';
    } elseif($arg>=2) {
      echo 'baz';
      return 'baz';
    } else {
      echo 'bar';
      return 'others';
    } 
    
  }
}

// (new Question())->main('3');
