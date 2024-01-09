<?php declare(strict_types=1);

namespace Tests\Station14\Question;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;
use Src\Station14\Question\Car;

/**
 * @group station14
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
    public function test初期値5の定数DOORを持つ(): void
    {
        $car = new ReflectionClass($this->car);

        $this->assertSame(5, $car->getConstant('DOOR'));
    }

    /**
     *
     */
    public function test初期値0のstaticなpassengerプロパティを持つ(): void
    {
        $car = new ReflectionClass($this->car);

        $this->assertSame(0, $car->getStaticPropertyValue('passenger'));
    }

    /**
     *
     */
    public function testGetPassenger_passengerの数を表示する(): void
    {
        $method = new ReflectionMethod($this->car, 'getPassenger');
        $method->setAccessible(true);

        $this->expectOutputString(0);
        $method->invoke($this->car);
    }

    /**
     *
     * @dataProvider providePickup_passengerに1加算した値を表示するCases
     */
    public function testPickup_passengerに1加算した値を表示する(int $expected): void
    {
        $this->expectOutputString($expected);
        $this->car->pickup();
    }

    public function providePickup_passengerに1加算した値を表示するCases(): iterable
    {
        return [
            '初回実行' => [1],
            '2回目の実行' => [2],
            '3回目の実行' => [3],
        ];
    }

    /**
     *
     */
    public function testGetDoors_DOORの値を表示する(): void
    {
        $this->expectOutputString(5);
        $this->car->getDoors();
    }
}
