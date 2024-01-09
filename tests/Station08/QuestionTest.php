<?php declare(strict_types=1);

namespace Tests\Station08;

use PHPUnit\Framework\TestCase;
use Src\Station08\Question;

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
     * @group station08
     */
    public function test整形した二次元配列を返す(): void
    {
        $actual = $this->question->main();

        $this->assertSame([
            ['アザラシ', 'アライグマ'],
            ['イヌ', 'イルカ'],
            ['ウサギ', 'ウシ', 'ウマ'],
        ], $actual);
    }
}
