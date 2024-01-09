<?php declare(strict_types=1);

namespace Tests\Station09;

use PHPUnit\Framework\TestCase;
use Src\Station09\Question;

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
     * @group station09
     */
    public function testAgeとfull_name要素の追加_password要素を削除した連想配列を返す(): void
    {
        $actual = $this->question->main();

        $this->assertSame([
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'full_name' => '山田太郎',
                'age' => 20,
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'full_name' => '鈴木次郎',
                'age' => null,
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'full_name' => '佐藤花子',
                'age' => null,
            ],
        ], $actual);
    }
}
