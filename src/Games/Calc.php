<?php

namespace Hexlet\Code\Games\Calc;

use function Hexlet\Code\Engine\runGame;

function run(): void
{
    //  Правила ответа
    $rules = 'What is the result of the expression?';
    runGame(fn() => getTaskCalc(), $rules);
}

//  Калькулятор и его стартовые значения
function getTaskCalc(): array
{
    //  Генирация выражения
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $operations = ['+','-', '*'];
    $randOperation = $operations[array_rand($operations)];

    return getCalc($num1, $num2, $randOperation);
}

//  Решение выражения и запись в массив для проверки ответа пользователя
function getCalc(int $num1, int $num2, string $randOperation): array
{
    //  Запись выражения в массив для вывода пользователю
    $task = ['question' => "{$num1} {$randOperation} {$num2}"];

    //  Решение выражения и запись в массив для проверки ответа пользователя
    switch ($randOperation) {
        case '+':
            $task['answer'] = $num1 + $num2;
            break;
        case '-':
            $task['answer'] = $num1 - $num2;
            break;
        case '*':
            $task['answer'] = $num1 * $num2;
            break;
        default:
            exit('Неизвестная операция');
    }
    return $task;
}
