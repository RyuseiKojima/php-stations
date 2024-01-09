<?php declare(strict_types=1);

namespace Src\Station14\Question;

class Car extends Vehicle
{
    private const DOOR = 5;
    public static $passenger = 0;

    private static function getPassenger()
    {
        echo self::$passenger;
    }

    public static function pickup()
    {
        self::$passenger += 1;
        self::getPassenger();
    }

    public static function getDoors()
    {
        echo self::DOOR;
    }

    protected $maxSpeed;

    public function hazard()
    {
        echo 'ハザードランプを点灯する';
    }

    public function run()
    {
        $vehicle = new Vehicle();
        $this->maxSpeed=60;
        $vehicle->run();
    }

    protected function back()
    {
        $this->hazard();
        $vehicle = new Vehicle();
        $vehicle->back();
    }
}
