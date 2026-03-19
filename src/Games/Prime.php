<?php

namespace Hexlet\Code\Games\Prime;

use function Hexlet\Code\Engine\runGame;

//  Правила ответа
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run(): void
{
    runGame(function () {
        $randNumber = rand(2, 100);

        $task = ['question' => $randNumber];
        $task['answer'] = isPrime($randNumber) ? 'yes' : 'no';

        return $task;
    }, DESCRIPTION);
}

//  Генерация числа и расчет правильного ответа
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
