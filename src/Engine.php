<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

//  Устанавливаем колличество раундов в играх
function setRound()
{
    return 3;
}

//  Проверка ответа пользователя с решением
function askAnswer($task)
{
    line("Question: %s", $task['question']);
    $usr_answer = prompt('Your answer: ');

    if ($usr_answer == $task['answer']) {
        line('Correct!');
        return true;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $usr_answer, $task['answer']);
        line("Let's try again, Tirion!");
        return false;
    }
}

// Генирация прогрессии
function progressionCreating($start, $step, $light)
{
    for ($index = 0; $index <= $light; $index++) {
        $progression[$index] = $start + $step * $index;
    }
    return $progression;
}
