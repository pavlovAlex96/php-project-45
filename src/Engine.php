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
function askAnswer(array $task, string $name): bool
{
    line("Question: %s", $task['question']);
    $usrAnswer = prompt('Your answer: ');

    if ($usrAnswer === (string)$task['answer']) {
        line('Correct!');
        return true;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $usrAnswer, $task['answer']);
        line("Let's try again, %s!", $name);
        return false;
    }
}

//  Поздравление при полном прохождении
function congratulations(int $nuber, int $finalNumber, string $user): void
{
    //  Игра пройдена
    if ($nuber == $finalNumber) {
        line('Congratulations, %s!', $user);
    }
}
