<?php declare(strict_types=1);

namespace Tests\Station17\Question;

use Error;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;
use Src\Station17\Question\GuitarSound;
use Src\Station17\Question\SoundInterface;
use function count;

/**
 * @group station17
 */
class GuitarSoundTest extends TestCase
{
    private GuitarSound $guitarSound;

    protected function setUp(): void
    {
        parent::setUp();

        $this->guitarSound = new GuitarSound();
    }

    /**
     *
     */
    public function testSoundInterfaceをimplementsしている(): void
    {
        $implements = class_implements($this->guitarSound);

        $this->assertArrayHasKey(SoundInterface::class, $implements);
    }

    /**
     *
     */
    public function test文字列ギターを値に持つ定数INSTRUMENT_NAMEを定義している(): void
    {
        $guitarSound = new ReflectionClass($this->guitarSound);

        $this->assertSame('ギター', $guitarSound->getConstant('INSTRUMENT_NAME'));
    }

    /**
     *
     * @dataProvider provideIsValidatedInput_CDEFGABに該当するか否かを検証するCases
     */
    public function testIsValidatedInput_CDEFGABに該当するか否かを検証する(string|int $input, bool $expected): void
    {
        $actual = $this->guitarSound->isValidatedInput($input);

        $this->assertSame($expected, $actual);
    }

    public function provideIsValidatedInput_CDEFGABに該当するか否かを検証するCases(): iterable
    {
        return [
            '有効: C' => ['C', true],
            '有効: D' => ['D', true],
            '有効: E' => ['E', true],
            '有効: F' => ['F', true],
            '有効: G' => ['G', true],
            '有効: A' => ['A', true],
            '有効: B' => ['B', true],
            '無効: CDEFGAB以外の文字' => ['あ', false],
            '無効: ド' => ['ド', false],
            '無効: 数字' => ['0', false],
            '無効: 数値' => [1, false],
        ];
    }

    /**
     *
     *
     * この問題では sound の引数は isValidatedInput を経由したものに限るため
     * 細かな例外チェックは行わない
     */
    public function testSound_文字列_エフェクトをかけたギターの引数文字_を返す(): void
    {
        $actual = $this->guitarSound->sound('C');

        $this->assertSame('エフェクトをかけたギターのC', $actual);
    }

    /**
     *
     */
    public function testEffect_文字列_エフェクトをかけたギターの引数文字_を返す(): void
    {
        $method = new ReflectionMethod($this->guitarSound, 'effect');

        $actual = $method->invoke($this->guitarSound, 'C');

        $this->assertSame('エフェクトをかけたギターのC', $actual);
    }

    /**
     *
     */
    public function testEffectメソッドのアクセス修飾子がprivateである(): void
    {
        try {
            $this->guitarSound->effect();
            $this->fail('effect method must be private function.');
        } catch (Error $e) {
            $messages = explode(' ', $e->getMessage());
            $search = ['Call', 'to', 'private', 'method'];

            // 意図せぬエラーの場合は throw
            if (count($search) !== count(array_intersect($search, $messages))) {
                throw $e;
            }

            $this->assertTrue(true);
        }
    }
}
