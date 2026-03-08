<?php

namespace Hexlet\Code\Games;

//  Генирация выражения
function getEven(): array
{
    $task = ['question' => rand(1, 100)];
    $task['answer'] = (($task['question'] % 2) == 0) ? 'yes' : 'no';

    return $task;
}
