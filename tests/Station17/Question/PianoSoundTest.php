<?php declare(strict_types=1);

namespace Tests\Station17\Question;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Src\Station17\Question\PianoSound;
use Src\Station17\Question\SoundInterface;

/**
 * @group station17
 */
class PianoSoundTest extends TestCase
{
    private PianoSound $pianoSound;

    protected function setUp(): void
    {
        parent::setUp();

        $this->pianoSound = new PianoSound();
    }

    /**
     *
     */
    public function testSoundInterfaceをimplementsしている(): void
    {
        $implements = class_implements($this->pianoSound);

        $this->assertArrayHasKey(SoundInterface::class, $implements);
    }

    /**
     *
     */
    public function test文字列ピアノを値に持つ定数INSTRUMENT_NAMEを定義している(): void
    {
        $pianoSound = new ReflectionClass($this->pianoSound);

        $this->assertSame('ピアノ', $pianoSound->getConstant('INSTRUMENT_NAME'));
    }

    /**
     *
     * @dataProvider provideIsValidatedInput_ドレミファソラシに該当するか否かを検証するCases
     */
    public function testIsValidatedInput_ドレミファソラシに該当するか否かを検証する(string|int $input, bool $expected): void
    {
        $actual = $this->pianoSound->isValidatedInput($input);

        $this->assertSame($expected, $actual);
    }

    public function provideIsValidatedInput_ドレミファソラシに該当するか否かを検証するCases(): iterable
    {
        return [
            '有効: ド' => ['ド', true],
            '有効: レ' => ['レ', true],
            '有効: ミ' => ['ミ', true],
            '有効: ファ' => ['ファ', true],
            '有効: ソ' => ['ソ', true],
            '有効: ラ' => ['ラ', true],
            '有効: シ' => ['シ', true],
            '無効: ドレミファソラシ以外の文字' => ['あ', false],
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
    public function testSound_楽器名と引数を結合した文字列を返す(): void
    {
        $actual = $this->pianoSound->sound('ド');

        $this->assertSame($actual, 'ピアノのド');
    }
}
