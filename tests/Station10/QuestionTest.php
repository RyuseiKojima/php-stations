<?php declare(strict_types=1);

namespace Tests\Station10;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Src\Station10\Question;

/**
 * @group station10
 */
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
     * @dataProvider dataProvider_引数に応じた文字列
     */
    public function test引数に応じて動物の名前を返す(string $animal, string $expected): void
    {
        $actual = $this->question->main($animal);

        $this->assertSame($expected, $actual);
    }

    /**
     *
     * @dataProvider dataProvider_引数に応じた文字列
     */
    public function test仕様に準じたgetAnimalNameメソッドが定義されている(string $animal, string $expected): void
    {
        $reflection = new ReflectionClass($this->question);
        $method = $reflection->getMethod('getAnimalName');
        $method->setAccessible(true);

        $actual = $method->invoke($this->question, $animal);
        $this->assertSame($expected, $actual);
    }

    public function dataProvider_引数に応じた文字列(): iterable
    {
        return [
            ['猫', 'ミケ'],
            ['犬', 'ポチ'],
            ['兎', 'わかりません'],
            ['ネコ', 'わかりません'],
        ];
    }
}
