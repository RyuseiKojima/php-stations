<?php declare(strict_types=1);

namespace Src\Station13\Question;

class Car extends Vehicle
{
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
