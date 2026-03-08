<?php

namespace Hexlet\Code\Games;

// Генирация прогрессии
function progressionCreating(int $start, int $step, int $light): array
{
    $progression = [];
    for ($index = 0; $index <= $light; $index++) {
        $progression[$index] = $start + $step * $index;
    }
    return $progression;
}

function getProgression(array $progression, int $light): array
{
    $keyQuestion = rand(0, $light);
    $task['answer'] = $progression[$keyQuestion];
    $progression[$keyQuestion] = '..';
    $task['question'] = implode(' ', $progression);

    return $task;
}
