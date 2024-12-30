<?php 

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while($attempts < $maxAttempts){
echo "Guess the Password ";
$guess = trim(fgets(STDIN));

$attempts++;


if ($guess == $secret) {
   echo "Correct\n";
   break;
}
elseif($attempts == $maxAttempts){
    echo "Out of Attempts\n";
}else{
    echo "Wrong But Try Again Attempts left:". ($maxAttempts - $attempts)."\n";
}

}
?>