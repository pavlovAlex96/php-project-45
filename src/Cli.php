<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

//  Функция приветсвия
function greetings()
{
    line('Welcome to the Braine Games!');
    $name = prompt('May I have your Name?');
    line("Hello, %s", $name);
}

//  Правильный ответ, проверка четности
function parityCheck()
{
    $i = 0;
    do {
        $gen_number = rand(1, 100);
        $correct_answer = (($gen_number % 2) == 0) ? 'yes' : 'no';
        line("Question: %s", $gen_number);
        $usr_answer = prompt('Your answer: ');

        if ($usr_answer === $correct_answer) {
            $i++;
            line('Correct!');
        } else {
            line("'$usr_answer' is wrong answer ;(. Correct answer was '$correct_answer'. \nLet's try again, Tirion!");
            break;
        }
    } while ($i < 3);

    if ($i == 3) {
        //Первая игра пройдена
        line('Congratulations, Tirion!');
    }
}
