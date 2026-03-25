<?php

namespace Hexlet\Code\Games\Even;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function run(): void
{
    runGame(function () {
        $number = rand(MIN_NUMBER, MAX_NUMBER);

        $task = ['question' => $number];
        $task['correctAnswer'] = isEven($number) ? 'yes' : 'no';

        return $task;
    }, DESCRIPTION);
}

function isEven(int $number): bool
{
    return ($number % 2) === 0;
}
