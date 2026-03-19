<?php

namespace Hexlet\Code\Games\Progression;

use function Hexlet\Code\Engine\runGame;

//  Правила ответа
const DESCRIPTION = 'What number is missing in the progression?';


function run(): void
{
    runGame(function () {
        //  Cтартовые значения
        $progressionLength = rand(4, 9);
        $stepPrigression = rand(1, 10);
        $startProgression = rand(1, 100);

        //  Составление прогрессии
        $progression = isProgression($progressionLength, $stepPrigression, $startProgression);

        //  Составление вопроса и ответа
        $keyQuestion = rand(0, $progressionLength);
        $task = ['answer' => $progression[$keyQuestion]];
        $progression[$keyQuestion] = '..';
        $task['question'] = implode(' ', $progression);

        return $task;
    }, DESCRIPTION);
}

//  Составление прогрессии
function isProgression(int $light, int $step, int $start): array
{
    $progression = [];
    for ($index = 0; $index <= $light; $index++) {
        $progression[$index] = $start + $step * $index;
    }
    return $progression;
}
