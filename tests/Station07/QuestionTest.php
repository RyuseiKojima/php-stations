<?php declare(strict_types=1);

namespace Tests\Station07;

use PHPUnit\Framework\TestCase;
use Src\Station07\Question;

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
     * @group station07
     */
    public function testOne_期待値と一致するよう結合された連想配列を返す(): void
    {
        $actual = $this->question->one();

        $this->assertSame([
            '北海道' => 1,
            '東京都' => 13,
            '京都府' => 26,
            '大阪府' => 27,
            '広島県' => 34,
        ], $actual);
    }

    /**
     *
     * @group station07
     */
    public function testTwo_結合した姓名を要素に持つ配列を返す(): void
    {
        $actual = $this->question->two();

        $this->assertSame(['山田太郎', '鈴木次郎', '佐藤花子'], $actual);
    }

    /**
     *
     * @group station07
     */
    public function testThree_期待値と一致するよう抽出された連想配列を返す(): void
    {
        $actual = $this->question->three();

        $this->assertSame([
            'apple' => 140,
            'banana' => 200,
            'orange' => 120,
        ], $actual);
    }
}
