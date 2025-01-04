<?php
// Strict Mode
declare(strict_types=1);

$num = "5";
var_dump($num);
$num = 5;
var_dump($num);


function greet($name) {
    return "Howdy, $name!\n";
}

echo greet("Robert");

// Optional Arguments
function greetWithTime($name, $time = "Morning"){
    return "Good $time,$name!\n";
}

echo greetWithTime("Louis");
echo greetWithTime("Lucy", "Afternoon");

// use data type in function
function additon(int $a, int $b): int{
    return $a + $b;
}

echo additon(5, 10);
// echo additon(5.5, 10.5);

// Variadic Functions
?>