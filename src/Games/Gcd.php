<?php

namespace Hexlet\Code\Games\Gcd;

use function Hexlet\Code\Engine\runGame;

function run(): void
{
    //  Правила ответа
    $rules = 'AFind the greatest common divisor of given numbers.';
    runGame(fn() => getTaskGcd(), $rules);
}

function getTaskGcd(): array
{
    //  Генирация 2-х чисел
    $buf = rand(1, 10);
    $num1 = $buf * rand(1, 10);
    $num2 = $buf * rand(1, 10);

    return getGcd($num1, $num2);
}

function getGcd(int $num1, int $num2): array
{
    $task = ['question' => "{$num1} {$num2}"];

    // Решение задачи
    $numOne = $num1;
    $numTwo = $num2;
    do {
        $remainder = $numOne % $numTwo;
        if ($remainder === 0) {
            $task['answer'] = $numTwo;
            $flag = true;
        } else {
            $numOne = $numTwo;
            $numTwo = $remainder;
            $flag = false;
        }
    } while ($flag === false);

    return $task;
}
