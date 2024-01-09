<?php declare(strict_types=1);

namespace Src\Station12\Practice;

class Animal
{
    public function eat()
    {
        echo '食べる';
    }

    public function sleep()
    {
        echo '寝る';
    }

    public function active()
    {
        echo '活動する';
    }

    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }
}
