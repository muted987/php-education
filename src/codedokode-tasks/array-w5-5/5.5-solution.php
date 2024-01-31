<?php

use Random\RandomException;

$answers = [
    1 => 'да',
    2 => 'нет',
    3 => 'не знаю',
    4 => 'никогда',
    5 => 'это зависит от тебя',
    6 => 'спроси анона'
];
$question = 'Выучу ли я PHP без регистрации и СМС?';
try {
    $random = random_int(1, 6);
} catch (RandomException $e) {
}
$answer = $answers[$random];

echo 'Вопрос: ' . $question . PHP_EOL .
    'Ответ: ' . $answer;
