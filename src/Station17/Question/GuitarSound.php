<?php declare(strict_types=1);

namespace Src\Station17\Question;

class GuitarSound implements SoundInterface
{
    private const INSTRUMENT_NAME = 'ギター';

    public function isValidatedInput(string $scale): bool
    {
        if (str_contains("C D E F G A B", $scale)) {
            return true;
        } else {
            return false;
        }
    }

    public function sound(string $scale): string
    {
        return $this->effect($scale);
    }

    private function effect(string $scale): string
    {
        return "エフェクトをかけた".self::INSTRUMENT_NAME."の".$scale;
    }
}
