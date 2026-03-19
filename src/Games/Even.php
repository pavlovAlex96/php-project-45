<?php

namespace Hexlet\Code\Games\Even;

use function Hexlet\Code\Engine\runGame;

//  Правила ответа
const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function run(): void
{
    runGame(function () {
        $number = rand(1, 100);

        $task = ['question' => $number];
        $task['answer'] = isEven($number) ? 'yes' : 'no';

        return $task;
    }, DESCRIPTION);
}

//  Решение
function isEven(int $number): int
{
    return ($number % 2) === 0;
}
