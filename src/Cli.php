<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

//  Функция приветсвия
function greetings(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
