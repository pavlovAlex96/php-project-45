<?php

namespace Hexlet\Code\Games\Even;

use function Hexlet\Code\Engine\runGame;

function run(): void
{
    //  Правила ответа
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    runGame(fn() => getTaskEven(), $rules);
}

//  Генирация выражения
function getTaskEven(): array
{
    $task = ['question' => rand(1, 100)];
    $task['answer'] = (($task['question'] % 2) === 0) ? 'yes' : 'no';

    return $task;
}
