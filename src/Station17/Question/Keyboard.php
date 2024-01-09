<?php declare(strict_types=1);

namespace Src\Station17\Question;

class Keyboard
{
    public function play(SoundInterface $soundInterface, string $scale): void
    {
        $isValidatedInput = $soundInterface->isValidatedInput($scale);
        if ($isValidatedInput) {
            $sound = $soundInterface->sound($scale);
            echo $sound."を鳴らします";
        } else {
            echo "この音を鳴らすことはできません";
        }
    }
}
