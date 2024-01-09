<?php declare(strict_types=1);

namespace Src\Station14\Practice;

class Dog extends Animal
{
    private const VOICE = 'wan';
    public const LEGS = 4;

    public static function barking()
    {
        echo self::VOICE;
    }
}
