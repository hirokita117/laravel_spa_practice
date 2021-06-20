<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('')
    ->in(__DIR__);

// FYI: https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/3.0/doc/rules/index.rst
$rules = [
    'binary_operator_spaces' => [
        'operators' => ['=>' => 'align_single_space_minimal'] // => の感覚を揃える
    ],
    'blank_line_before_statement' => true, // return文の前に一行空白を入れる
    'function_typehint_space'     => true, // タイプヒントにスペースを入れる
    'no_unused_imports'           => true, // 使用していないuse文を削除
    'ordered_imports'             => true, // use文をアルファベット順にする
];

$config = new PhpCsFixer\Config();
$config
    ->setRules($rules)
    ->setFinder($finder);

return $config;
