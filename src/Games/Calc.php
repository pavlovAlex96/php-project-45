<?php

namespace Hexlet\Code\Games;

use function cli\line;

function getCalc(): array
{
    //  Генирация выражения
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $operations = ['+','-', '*'];
    $randOperation = $operations[array_rand($operations)];

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
            line('Неизвестная операция');
    }
    return $task;
}
