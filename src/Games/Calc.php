<?php

namespace Hexlet\Code\Games\Calc;

use function Hexlet\Code\Engine\runGame;

//  Правила ответа
const DESCRIPTION = 'What is the result of the expression?';

function run(): void
{
    runGame(function () {
        //  Генирация выражения
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operations = ['+','-', '*'];
        $randOperation = $operations[array_rand($operations)];

        //  Запись выражения в массив для вывода пользователю
        $task = ['question' => "{$num1} {$randOperation} {$num2}"];
        $task ['answer'] = calculate($num1, $num2, $randOperation);

        return $task;
    }, DESCRIPTION);
}

//  Решение выражения и запись в массив для проверки ответа пользователя
function calculate(int $num1, int $num2, string $randOperation): int
{
    //  Решение выражения и запись в массив для проверки ответа пользователя
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
