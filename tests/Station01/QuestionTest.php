<?php declare(strict_types=1);

namespace Tests\Station01;

use PHPUnit\Framework\TestCase;
use Src\Station01\Question;
use function gettype;

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
     * @group station01
     */
    public function test返り値の型がint型とbool型である(): void
    {
        $result = $this->question->main();

        $this->assertSame('integer', gettype($result[0]));
        $this->assertSame('boolean', gettype($result[1]));
    }
}
