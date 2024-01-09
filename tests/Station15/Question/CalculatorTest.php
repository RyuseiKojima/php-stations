<?php declare(strict_types=1);

namespace Tests\Station15\Question;

use PHPUnit\Framework\TestCase;
use Src\Station15\Question\Calculator;

/**
 * @group station15
 */
class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->calculator = new Calculator();
    }

    /**
     *
     */
    public function testかけられる数の配列が空の場合はfalseを返す(): void
    {
        $actual = $this->calculator->multiply([], 1);

        $this->assertFalse($actual);
    }

    /**
     *
     * @dataProvider provideかけられる値を出力するCases
     */
    public function testかけられる値を出力する(array $multiplied, int $multiplier, array $expected): void
    {
        $actual = $this->calculator->multiply($multiplied, $multiplier);
        $this->assertSame($expected, $actual);
    }

    public function provideかけられる値を出力するCases(): iterable
    {
        return [
            'かけられる数が 1 個' => [
                [1],
                2,
                [2],
            ],
            'かけられる数が 2 個' => [
                [1, 2],
                2,
                [2, 4],
            ],
        ];
    }
}
