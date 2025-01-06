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
function sum(int ...$numbers):int {
    var_dump($numbers);
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}

var_dump(sum());
var_dump(sum(6));
var_dump(sum(6,1,3));

function introduceTeam(string $team,string ...$members):void{
    echo "Team $team:\n";
    var_dump($members);
    echo "Members: ".implode(", ", $members)."\n";
}

introduceTeam("A","Luffy","Naurto","Goku");

// unpacking arrays into arguments
$members =[ "A","B","C"];
introduceTeam("X",...$members);

$greet = function(string $name):string{
    return "Hello, $name!";
};
echo  $greet("Robert");

$numbers = [1,3,5];
$squared = array_map(function(int $n):int{
    return $n * $n;
},$numbers);


var_dump($squared);

$outer = 5;
$fun = function() use ($outer){
    $outer++;
    return $outer;
};

echo $fun();
?>