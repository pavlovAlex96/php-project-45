<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

//  Устанавливаем колличество раундов в играх
const ROUNDS_COUNT = 3;

//  Запуск общей логики игр
function runGame(callable $getTask, string $rules): void
{
    //  Приветствие и вывод правил игры
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rules);

    //  Основной цикл
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $task = $getTask();
        line("Question: %s", $task['question']);
        $usrAnswer = prompt('Your answer: ');

        if ($usrAnswer === (string)$task['answer']) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $usrAnswer, $task['answer']);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    //  Игра пройдена
    line('Congratulations, %s!', $name);
}
