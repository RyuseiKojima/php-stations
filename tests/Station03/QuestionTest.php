<?php declare(strict_types=1);

namespace Tests\Station03;

use PHPUnit\Framework\TestCase;
use Src\Station03\Question;

class QuestionTest extends TestCase
{
    private Question $question;

    protected function setUp(): void
    {
        parent::setUp();

        $this->question = new Question();
    }

    /**
     *
     * @group station03
     * @dataProvider provide引数に応じた文字列を返すCases
     */
    public function test引数に応じた文字列を返す(mixed $arg, string $expected): void
    {
        $result = $this->question->main($arg);

        $this->assertSame($expected, $result);
    }

    public function provide引数に応じた文字列を返すCases(): iterable
    {
        return [
            [1, 'りんご'],
            [2, 'みかん'],
            [3, 'みかん'],
            [4, 'さくらんぼ'],
            ['1', 'さくらんぼ'],
            ['2', 'さくらんぼ'],
            ['3', 'さくらんぼ'],
            ['test', 'さくらんぼ'],
        ];
    }
}
