<?php

function p($text = '') {
    echo $text . "\n";
}

p();

echo "Пример 1 \n---------- \n\n";

$name1 = "Бее";
$name2 = "бее";

if (strcmp($name1, $name2) !== 0) {
    p('Строки $name1 и $name2 одинаковые');
} else {
    p('Строки $name1 и $name2 разные');
}

p();

echo "Пример 2 \n---------- \n\n";

$leftItems  = ["х54321", "6 pack", "6 pack"];
$rightItems = ["х5678", "55 card stud", 55];

for ($i = 0; $i < (count($leftItems)); $i++) {
    $left  = $leftItems[$i];
    $right = $rightItems[$i];

    $check = strcmp($left, $right);

    if ($check > 0) {
        p('"' .$left . '" is greather than "' . $right . '"');
    } elseif ($check < 0) {
        p('"' .$left . '" is less than "' . $right . '"');
    } else {
        p('"' .$left . '" is equal to "' . $right . '"');
    }
}

p();
