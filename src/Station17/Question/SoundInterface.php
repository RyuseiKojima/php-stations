<?php declare(strict_types=1);

namespace Src\Station17\Question;

interface SoundInterface
{
    public function isValidatedInput(string $scale): bool;

    public function sound(string $scale): string;
}
