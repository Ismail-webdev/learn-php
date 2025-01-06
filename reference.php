<?php
$name = "john\n";

$personName = &$name;

echo $personName;

$personName = "Roe\n";

echo $name;

$withoutReference = function($num){
 echo "Without reference: ";
$num *=  2;
return $num;
};

$withReference = function(&$num){
    echo "By reference: ";
$num *=  2;
return $num;
};

$num= 10;
echo $withoutReference($num)."\n";
echo $num."\n";
echo $withReference($num)."\n";
echo $num."\n";
?>