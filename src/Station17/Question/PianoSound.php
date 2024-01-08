<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
  private const INSTRUMENT_NAME = 'ピアノ';

  public function isValidatedInput(string $scale): bool {
    if (str_contains("ドレミファソラシ",$scale)) {
      return true;
    } else {
      return false;
    }
  }

  public function sound(string $scale): string {
    return self::INSTRUMENT_NAME."の".$scale;
  }
}
