<?php

namespace Hexlet\Code\Games\Gcd;

use function Hexlet\Code\Engine\runGame;

//  Правила ответа
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';


function run(): void
{
    runGame(function () {
        //  Генирация 2-х чисел
        $buf = rand(1, 10);
        $num1 = $buf * rand(1, 20);
        $num2 = $buf * rand(1, 20);


        $task = ['question' => "{$num1} {$num2}"];
        $task['answer'] = getGcd($num1, $num2);

        return $task;
    }, DESCRIPTION);
}

 //  Составление ответа
function getGcd(int $num1, int $num2): int
{
    do {
        $remainder = $num1 % $num2;
        if ($remainder === 0) {
            $result = $num2;
            $flag = true;
        } else {
            $num1 = $num2;
            $num2 = $remainder;
            $flag = false;
        }
    } while ($flag === false);

    return $result;
}
