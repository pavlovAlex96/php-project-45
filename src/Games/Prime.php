<?php

namespace Hexlet\Code\Games\Prime;

use function Hexlet\Code\Engine\runGame;

function run(): void
{
    //  Правила ответа
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    runGame(fn() => getTaskPrime(), $rules);
}


function getTaskPrime(): array
{    
    $task = ['question' => rand(2, 100)];

    if ($task['question'] == 2 || $task['question'] == 3) {
        $task['answer'] = 'yes';
    } elseif ($task['question'] % 2 == 0) {
        $task['answer'] = 'no';
    } else {
        $sqrtRoundQuest = round(sqrt($task['question']));
        $task['answer'] = 'yes';
        for ($num = 3; $num <= $sqrtRoundQuest; $num += 2) {
            if ($task['question'] % $num == 0) {
                $task['answer'] = 'no';
                break;
            } 
        }
    }
    return $task;
}
