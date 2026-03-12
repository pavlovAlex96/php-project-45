<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Games\Calc\getTaskCalc;
use function Hexlet\Code\Games\Even\getTaskEven;
use function Hexlet\Code\Games\Gcd\getTaskGcd;
use function Hexlet\Code\Games\Prime\getTaskPrime;
use function Hexlet\Code\Games\Progression\getTaskProgression;

//  Устанавливаем колличество раундов в играх
const ROUND = 3;

//  Запуск общей логики игр
function runGame(callable $getTask, string $rules): void
{
    //  Приветствие и вывод правил игры
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rules);

    //  Основной цикл
    for ($numdTrueAnswer = 1; $numdTrueAnswer <= ROUND; $numdTrueAnswer++) {
        $task = $getTask();
        line("Question: %s", $task['question']);
        $usrAnswer = prompt('Your answer: ');

        if ($usrAnswer === (string)$task['answer']) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $usrAnswer, $task['answer']);
            line("Let's try again, %s!", $name);
            break;
        }
        //  Игра пройдена
        if ($numdTrueAnswer === ROUND) {
            line('Congratulations, %s!', $name);
        }
    }
}
