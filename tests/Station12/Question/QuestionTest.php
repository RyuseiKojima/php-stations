<?php declare(strict_types=1);

namespace Tests\Station12\Question;

use Carbon\CarbonImmutable;
use PHPUnit\Framework\TestCase;
use Src\Station12\Question\Question;
use Closure;

/**
 * @group station12
 */
class QuestionTest extends TestCase
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
     * @dataProvider provide定価と消費期限の入力に対して価格を返すCases
     */
    public function test定価と消費期限の入力に対して価格を返す(
        int $originalPrice,
        Closure $useByDate,
        int $expected
    ): void {
        $actual = (new Question)->main($originalPrice, $useByDate());

        $this->assertSame($expected, $actual);
    }

    public function provide定価と消費期限の入力に対して価格を返すCases(): iterable
    {
        return [
            '価格 == 定価' => [
                500,
                static fn () => CarbonImmutable::now()->addHours(5),
                500,
            ],
            '価格 == 定価/2' => [
                500,
                static fn () => CarbonImmutable::now()->addHours(5)->subSecond(),
                250,
            ],
        ];
    }
}
