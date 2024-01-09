<?php declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        '/app',
        '/app/src',
    ]);

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'trailing_comma_in_multiline' => true, // この一行を追加
    ])
    ->setFinder($finder);
