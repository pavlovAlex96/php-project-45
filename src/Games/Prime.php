<?php

namespace Hexlet\Code\Games\Prime;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

const MIN_NUMBER = 2;
const MAX_NUMBER = 100;

function run(): void
{
    runGame(function () {
        $randNumber = rand(MIN_NUMBER, MAX_NUMBER);

        $task = ['question' => $randNumber];
        $task['correctAnswer'] = isPrime($randNumber) ? 'yes' : 'no';

        return $task;
    }, DESCRIPTION);
}

function isPrime(int $number): bool
{
    if ($number === 2 || $number === 3) {
        return true;
    }
    if ($number < 2 || $number % 2 === 0) {
        return false;
    }

    $sqrtRoundQuest = round(sqrt($number));
    for ($num = 3; $num <= $sqrtRoundQuest; $num += 2) {
        if ($number % $num === 0) {
            return false;
        }
    }
    return true;
}
