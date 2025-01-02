<?php

$basket = [
    "Apple" => 4,
    "Banana" => 3
];
$total = 0;

foreach($basket as $item => $quantity){
    echo "$item: $quantity\n";
    $total += $quantity;
};
echo "total: $total\n";
?>
