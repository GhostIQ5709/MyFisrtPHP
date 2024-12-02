<?php declare(strict_types = 1);

function addNumbers(int $a, int $b) {
    return $a + $b;
}

echo "<h3>Strict Handling</h3>";
echo "<p>The sum of 2 and 3 is " . addNumbers(2, "3") . "</p>";

function addStrings(string $a, string $b) {
    return $a . $b;
}

echo "\n" . addStrings("Hello", 6);