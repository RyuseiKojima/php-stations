<?php declare(strict_types=1);

namespace Tests\Station12\Question;

use Carbon\CarbonImmutable;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use Src\Station12\Question\Food;
use Closure;

/**
 * @group station12
 */
class FoodTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        CarbonImmutable::setTestNow(CarbonImmutable::now());
    }

    protected function tearDown(): void
    {
        CarbonImmutable::setTestNow();

        parent::tearDown();
    }

    /**
     *
     */
    public function testUseByDateプロパティが定義されている(): void
    {
        $food = new ReflectionClass(Food::class);

        try {

            $food->getProperty('useByDate');
            $this->assertTrue(true);

        } catch (ReflectionException $e) {
            $this->fail($e->getMessage());
        }
    }

    /**
     *
     * @dataProvider provide食材の定価と消費期限の入力に対し現在時点での価格を返すCases
     */
    public function test食材の定価と消費期限の入力に対し現在時点での価格を返す(
        int $originalPrice,
        Closure $useByDate,
        int $expected
    ): void {
        $food = new Food($originalPrice, $useByDate());
        $actual = $food->price();

        $this->assertSame($expected, $actual);
    }

    public function provide食材の定価と消費期限の入力に対し現在時点での価格を返すCases(): iterable
    {
        return [
            '定価偶数|消費期限まで5h1s' => [
                500,
                static fn () => CarbonImmutable::now()->addHours(5)->addSecond(),
                500,
            ],
            '定価偶数|消費期限まで5h' => [
                500,
                static fn () => CarbonImmutable::now()->addHours(5),
                500,
            ],
            '定価偶数|消費期限まで4h59m59s' => [
                500,
                static fn () => CarbonImmutable::now()->addHours(5)->subSecond(),
                250,
            ],
            '定価奇数|消費期限まで4h59m59s' => [
                325,
                static fn () => CarbonImmutable::now()->addHours(5)->subSecond(),
                162,
            ],
        ];
    }
}
