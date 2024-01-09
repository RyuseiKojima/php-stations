<?php declare(strict_types=1);

namespace Tests\Station02;

use PHPUnit\Framework\TestCase;
use Src\Station02\Question;

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
     * @group station02
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
            [0, 'zero'],
            ['1', 'foo'],
            [1, 'bar'],
            [2, 'baz'],
            [3, 'baz'],
            ['2', 'baz'],
            ['0', 'others'],
            [null, 'others'],
            [false, 'others'],
        ];
    }
}
