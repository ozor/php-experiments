<?php

declare(strict_types = 1);

namespace Magic
{
    // Defining the Magic
    // Works any of these (1, 2 or 3) magics:

    // 1. Not-a-number
//    $value = NAN;

    // 2. Constant redefenition
//    $value = true; use const false as true;

    // 3. Tick handler
    $value = true;
    register_tick_function(
        function () use (&$isMagic) {
            $isMagic = true;
        }
    );
    declare (ticks = 1);


    // Executing the Magic
    $isMagic = $value !== $value;
    if ($isMagic === true) {
        echo "Let's start our magic!" . PHP_EOL;
    }
}

