<?php

use Random\RandomException;

$answers = [
    'да',
    'нет',
    'не знаю',
    'никогда',
    'это зависит от тебя',
    'спроси анона'
];
$question = 'Выучу ли я PHP без регистрации и СМС?';
try {
    $random = random_int(0, 5);
} catch (RandomException $e) {
}
$answer = $answers[$random];

echo
    'Вопрос: ' . $question . PHP_EOL .
    'Ответ: ' . $answer;
