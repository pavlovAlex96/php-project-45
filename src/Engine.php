<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(callable $getTask, string $rules): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rules);

    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $task = $getTask();
        line("Question: %s", $task['question']);
        $userAnswer = prompt('Your answer: ');

        if ($userAnswer === (string)$task['correctAnswer']) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $task['correctAnswer']);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
