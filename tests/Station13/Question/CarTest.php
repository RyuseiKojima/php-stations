<?php declare(strict_types=1);

namespace Tests\Station13\Question;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Src\Station13\Question\Car;
use Src\Station13\Question\Vehicle;

/**
 * @group station13
 */
class CarTest extends TestCase
{
    private Car $car;

    protected function setUp(): void
    {
        parent::setUp();

        $this->car = new Car();
    }

    /**
     *
     */
    public function testVehicleクラスを継承している(): void
    {
        $parent = get_parent_class($this->car);

        $this->assertSame(Vehicle::class, $parent);
    }

    /**
     *
     */
    public function testHazard_文字列_ハザードランプを点灯する_を表示する(): void
    {
        $this->expectOutputString('ハザードランプを点灯する');
        $this->car->hazard();
    }

    /**
     *
     */
    public function testRun_maxSpeedを60に変更して文字列を出力する(): void
    {
        $reflection = new ReflectionClass($this->car);
        $method = $reflection->getMethod('run');

        $this->expectOutputString('アクセルを踏む');

        $method->invoke($this->car);

        $this->assertSame(60, $reflection->getProperty('maxSpeed')->getValue($this->car));
    }

    /**
     *
     */
    public function testBack_hazardを実行して文字列を出力する(): void
    {
        $reflection = new ReflectionClass($this->car);
        $method = $reflection->getMethod('back');

        $this->expectOutputString('ハザードランプを点灯するバックする');

        $method->invoke($this->car);
    }
}
