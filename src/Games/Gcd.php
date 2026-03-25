<?php

namespace Hexlet\Code\Games\Gcd;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

const MIN_BASE = 1;
const MAX_BASE = 10;

const MIN_MULTIPLIER = 1;
const MAX_MULTIPLIER = 16;


function run(): void
{
    runGame(function () {
        $buf = rand(MIN_BASE, MAX_BASE);
        $num1 = $buf * rand(MIN_MULTIPLIER, MAX_MULTIPLIER);
        $num2 = $buf * rand(MIN_MULTIPLIER, MAX_MULTIPLIER);


        $task = ['question' => "{$num1} {$num2}"];
        $task['correctAnswer'] = getGcd($num1, $num2);

        return $task;
    }, DESCRIPTION);
}

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
