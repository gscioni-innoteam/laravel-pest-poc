<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();

return $config->setRules([
    '@PSR12' => true,
    '@PhpCsFixer' => true,
    'strict_param' => true,
    'declare_strict_types' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_useless_else' => true,
])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
;
