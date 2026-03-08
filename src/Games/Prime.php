<?php

namespace Hexlet\Code\Games;

function getPrime(): array
{
    //  Список простых чисел до 100
    $primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29,
                    31, 37, 41, 43, 47, 53, 59, 61, 67,
                    71, 73, 79, 83, 89, 97];

    $task['question'] = rand(2, 100);
    $task['answer'] = (in_array($task['question'], $primeNumbers)) ? 'yes' : 'no';

    return $task;
}
