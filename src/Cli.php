<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

//  Функция приветсвия
function greetings()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your Name?');
    line("Hello, %s!", $name);
}
