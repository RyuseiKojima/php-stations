<?php declare(strict_types=1);

namespace Tests\Station17\Question;

use PHPUnit\Framework\TestCase;
use Src\Station17\Question\Question;

/**
 * @group station17
 */
class QuestionTest extends TestCase
{
    /**
     *
     */
    public function testピアノとギターの演奏を出力する(): void
    {
        $question = new Question();

        $this->expectOutputString('ピアノのドを鳴らしますエフェクトをかけたギターのCを鳴らします');
        $question->main();
    }
}
