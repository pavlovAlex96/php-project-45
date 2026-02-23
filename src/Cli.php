<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function greetings()
{
    line('Welcome to the Braine Games!');
    $name = prompt('May I have your Name?');
    line("Hello, %s", $name);
}
