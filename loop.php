<?php

// for ($i = 1; $i <= 7; $i = $i + 1) {
//     if ($i <= 5) {
//         echo "I will go to school today\n";
//     } elseif ($i == 6) {
//         echo "I will rest today\n";
//     } else {
//         echo "I will go to Church today.\n";
//     }
// }

function doSomething() {
    echo "I did something\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();

$x = 5;
$x = "Something";
$x = '@';
$x = 5.786;

function addFive($x) {
    $y = $x + 5;
    echo "$x + 5 = " . $y . "\n";
}

addFive(7);
addFive(8);
addFive(9);
addFive(10);


function addTen($x) {
    addTen($x);
    return $x + 10;
    // echo "I am done";
}

echo "Adding 10 to a number: " . addTen(1990);

// function addTen($x, $y, $z) {
//     return $x + $y + $z;
// }

// $z = ($x + $y) + ($y - $x);
