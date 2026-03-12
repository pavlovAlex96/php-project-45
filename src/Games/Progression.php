<?php

namespace Hexlet\Code\Games\Progression;

use function Hexlet\Code\Engine\runGame;

function run(): void
{
    //  Правила ответа
    $rules = 'What number is missing in the progression?';
    runGame(fn() => getTaskProgression(), $rules);
}

//  Прогрессия и ее стартовые значения
function getTaskProgression(): array
{
    $progressionLength = rand(4, 9);
    $stepPrigression = rand(1, 10);
    $startProgression = rand(1, 100);

    $progression = getProgression($progressionLength, $stepPrigression, $startProgression);

    return getProgressionQuestion($progression, $progressionLength);
}

//  Состаление прогрессии
function getProgression(int $light, int $step, $start): array
{
    $progression = [];
    for ($index = 0; $index <= $light; $index++) {
        $progression[$index] = $start + $step * $index;
    }
    return $progression;
}

//  Составление вопроса и ответа
function getProgressionQuestion(array $progression, int $light): array
{
    $keyQuestion = rand(0, $light);
    $task = ['answer' => $progression[$keyQuestion]];
    $progression[$keyQuestion] = '..';
    $task['question'] = implode(' ', $progression);

    return $task;
}
