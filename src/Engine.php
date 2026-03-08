<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

//  Устанавливаем колличество раундов в играх
function setRound(): int
{
    return 3;
}

//  Проверка ответа пользователя с решением
function askAnswer(array $task): bool
{
    line("Question: %s", $task['question']);
    $usrAnswer = prompt('Your answer: ');

    if ($usrAnswer === $task['answer']) {
        line('Correct!');
        return true;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $usrAnswer, $task['answer']);
        line("Let's try again, Tirion!");
        return false;
    }
}

// Генирация прогрессии
function progressionCreating(int $start, int $step, int $light): array 
{
    $progression = [];
    for ($index = 0; $index <= $light; $index++) {
        $progression[$index] = $start + $step * $index;
    }
    return $progression;
}
