<?php

namespace Hexlet\Code\Games\Progression;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';

const MIN_LENGTH = 5;
const MAX_LENGTH = 10;

const MIN_STEP = 1;
const MAX_STEP = 10;

const MIN_START = 1;
const MAX_START = 100;


function run(): void
{
    runGame(function () {
        $progressionLength = rand(MIN_LENGTH, MAX_LENGTH);
        $stepProgression = rand(MIN_STEP, MAX_STEP);
        $startProgression = rand(MIN_START, MAX_START);

        $progression = [];
        for ($i = 0; $i <= $progressionLength; $i++) {
            $progression[$i] = $startProgression + $stepProgression * $i;
        }

        $keyQuestion = rand(0, $progressionLength - 1);
        $task = ['correctAnswer' => $progression[$keyQuestion]];
        $progression[$keyQuestion] = '..';
        $task['question'] = implode(' ', $progression);

        return $task;
    }, DESCRIPTION);
}
