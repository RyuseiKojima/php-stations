<?php declare(strict_types=1);

namespace Tests\Station06;

use PHPUnit\Framework\TestCase;
use Src\Station06\Question;

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
     * @group station06
     */
    public function test期待値と一致する配列を返す(): void
    {
        $actual = $this->question->main();

        $this->assertSame(['white', 'black', 'red', 'green', 'blue'], $actual);
    }
}
