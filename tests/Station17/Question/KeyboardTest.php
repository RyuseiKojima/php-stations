<?php declare(strict_types=1);

namespace Tests\Station17\Question;

use Error;
use PHPUnit\Framework\TestCase;
use Src\Station17\Question\GuitarSound;
use Src\Station17\Question\Keyboard;
use Src\Station17\Question\PianoSound;
use Src\Station17\Question\SoundInterface;

/**
 * @group station17
 */
class KeyboardTest extends TestCase
{
    private Keyboard $keyboard;

    protected function setUp(): void
    {
        parent::setUp();

        $this->keyboard = new Keyboard();
    }

    /**
     *
     */
    public function test第1引数の型がSoundInterfaceである(): void
    {
        $class = new class implements SoundInterface {

            public function isValidatedInput(string $scale): bool
            {
                return true;
            }

            public function sound(string $scale): string
            {
                return '';
            }
        };

        try {
            $this->keyboard->play($class, 'ド');
            $this->assertTrue(true);
        } catch (Error $e) {
            $this->fail($e->getMessage());
        }
    }

    /**
     *
     * @dataProvider provide有効な音名の場合_文字列_指定楽器音を鳴らす_を出力するCases
     */
    public function test有効な音名の場合_文字列_指定楽器音を鳴らす_を出力する(
        SoundInterface $sound,
        string $scale,
        string $expected
    ): void {
        $this->expectOutputString($expected);
        $this->keyboard->play($sound, $scale);
    }

    public function provide有効な音名の場合_文字列_指定楽器音を鳴らす_を出力するCases(): iterable
    {
        return [
            'ピアノ' => [new PianoSound(), 'ド', 'ピアノのドを鳴らします'],
            'ギター' => [new GuitarSound(), 'C', 'エフェクトをかけたギターのCを鳴らします'],
        ];
    }

    /**
     *
     * @dataProvider provide無効な音名の場合_一律に規定文字列を出力Cases
     */
    public function test無効な音名の場合_一律に規定文字列を出力(SoundInterface $sound): void
    {
        $this->expectOutputString('この音を鳴らすことはできません');
        $this->keyboard->play($sound, '無効な音名');
    }

    public function provide無効な音名の場合_一律に規定文字列を出力Cases(): iterable
    {
        return [
            'ピアノ' => [new PianoSound()],
            'ギター' => [new GuitarSound()],
        ];
    }
}
