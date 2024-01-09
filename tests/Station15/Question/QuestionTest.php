<?php declare(strict_types=1);

namespace Tests\Station15\Question;

use PHPUnit\Framework\TestCase;
use Src\Station15\Question\Question;

/**
 * @group station15
 */
class QuestionTest extends TestCase
{
    /**
     *
     * @dataProvider provide1から3までの数値をN倍した整数の値を出力するCases
     */
    public function test_1から3までの数値をN倍した整数の値を出力する(int $multiplier, array $expected): void
    {
        $question = new Question();

        $actual = $question->main([1, 2, 3], $multiplier);
        $this->assertSame($expected, $actual);
    }

    /**
     * 偶数と奇数 1 つずつのみチェック
     */
    public function provide1から3までの数値をN倍した整数の値を出力するCases(): iterable
    {
        return [
            'かける数=2' => [
                2,
                [2, 4, 6],
            ],
            'かける数=3' => [
                3,
                [3, 6, 9],
            ],
        ];
    }
}
