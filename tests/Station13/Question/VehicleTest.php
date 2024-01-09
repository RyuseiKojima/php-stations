<?php declare(strict_types=1);

namespace Tests\Station13\Question;

use Error;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use Src\Station13\Question\Vehicle;
use function count;

/**
 * @group station13
 */
class VehicleTest extends TestCase
{
    private Vehicle $vehicle;

    protected function setUp(): void
    {
        parent::setUp();

        $this->vehicle = new Vehicle();
    }

    /**
     *
     */
    public function testMaxSpeedプロパティが定義されている(): void
    {
        $reflection = new ReflectionClass($this->vehicle);

        try {
            $reflection->getProperty('maxSpeed');
            $this->assertTrue(true);
        } catch (ReflectionException $e) {
            $this->fail($e->getMessage());
        }
    }

    /**
     *
     */
    public function testNameプロパティが定義されている(): void
    {
        $reflection = new ReflectionClass($this->vehicle);

        try {
            $reflection->getProperty('name');
            $this->assertTrue(true);
        } catch (ReflectionException $e) {
            $this->fail($e->getMessage());
        }
    }

    /**
     *
     */
    public function testTurnRight_3つの文字列を出力する(): void
    {
        $reflection = new ReflectionMethod($this->vehicle, 'turnRight');

        $this->expectOutputString('ブレーキを踏む右にハンドルを回すアクセルを踏む');
        $reflection->invoke($this->vehicle);
    }

    /**
     *
     */
    public function testBackLeft_3つの文字列を出力する(): void
    {
        $reflection = new ReflectionMethod($this->vehicle, 'backLeft');

        $this->expectOutputString('ブレーキを踏む左にハンドルを回すバックする');
        $reflection->invoke($this->vehicle);
    }

    /**
     *
     */
    public function testRun_文字列_アクセルを踏む_を出力する(): void
    {
        $reflection = new ReflectionMethod($this->vehicle, 'run');

        $this->expectOutputString('アクセルを踏む');
        $reflection->invoke($this->vehicle);
    }

    /**
     *
     */
    public function testStop_文字列_ブレーキを踏む_を出力する(): void
    {
        $reflection = new ReflectionMethod($this->vehicle, 'stop');

        $this->expectOutputString('ブレーキを踏む');
        $reflection->invoke($this->vehicle);
    }

    /**
     *
     */
    public function testRight_文字列_右にハンドルを回す_を出力する(): void
    {
        $reflection = new ReflectionMethod($this->vehicle, 'right');

        $this->expectOutputString('右にハンドルを回す');
        $reflection->invoke($this->vehicle);
    }

    /**
     *
     */
    public function testLeft_文字列_左にハンドルを回す_を出力する(): void
    {
        $reflection = new ReflectionMethod($this->vehicle, 'left');

        $this->expectOutputString('左にハンドルを回す');
        $reflection->invoke($this->vehicle);
    }

    /**
     *
     */
    public function testBack_文字列_バックする_を出力する(): void
    {
        $reflection = new ReflectionMethod($this->vehicle, 'back');

        $this->expectOutputString('バックする');
        $reflection->invoke($this->vehicle);
    }

    /**
     *
     * @dataProvider provide他クラスで利用しない各メソッドがprivateになっているCases
     */
    public function test他クラスで利用しない各メソッドがprivateになっている(string $method): void
    {
        try {

            $this->vehicle->$method();
            $this->fail($method . ' method must be private function');

        } catch (Error $e) {
            $messages = explode(' ', $e->getMessage());
            $search = ['Call', 'to', 'private', 'method'];

            // 意図せぬエラーの場合は throw
            if (count($search) !== count(array_intersect($search, $messages))) {
                throw $e;
            }

            $this->assertTrue(true);
        }
    }

    public function provide他クラスで利用しない各メソッドがprivateになっているCases(): iterable
    {
        return [
            ['stop'],
            ['right'],
            ['left'],
        ];
    }
}
