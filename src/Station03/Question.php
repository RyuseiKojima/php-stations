<?php declare(strict_types=1);

namespace Src\Station03;

class Question
{
    public function main(mixed $arg): string
    {
        switch ($arg) {
            case $arg === 1:
                echo 'りんご' . PHP_EOL;
                $fruit = 'りんご';
                break;
            case $arg === 2:
            case $arg === 3:
                echo 'みかん' . PHP_EOL;
                $fruit = 'みかん';
                break;
            default:
                echo 'さくらんぼ' . PHP_EOL;
                $fruit = 'みかん';
        }
        return $fruit;
    }
}

(new Question())->main(4);
