<?php

namespace Hexlet\Code\Games\Calc;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function run(): void
{
    runGame(function () {
        $num1 = rand(MIN_NUMBER, MAX_NUMBER);
        $num2 = rand(MIN_NUMBER, MAX_NUMBER);
        $operations = ['+','-', '*'];
        $randOperation = $operations[array_rand($operations)];

        $task = ['question' => "{$num1} {$randOperation} {$num2}"];
        $task ['correctAnswer'] = calculate($num1, $num2, $randOperation);

        return $task;
    }, DESCRIPTION);
}

function calculate(int $num1, int $num2, string $randOperation): int
{
    switch ($randOperation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        default:
            exit('Неизвестная операция');
    }
    return $result;
}
